@extends('layouts.signup')
@section('signin')


{!! Form::open(array('action' => 'pagesController@log_in', 'class'=>'form'))  !!}

<ul class="sign">
<li><p class='msg' style="position:relative; left:-6px;">{{ @$msg }}</p></li>

<li><div class="input-group-lg">
  <input type="text" name="user" class="form-control" placeholder="Username">
 </div></li>

 <li><div class="input-group-lg"> 
  <input type="password" name="pass" class="form-control" placeholder="Password">
</div></li>

<li><div class="input-group-lg"> <button type="submit" name="submit" class="btn btn-default">Sign in</button></div></li><br />
<li><span style="margin-top: 10px;">New User? <a href="/site/signup">Sign Up!</a></span></li>
<li><span style="margin-top: 10px"><a href="/site/recover">Forgot password?</a></span></li>

</ul>


{!! Form::close() !!}



@stop
