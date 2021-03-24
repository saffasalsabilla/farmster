@extends('homeblog.content')

@section('isiblog')

@foreach($data as $content_blog)

<!-- PAGE HEADER -->
<div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url({{ asset($content_blog->img)}});" data-stellar-background-ratio="0.1"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="category.html">{{$content_blog->category->name}}</a>
						</div>
						<h1>{{$content_blog->judul}}</h1>
						<ul class="post-meta">
							<li><a href="author.html">{{$content_blog->users->name}}</a></li>
							<li>{{$content_blog->created_at}}</li>
							<!-- <li><i class="fa fa-comments"></i> 3</li>
							<li><i class="fa fa-eye"></i> 807</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
        </header>
        <div class="col-md-8 hot-post-left">
        <br>
<div class="section-row">
{!!$content_blog->content!!}
</div>
@endforeach
        </div>

@endsection