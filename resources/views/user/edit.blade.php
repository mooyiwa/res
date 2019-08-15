@extends('layouts.user-home')


@section('editpost')


@foreach($posts as $post)

{!! Form::open(array('url' => '/user/edit/'.$post->id, 'action' => 'pagesController@editPost', 'class'=>'form', 'data-parsley-validate' => '') ) !!}
<ul>	
<li><span class='msg'>{{ @$msg }}</span></li>

<li><div class="input-group-lg">
<span class="form-control">{{$post->cate}}</span>
 </div>
</li>

<li><div class="input-group-lg">
  {!! Form::text('title',$post->title,array('class' => 'form-control' , 'required' => '')) !!}
 </div>
</li>

<li><div class="input-group-lg">

  <textarea name="post" id="textarea"
  placeholder="Post" required="">{!! $post->post !!}</textarea>
 </div>
</li>

<li><div class="input-group-lg">
{!! Form::submit('Edit Post',array('class' => 'btn btn-default')) !!}
 </div>
</li>

@endforeach
</ul>
{!! Form::close() !!}

@stop

