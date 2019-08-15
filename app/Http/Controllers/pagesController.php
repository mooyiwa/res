<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use DB;
use App\Post;
use App\Asset;
use App\User;
use App\Pro;
use App\Work;
use App\Faq;
use App\Join;
use App\Plan;
use App\Account;
use App\Mail\SignedUp;
use App\Mail\Recovered;
use App\Mail\FriendSignedUp;

class pagesController extends Controller
{

    public function __Construct(Account $account, Post $post, Asset $asset, User $user, Pro $pro, Work $work, Faq $faq, Join $join, Plan $plan) {

        $this->user = $user;
        $this->post = $post;
        $this->asset = $asset;
        $this->account = $account;
        $this->work = $work;
        $this->faq = $faq;
        $this->join = $join;
        $this->pro = $pro;
        $this->plan = $plan;

    }
    public function index(Request $request) {
        session()->flush();
//get assets
        $assets = $this->asset->get();
        return view('index', compact('assets'));
    }

        public function userIndex(Request $request) {


        $posts = $this->post->limit(5)->orderBy('start','desc')->get();
        $assets = $this->asset->get();
        if(session()->get('logged') != ''){
        return view('user.index', compact('posts','assets'));
      }
    }

    public function signUpPage() {

        return view('signup');
    }

    public function signIn() {

        return view('signin');
    }

    public function recover() {

        return view('recover');
    }

    public function single($id) {

        $posts = $this->post->where('id',$id)->get();
        $cates = $this->cate->get();
        if(session()->get('logged') == ''){
        return view('single',compact('cates','posts'));
      }
      elseif(session()->get('logged') != ''){
        return view('user.logged_single',compact('cates','posts'));
      }
    }

    public function posts($cate) {

        $posts = $this->post->orderBy('start','desc')->where('cate',$cate)->get();
        $cates = $this->cate->get();
        if(session()->get('logged') == ''){
        return view('posts',compact('cates','posts'));
      }
        elseif(session()->get('logged') != ''){
        return view('user.logged_posts',compact('cates','posts'));
      }
    }

    public function log_in(Request $request) {

        $user = $this->user->where('username',$request->input('user'))->first();
        if($user){ //username exists , go for password test

            $hashed = md5($request->input('pass')); //hash the password

            $pass = $this->user->where([
                ["username",$request->input('user')],
                ["password",$hashed],
                ])->first();

            if($pass){ // return 'user found and password is correct';
               //session()->put('hash','moo'); session()->get('hash');
               session()->put('logged',$user->username);
               session()->put('first',$user->first);
               session()->put('last',$user->last);
               session()->put('who',$pass->who);
               session()->put('upline',$pass->upline);

               //variables for page
                $posts = $this->post->limit(5)->orderBy('start','desc')->get();
                $assets = $this->asset->get();

              //handle expired subscriptions
               $today = date('Y-m-d'); 
               $exp = $this->account->where('username',session()->get('logged'))->first(); 
               if(!empty($exp)){
               if($today >= $exp->finish){

                        $this->account->where('username',session()->get('logged'))
                                     ->update([
                                    
                                    'status' => 'N'
                                  
                     ]);
               }

                  //handle ZERO CREDIT
                
               $low = $this->account->where('username',session()->get('logged'))->first(); 
               if($low->credit == '0.00'){

                        $this->account->where('username',session()->get('logged'))
                                     ->update([
                                    
                                    'status' => 'N'
                                  

                     ]);
              
             }
          }
               return view('user.index', compact('user','posts','assets'));


            }
            elseif(!$pass){

                $msg = "User found but password is not correct";
                return view('signin', compact('msg'));
            }
        }
        elseif(!$user){

            $msg = "Username does not exist!";
            return view('signin', compact('msg'));
        }

    }


    public function userBio() {

      if(session()->get('logged') != ''){

       $details = $this->user->where('username',session()->get('logged'))->first();
       
       return view('user.user_bio', compact('details'));
      }

    }

   public function updateBio(Request $request) {
       $update = $this->user->where('username',session()->get('logged'))
                            ->update(['first' => $request->input('first'),
                                      'last' => $request->input('last'),          
                                      'email' => $request->input('email'),
                                      'phone' => $request->input('phone'),
                                      'kin' => $request->input('kin'),
                                      'kin_address' => $request->input('kin-address'),
                                      'kin_phone' => $request->input('kin-phone'),
                                      'bank' => $request->input('bank'),
                                      'account_name' => $request->input('account_name'),
                                      'account_no' => $request->input('account_no')


                                    ]
                          );
   // update details in posts table
      $update2 = $this->post->where('auth',session()->get('logged'))
                            ->update(['fname' => $request->input('first') . ' '. $request->input('last')

                                    ]
                          );  

      if($update || $update2){
        $msg = 'Bio Updated!';
              
        // bio details / placeholders
        $details = $this->user->where('username',session()->get('logged'))->first();
        return view('user.user_bio', compact('msg', 'details'));
      }
      
    }

  

    public function userPost() { //method to display post form

     if(session()->get('logged') != ''){

       $cates = $this->cate->get();
       return view('user.post',compact('cates'));
     }

    }



    public function post(Request $request) { //method to handle job posts
      if(session()->get('logged') != ''){

                $start = date('Y-m-d');
                $finish = date('Y-m-d', strtotime($start. ' + 30 days'));
                $timestamp = date('Y-m-d H:i:s');
                $post_id = substr(number_format(time() * rand(),0,'',''),0,5);
                $fullname = session()->get('first').' '.session()->get('last');

    $post = $this->post->insert(['title' => $request->input('title'),
                                      'cate' => $request->input('cate'),
                                      'post' => $request->input('post'),
                                      'start' => $start,
                                      'finish' => $finish,
                                      'timestamp' => $timestamp,
                                      'post_id' => $post_id,
                                      'accepted' => 'Y',
                                      'fname' => $fullname,
                                      'auth' => session()->get('logged')

                           ]);



      if($post){
        $msg = 'Article Posted!';
        $cates = $this->cate->get();
        return view('user.post', compact('msg','cates'));
      }
     } 
      //
    }

     public function allAssets() {

     if(session()->get('logged') != ''){

       $assets = $this->asset->get();
       return view('user.assets', compact('assets'));
     }

    }

     public function allPosts() {

     if(session()->get('logged') != ''){

       $posts = $this->post->where('auth',session()->get('logged'))->get();
       $cates = $this->cate->get();
       return view('user.posts', compact('posts','cates'));
     }

    }

      public function editAssetPage($id) {

     if(session()->get('logged') != ''){
       $assets = $this->asset->where('id',$id)->get();
       return view('user.edit-asset', compact('assets'));
     }

    } 

      public function editAsset($id, Request $request) {

     if(session()->get('logged') != ''){
 
        
           $post = $this->asset->where('id',$id)->update([
             'asset' => $request->input('asset'),
             'location' => $request->input('location'),
             'rate' => $request->input('rate'),
             'period' => $request->input('period')
           ]);


      if($post){
       $msg = 'Asset Edited!';
       $assets = $this->asset->where('id',$id)->get();
       return view('user.edit-asset', compact('msg','assets'));
     }
     }

  }

      public function deleteAssetPage($id) {

     if(session()->get('logged') != ''){

       $assets = $this->asset->where('id',$id)->get();
       return view('user.delete-asset', compact('assets'));
     }


    }  

          public function deleteAsset($id) {

     if(session()->get('logged') != ''){

       $this->asset->where('id',$id)->delete(); //run delete
       $assets = $this->asset->get();
       return view('user.assets', compact('assets')); 
      }
    }

    public function editPage($id) {

     if(session()->get('logged') != ''){

       $posts = $this->post->where('id',$id)->get();
       $cates = $this->cate->get();
       return view('user.edit', compact('posts','cates'));
     }


    }

    public function editPost($id, Request $request) {

     if(session()->get('logged') != ''){

           $post = $this->post->where('id',$id)->update(['title' => $request->input('title'),
                                      
                                      'post' => $request->input('post')

                           ]);

      if($post){
       $msg = 'Post Edited!';
       $posts = $this->post->where('id',$id)->get();
       $cates = $this->cate->get();
       return view('user.edit', compact('posts','msg','cates'));
     }
     }

  }

      public function deletePage($id) {

     if(session()->get('logged') != ''){

       $posts = $this->post->where('id',$id)->get();
       $cates = $this->cate->get();
       return view('user.delete', compact('posts','cates'));
      }
    }

      public function deletePost($id) {

     if(session()->get('logged') != ''){

       $this->post->where('id',$id)->delete(); //run delete
       $posts = $this->post->where('auth',session()->get('logged'))->get(); //fetch posts
       $cates = $this->cate->get();
       return view('user.posts', compact('posts','cates')); // return all posts view
      }
    }

    public function signUp(Request $request) {

     $username = $request->input('user');
     $email = $request->input('email');
  
     $user_id = substr(number_format(time() * rand(),0,'',''),0,5);
     $pass = "pass8008!";
     $hash_pass = md5($pass);
     $secret = substr(number_format(time() * rand(),0,'',''),0,6);
     $hash_secret = md5($secret);

     

     $create = $this->user->insert(['username' => $username,
                                    'email' => $email,
                                    'who' => 'user',
                                    'password' => $hash_pass,
                                    'user_id' => $user_id,
                                    'secret' => $secret,
                                    'hash_secret' => $hash_secret

                     ]);



      if($create){
        \Mail::to($request->input('email'))->send(new SignedUp);
        $msg = "Account created! See your email.";
      }

     return view('signup', compact('msg')); // return signup view

  }

       public function pass() {

     if(session()->get('logged') != ''){
     
       return view('user.pass');
     }

    }


       public function changePass(Request $request) {

     if(session()->get('logged') != ''){

         $newpass = md5($request->input('newpass'));


         $change = $this->user->where('username',session()->get('logged'))
                              ->update(['password' => $newpass ]);
         if($change){
           $msg = "Password changed!";
           
           return view('user.pass', compact('msg'));
         }
     }

    }


    public function profilePage() {

  if(session()->get('logged') != ''){

    $bio = $this->user->where('username',session()->get('logged'))->first();
    return view('user.profile', compact('bio'));
  }

 }

    public function updateProfile(Request $request) {

   if(session()->get('logged') != ''){

     $post = $this->user->where('username',session()->get('logged'))
                        ->update(['cate' => $request->input('title'),
                                  'fullname' => $request->input('fname'),
                                  'email' => $request->input('email'),
                                  'me' => $request->input('me'),
                                  'fb' => $request->input('fb'),
                                  'twitter' => $request->input('twitter'),
                                  'linkedin' => $request->input('ln')

                     ]);

      if($post){

     $msg = "Bio Updated!";
     $bio = $this->user->where('username',session()->get('logged'))->first();
     return view('user.profile',compact('msg','bio'));
    }
   }

 }


 public function avatarPage() {

if(session()->get('logged') != ''){
 
 return view('user.avatar');
  }
 }


 public function postAvatar(Request $request)

 {
   if(session()->get('logged') != ''){

     $this->validate($request, [

         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

     ]);


     $image = $request->file('image');

     $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

     $destinationPath = public_path('photos');

     $image->move($destinationPath, $input['imagename']);


     $attach = $this->user->where('username',session()->get('logged'))
                ->update(['photo_id' => $input['imagename']

  ]);

    if($attach){
      $msg = "Avatar attached!";
      return view('user.avatar',compact('msg'));
     }
   }
 }

 public function slash($user) {

    $me = $this->user->where('username',$user)->first();
    if(!$me){
       exit; 
    }else{
      //get author scribbles
      $posts = $this->post->orderBy('start','desc')->where('auth',$user)->get();
    return view('slash', compact('me','posts'));

    }
 }

     //create asset page
      public function createAssetPage() {
       if(session()->get('logged') != ''){
        $assets = $this->asset->get();
        return view('user.create_asset',compact('assets'));
      } 
    }
  // create asset
      public function createAsset(Request $request) {

             $asset = $request->input('asset');
             $location = $request->input('location');
             $rate = $request->input('rate');
             $period = $request->input('period');
             $amt = $request->input('amt');

     $create = $this->asset->insert(
                     ['asset' => $asset,
                      'location' => $location,
                      'rate' => $rate,
                      'amount' => $amt,
                      'period' => $period
                     
                     
                     ]
      );

//handle upload next
$this->validate($request, [

  'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

]);


$image = $request->file('image');

$input['imagename'] = time().'.'.$image->getClientOriginalExtension();

$destinationPath = public_path('photos');

$image->move($destinationPath, $input['imagename']);


$attach = $this->asset->where('asset',$request->input('asset'))
         ->update(['asset_id' => $input['imagename']

]);


      if($create && $attach){
        $msg = "Asset created!";
      }

       if(session()->get('logged') != ''){
        $assets = $this->asset->get();
        return view('user.create_asset', compact('msg','assets'));
      } 
    }

 public function recoverPass(Request $request) {

   //get podt data

   $pass = substr(number_format(time() * rand(),0,'',''),0,5);

     $user = $this->user->where('username',$request->input('user'))->first();
     if($user){ //username exists , go for secret password test

         $hashed_secret = md5($request->input('secret')); //hash the secret password

         $testpass = $this->user->where([
             ["username",$request->input('user')],
             ["hash_secret",$hashed_secret],
             ])->first();

         if($testpass){ // insert new temporary pass

            $recover = $this->user->where('username',$request->input('user'))
                            ->update(['password' => md5($pass), 'passcode' => $pass ]);
            
            
            
             if($recover){
                 
            \Mail::to($request->input('email'))->send(new Recovered);    
            $msg = "Password recovered. See your email!";
            return view('recover', compact('msg'));
          } 
          //else{return view('index');}

         }

     }


 }
   //pro reader content pg
        public function proReaderContent() {

     if(session()->get('logged') != ''){
      
      $pros = $this->pro->where('who','reader')->get();
      //cates
      $cates = $this->cate->get();
       return view('user.pro_reader_content',compact('pros','cates'));
     }

    }
  // pro reader content -- user
          public function proReader() {

     if(session()->get('logged') != ''){

      $pros = $this->pro->where('who','reader')->get();
            //cates
      $cates = $this->cate->get();
       return view('user.pro_reader',compact('pros','cates'));
     }

    }
  //update pro reader
   public function updateProReaderContent(Request $request) {
       $update = $this->pro->where('who','reader')
                            ->update([
                                      'title' => $request->input('title'), 
                                      'reader' => $request->input('reader')


                                    ]
                          );
      if($update){
        $msg = 'Record Updated!';
               
        // bio details / placeholders
        $pros = $this->pro->where('who','reader')->get();
        return view('user.pro_reader_content', compact('msg','pros'));
      }
      //
    }  

  // pro author content -- user
          public function proAuthor() {

     if(session()->get('logged') != ''){

      $pros = $this->pro->where('who','author')->get();
      //cates
      $cates = $this->cate->get();
       return view('user.pro_author',compact('pros','cates'));
     }

    }
  // pro author content pg  -- adm
          public function proAuthorContent() {

     if(session()->get('logged') != ''){

      $pros = $this->pro->where('who','author')->get();
      //cates
      $cates = $this->cate->get();
       return view('user.pro_author_content',compact('pros','cates'));
     }

    }
//update pro auth
   public function updateProAuthorContent(Request $request) {
       $update = $this->pro->where('who','author')
                            ->update([
                                      'title' => $request->input('title'), 
                                      'author' => $request->input('author')


                                    ]
                          );
      if($update){
        $msg = 'Record Updated!';
               
        // bio details / placeholders
        $pros = $this->pro->where('who','author')->get();
        return view('user.pro_author_content', compact('msg','pros'));
      }
      //
    }

      // how it works content pg  -- adm
          public function howItWorksContent() {

     if(session()->get('logged') != ''){

      $works = $this->work->get();
          
       return view('user.how_it_works_content',compact('works'));
     }

    }

  //update how it works
   public function updateHowitWorksContent(Request $request) {
       $update = $this->work->where('id','1')
                            ->update([
                                      'title' => $request->input('title'), 
                                      'how' => $request->input('how')


                                    ]
                          );
      if($update){
        $msg = 'Record Updated!';
               
        // details
        $works = $this->work->get();
            
        return view('user.how_it_works_content', compact('msg','works'));
      }
      //
    }  

          // how it works -- public view
          public function howItWorks() {

      $works = $this->work->get();
      $assets = $this->asset->get();
       return view('how_it_works',compact('works','assets'));
    

    }

    //faqs
          // faq content pg  -- adm
          public function faqsContent() {

            if(session()->get('logged') != ''){
       
             $faqs = $this->faq->get();
                 
              return view('user.faqs',compact('faqs'));
            }
       
           }
       
         //update faqs
          public function updateFaqsContent(Request $request) {
              $update = $this->faq->where('id','1')
                                   ->update([
                                             
                                             'story' => $request->input('story')
       
       
                                           ]
                                 );
             if($update){
               $msg = 'Record Updated!';
                      
               // details
               $faqs = $this->faq->get();
                   
               return view('user.faqs', compact('msg','faqs'));
             }
            
           }  


    //joinus
          // joinus content pg  -- adm
          public function joinUsContent() {

            if(session()->get('logged') != ''){
       
             $joins = $this->join->get();
                 
              return view('user.join_us',compact('joins'));
            }
       
           }
       
         //update joinus
          public function updateJoinUsContent(Request $request) {
              $update = $this->join->where('id','1')
                                   ->update([
                                             
                                             'story' => $request->input('story')
       
       
                                           ]
                                 );
             if($update){
               $msg = 'Record Updated!';
                      
               // details
               $joins = $this->join->get();
                   
               return view('user.join_us', compact('msg','joins'));
             }
             //
           }    



        public function referFriendPage() {

  if(session()->get('logged') != ''){


    $cates = $this->cate->get();
    return view('user.refer',compact('cates'));
  }

 }

         public function referFriend(Request $request) {

  if(session()->get('logged') != ''){

     $user_id = substr(number_format(time() * rand(),0,'',''),0,5);
     $pass = "pass8008!";
     $hash_pass = md5($pass);
     $secret = substr(number_format(time() * rand(),0,'',''),0,6);
     $hash_secret = md5($secret);

         $refer = $this->user->insert(['username' => $request->input('user'),
                                    'email' => $request->input('email'),
                                    'upline' => session()->get('logged'),
                                    'password' => $hash_pass,
                                    'user_id' => $user_id,
                                    'secret' => $secret,
                                    'hash_secret' => $hash_secret,
                                    'who' => 'reader'

                     ]);

     if($refer){
       \Mail::to($request->input('email'))->send(new FriendSignedUp);
        $msg = "Scribble57 Reader Signed Up!";
      }
    //cates
    $cates = $this->cate->get();  
    return view('user.refer', compact('msg','cates'));
  }

 }


        public function subscribeCheck() {

  if(session()->get('logged') != ''){
        // bio details / placeholders
        $details = $this->user->where('username',session()->get('logged'))->first();
       

        //check also for running subscription or no subscription
        $current = $this->account->where('username',session()->get('logged'))->first();
        if(empty($current) || $current->status == 'N'){
    return view('user.subscribe_check',compact('details','cates','current'));
    }
        elseif($current->status == 'Y'){
    return view('user.subscribe_state',compact('details','current'));
    }
  }

 }

        public function subscribePage(Request $request) {

  if(session()->get('logged') != ''){
    //request vars
      $first = $request->input('first');
      $last = $request->input('last');
      $email = $request->input('email');
      $amount = $request->input('amount');
  
//session vars
               session()->put('amount',$amount);
               session()->put('first',$first);
               session()->put('last',$last);
               session()->put('email',$email);
        // bio details / placeholders
        $details = $this->user->where('username',session()->get('logged'))->first();
      
    return view('user.subscribe_page',compact('details'));
  }

 }

         public function earnings() {

  if(session()->get('logged') != ''){
        // bio details / placeholders
        $details = $this->user->where('username',session()->get('logged'))->first();
      

        //get earnings
        $earnings = $this->account->where('username',session()->get('logged'))->first();
        if(!empty($earnings)){

    return view('user.earnings',compact('details','earnings'));
    }
    elseif(empty($earnings)){
    return view('user.subscribe_check',compact('details'));
    }
  }

 }

         public function callback() {

  if(session()->get('logged') != ''){

    $result = array();
//The parameter after verify/ is the transaction reference to be verified
$url = 'https://api.paystack.co/transaction/verify/'. $_GET['reference'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
  $ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer sk_test_0702e5d1f78a11b783c82e78ed53bf3df0f39104']
);
$request = curl_exec($ch);
if(curl_error($ch)){
 echo 'error:' . curl_error($ch);
 }
curl_close($ch);

if ($request) {
  $result = json_decode($request, true);
}

if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {
  $msg = "Transaction was successful";
  //Perform necessary action 
  //check if first subscription
  $first_timer = $this->account->where('username',session()->get('logged'))->first();
  if(empty($first_timer->username)){
    //time vars
                $start = date('Y-m-d');
                $finish = date('Y-m-d', strtotime($start. ' + 30 days'));
               //selective credit amount
                if(session()->get('who') == 'reader'){
                $credit = session()->get('amount') - 200;
                }else{
                 $credit = session()->get('amount'); 
                }

         //inform accounts table

         $fname = session()->get('first'). ' ' . session()->get('last');

         $this->account->insert(['username' => session()->get('logged'),
                                    'fname' => $fname,
                                    'credit' => $credit,
                                    'start' => $start,
                                    'finish' => $finish,                    
                                    'upline' => session()->get('upline'),
                                    'status' => 'Y',
                                    'who' => session()->get('who')

                     ]);

      // credit upline  / add to current bonus
         //get current upline bonus *if reader
         if(session()->get('who') == 'reader'){
       $getbal = $this->account->where('username',session()->get('upline'))->first();
       $bal = $getbal->bonus;
       //$status = $getbal->status;//upline earns only if subscription is on 
       $plus = $bal + 200;

       $this->account->where([

                                   ['username','=',session()->get('upline')],
                                   ['status','=','Y']

                                 ])->update([
                                      
                                      'bonus' => $plus


                                    ]
                          ); 
              }
            } //first_timer
   elseif(!empty($first_timer->username)){
    //time vars
                $start = date('Y-m-d');
                $finish = date('Y-m-d', strtotime($start. ' + 30 days'));
               //selective credit amount
                if(session()->get('who') == 'reader'){
                $credit = session()->get('amount') - 200;
                }else{
                 $credit = session()->get('amount'); 
                }
                
         //inform accounts table

         $fname = session()->get('first'). ' ' . session()->get('last');

         $this->account->where('username',session()->get('logged'))
                       ->update(['username' => session()->get('logged'),
                                    'fname' => $fname,
                                    'credit' => $credit,
                                    'start' => $start,
                                    'finish' => $finish,
                                    'status' => 'Y'
                                  

                     ]);

      // credit upline  / add to current bonus
         //get current upline bonus
       $getbal = $this->account->where('username',session()->get('upline'))->first();
       $bal = $getbal->bonus;
       $plus = $bal + 200;

       $this->account->where([

                                   ['username','=',session()->get('upline')],
                                   ['status','=','Y']

                                 ])->update([
                                      
                                      'bonus' => $plus


                                    ]
                          ); 

                           
  }
   
}else{
  $msg = "Transaction was unsuccessful";
}
    //cates
    $cates = $this->cate->get();    
    return view('user.subscribe_page',compact('msg','cates'));
  }

 }

       public function score($id) {

     if(session()->get('logged') != ''){

       $sql = $this->post->where('id',$id)->first();
       $score = $sql->score + 1;
       $auth = $sql->auth;
   
       //update score on post

              $this->post->where('id',$id)->update([
                                      
                                      'score' => $score


                                    ]
                          ); 

        //pay author  - have to be paying reader, so check
              //author has to be paying author too -- status = Y
              $paid_reader = $this->account->where('username',session()->get('logged'))->first();

              if(!empty($paid_reader) && $paid_reader->status == 'Y'){

              $ql = $this->account->where('username',$auth)->first();
              $bonus = $ql->bonus + 50;
              $this->account->where([

                                    ['username','=',$auth],
                                    ['status','=','Y']

                                  ])->update([
                                      
                                      'bonus' => $bonus


                                    ]
                          ); 
             //deduct from paying reader
                                  //only if target author is Paid
             $paid_auth = $this->account->where('username',$auth)->first();  

             if($paid_auth->status == 'Y'){
                                
             $reader = $this->account->where('username',session()->get('logged'))->first(); 
             $bal = $reader->credit - 50; 

              $this->account->where('username',session()->get('logged'))->update([
                                      
                                      'credit' => $bal


                                    ]
                          ); 
             }

            }

 
       $posts = $this->post->where('id',$id)->get();
       return view('user.logged_single', compact('posts'));
     
   }


    } 

    public function myPlans() {

      if(session()->get('logged') != ''){
 
        $plans = $this->plan->where('user_id',session()->get('logged'))->get();
        return view('user.plans', compact('plans'));
      }
 
     }


 
}//end of file
