<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**Route::get('/', function () {
    return view('site.index');
});*/
//use App\Mail\Welcome;

/**Route::get('/site/signup', function () {
    
    Mail::to('sdelesil@gmail.com')->send(new Welcome);
    return view('signup');
});*/


Route::get('/','pagesController@index');

Route::get('/{user}','pagesController@slash');

Route::get('/site/signup','pagesController@signUpPage');
Route::post('/site/signup','pagesController@signUp');

Route::get('/site/signin','pagesController@signIn');

Route::get('/site/benefits','pagesController@benefits');
Route::get('/site/faqs','pagesController@faqs');

Route::get('/site/about','pagesController@about');
Route::get('/site/how_it_works','pagesController@how_It_Works');

Route::get('/site/recover','pagesController@recover');
Route::post('/site/recover','pagesController@recoverPass');

Route::get('/post/{id}','pagesController@single');
Route::get('/cate/{cate}','pagesController@posts');


Route::get('/user/bio','pagesController@userBio');
Route::post('/user/bio','pagesController@updateBio');

Route::get('/user/reader_bio','pagesController@readerBio');
Route::post('/user/reader_bio','pagesController@updateReaderBio');

Route::get('/user/avatar','pagesController@avatarPage');
Route::post('/user/avatar','pagesController@postAvatar');

Route::get('/user/profile','pagesController@profilePage');
Route::post('/user/profile','pagesController@updateProfile');

Route::get('/user/posts','pagesController@allPosts');

Route::get('/admin/assets','pagesController@allAssets');

Route::get('/user/plans','pagesController@myPlans');

// Route::get('/pdfs/{id}', 'YourController@viewPdf');

/**Route::get('/user/edit/{id}',[
    'as' => 'editpage',
    'uses'=>'pagesController@editPage'
]); */

Route::get('/user/pass','pagesController@pass');
Route::post('/user/pass','pagesController@changePass');

Route::get('/user/edit/{id}','pagesController@editPage');
Route::post('/user/edit/{id}','pagesController@editPost');

Route::get('/admin/edit_asset/{id}','pagesController@editAssetPage');
Route::post('/admin/edit_asset/{id}','pagesController@editAsset');

Route::get('/user/delete/{id}','pagesController@deletePage');
Route::post('/user/delete/{id}','pagesController@deletePost');

Route::get('/admin/delete_asset/{id}','pagesController@deleteAssetPage');
Route::post('/admin/delete_asset/{id}','pagesController@deleteAsset');

Route::get('/user/post','pagesController@userPost');
Route::post('/user/post','pagesController@post');

Route::get('/site/newsletter_users','pagesController@collectUsers');

Route::get('/user/index','pagesController@userIndex');
Route::post('/user/index','pagesController@log_in');

Route::get('/admin/createAsset', 'pagesController@createAssetPage'); 
Route::post('admin/createAsset','pagesController@createAsset');

Route::get('/admin/how_it_works_content','pagesController@howItWorksContent');
Route::post('/admin/how_it_works_content','pagesController@updateHowItWorksContent');

Route::get('/admin/faqs','pagesController@faqsContent');
Route::post('/admin/faqs','pagesController@updateFaqsContent');

Route::get('/admin/joinus','pagesController@joinUsContent');
Route::post('/admin/joinus','pagesController@updateJoinUsContent');

Route::get('/user/subscribe','pagesController@subscribeCheck');
Route::post('/user/subscribe','pagesController@subscribePage');

Route::get('/user/lend/{id}','pagesController@lendPage');
Route::post('/user/lend/{id}','pagesController@lendSubscribe');

Route::get('/user/callback','pagesController@callback');

Route::get('/user/score/{id}','pagesController@score');

Route::get('/user/earnings','pagesController@earnings');

Route::get('/logout','pagesController@logout');



