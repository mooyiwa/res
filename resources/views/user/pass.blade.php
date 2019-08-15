@extends('layouts.user-home')


@section('pass')

{!! Form::open(array('action' => 'pagesController@changePass', 'class'=>'form', 'data-parsley-validate' => ''))  !!}
<ul>
<li><span class="msg">{{ @$msg }} </span></li>


<li><div class="input-group-lg">
<label>New Password</label>
</div>
</li>

 <li>
 	<div class="input-group-lg">
<input type="password" name="newpass" class="form-control" placeholder="password" required="" />
</div>
</li>


 <li><div class="input-group-lg">
<button type="submit" name="submit" class="btn btn-default">Change</button> 
</div>
</li>

</ul>
{!! Form::close() !!}     
    
@stop	








