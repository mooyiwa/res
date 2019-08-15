@extends('layouts.user-home')


@section('avatar')


{!! Form::open(array('url' => '/user/avatar/','enctype' => 'multipart/form-data')) !!}
<ul class="">

<li><span class='msg'>{{ @$msg }}</span></li>
<li>
<div class="input-group-lg">
{!! Form::file('image', array('class' => 'image')) !!}
</div>
</li>

<li>
<div class="input-group-lg">
{!! Form::submit('Attach Avatar',['class' => 'btn btn-default']) !!}
</div>
</li>

</ul>

{!! Form::close() !!}

@stop

