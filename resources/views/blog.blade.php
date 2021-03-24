@extends('homeblog.content')
@section('isiblog')
<div class="col-md-8 hot-post-left">
    <!-- post -->
    <div class="post post-thumb">
        <a class="post-img" href="/sapi"><img src="{{asset('templat/img/steak.jpg')}}" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="/sapi">Sapi</a>
            </div>
            <h3 class="post-title title-lg"><a href="/sapi">Cara membuat steak daging rumahan, enak dan tanpa repot
</a></h3>
            <ul class="post-meta">
                <!-- <li><a href="/sapi">Sapi Bagus</a></li>
                <li>15 Maret 2021</li> -->
            </ul>
        </div>
    </div>
    <!-- /post -->
</div>
<div class="col-md-4 hot-post-right">
    <!-- post -->
    <div class="post post-thumb">
        <a class="post-img" href="/kambing"><img src="{{asset('templat/img/kambing.jpg')}}" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="/kambing">Kambing</a>
            </div>
            <h3 class="post-title"><a href="/kambing">Resep olahan daging kambing yang enak, empuk, antibau dan praktis</a></h3>
            <ul class="post-meta">
                <!-- <li><a href="author.html">Chairul Rahman</a></li>
                <li>19 Maret 2021</li> -->
            </ul>
        </div>
    </div>
    <!-- /post -->

    <!-- post -->
    <div class="post post-thumb">
        <a class="post-img" href="/ayam"><img src="{{asset('templat/img/ayam2.jpeg')}}" alt=""></a>
        <div class="post-body">
            <div class="post-category">
                <a href="/ayam">Ayam</a>
            </div>
            <h3 class="post-title"><a href="/ayam">Resep masakan ayam paling enak, empuk, dan sederhana
                </a></h3>
            <ul class="post-meta">
                <!-- <li><a href="author.html">Khulafa Pinta Winastya</a></li>
                <li>20 Maret 2021</li> -->
            </ul>
        </div>
    </div>
    <!-- /post -->
</div>
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">Recent posts</h2>
                        </div>
                    </div>
                    <!-- post -->
                    @foreach($data as $recent_post)
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="{{route('blog.content', $recent_post->slug)}}"><img src="{{$recent_post->img}}" alt="" style="height: 200px"></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="#">{{$recent_post->category->name}}</a>
                                </div>
                                <h3 class="post-title"><a href="#">{{$recent_post->judul}}</a></h3>
                                <ul class="post-meta">
                                    <li><a href="#">{{$recent_post->users->name}}</a></li>
                                    <li>{{\Carbon\Carbon::parse($recent_post->created_at)->diffForHumans()}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- /post -->
                </div>
                <!-- /row -->
            </div>
            <!-- /row -->
            @endsection