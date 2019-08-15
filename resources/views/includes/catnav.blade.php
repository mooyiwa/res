
<ul class="cates">
@foreach($cates as $cate)

 <li><a href="/cate/{{ $cate->cate }}"> {{ $cate->cate }} </a></li>

@endforeach
</ul>
