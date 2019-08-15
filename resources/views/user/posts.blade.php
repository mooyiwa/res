@extends('layouts.user-home')

@section('posts')


<table class="table">
    <tr><th>Post Title</th> <th>Timestamp</th></tr>
    <tbody id='go'>
        
   @foreach($posts as $post)
    
    <tr class="bolder"><td>{{ $post->title }}</td><td>{{ $post->timestamp }}</td>
        
    <td><a href="/user/edit/{{$post->id}}"> <img src="{{ URL::asset('img/edit.png') }}" /> </a></td>
    <td><a href='/user/delete/{{$post->id}}'> <img src="{{ URL::asset('img/delete.png') }}" /> </a></td>
    </tr>
   
    @endforeach
        
</tbody></table> 

@stop

