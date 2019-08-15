@extends('layouts.user-home')

@section('post')
<div id="editSection"></div>

{!! Form::open(array('action' => 'pagesController@post','class'=>'form', 'data-parsley-validate' => '', 'enctype' => 'multipart/form-data'))  !!}
<ul>
<li><span class='msg'>{{ @$msg }}</span></li>

<li><div class="input-group-lg">
<select name="cate" class="form-control">

    @foreach ($cates as $cate) {
    <option>{{ $cate->cate }}</option>
    @endforeach

    </select>
 </div>
</li>



<li><div class="input-group-lg">
	{!! Form::text('title',null,array('class' => 'form-control', 'placeholder' => 'Post Title', 'required' => 'required' )) !!}
 </div>
</li>

<li><div class="input-group-lg">
{!! Form::textarea('post',null,array('class' => '','id' => 'textarea', 'placeholder' => 'Post', 'required' => ''  )) !!}
 </div>
</li>

<li><div class="input-group-lg">
{!! Form::submit('Post',array('class' => 'btn btn-default')) !!}
 </div>
</li>

</ul>

{!! Form::close() !!}

@stop





