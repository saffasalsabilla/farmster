@extends('homeblog.content')
@section('isiblog')
<div class="col-md-8 hot-post-left">
    <!-- post -->
    @foreach($data as $list_post)
    <div class="post post-row">
        <a class="post-img" href="{{ route('blog.content', $list_post->slug ) }} "><img src="{{ asset($list_post->img)}}" alt="{{ $list_post->judul }}"></a>
        <div class="post-body">
            <div class="post-category">
                <a href="category.html">{{ $list_post->category->name }}</a>
            </div>
            <h3 class="post-title"><a href="blog-post.html">{{ $list_post->judul }}</a></h3>
            <ul class="post-meta">
                <li><a href="author.html">{{ $list_post->users->name }}</a></li>
                <li>{{\Carbon\Carbon::parse($list_post->created_at)->diffForHumans()}}</li>
            </ul>
        </div>
    </div>
    @endforeach
    <center>{{$data->links()}}</center>
</div>
<!-- /post -->
@endsection