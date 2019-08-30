@extends('layouts.signup')
@section('signup')



{!! Form::open(array('url' => '/site/signup', 'action' => 'pagesController@signUp', 'class'=>'form'))  !!}

<ul class="sign">
<li><h2>Get Started</h2></li>
<li><span class='msg' style="position:relative; left:-1px;">{{ @$msg }}</span></li>

<!-- <li>
  <div class="input-group-lg">
<input type='text' name='user' class="form-control" placeholder="username" required="" />
 </div>
</li> -->
<li><div class="input-group-lg">
  {!! Form::text('first','',array('required','class' => 'form-control', 'placeholder' => 'First name' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('last','',array('required','class' => 'form-control', 'placeholder' => 'Last name' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('user','',array('required','class' => 'form-control', 'placeholder' => 'username' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('email','',array('required','class' => 'form-control', 'placeholder' => 'e-mail' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('phone','',array('required','class' => 'form-control', 'placeholder' => 'phone' )) !!}
 </div>
</li>


<li>
  <div class="input-group-lg">
<button type="submit" name="submit" style="margin-top: 3px" class="btn btn-primary">Sign Up</button>  </div>
</li>


<li>
  <div class="input-group input-group-lg">
<span style="margin-top: 10px">Have an account? <a href="/site/signin">Sign In!</a></span>
</li>

</ul>


{!! Form::close() !!}


@stop
