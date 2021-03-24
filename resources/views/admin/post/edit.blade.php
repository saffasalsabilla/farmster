@extends('homedashboard.blank')
@section('title','Edit Post')
@section('content')

@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif

<form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul" value="{{$post->judul}}">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category_id" id="">
            <option value="" holder>Choose Category</option>
            @foreach($category as $result)
            <option value="{{$result->id}}"
                @if($post->category_id == $result->id)
                    selected
                @endif
            >{{$result->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Choose Tags</label>
        <select class="form-control select2" multiple="" name="tags[]">
            @foreach($tags as $tag)
            <option value="{{$tag->id}}"
                @foreach($post->tags as $value)
                    @if($tag->id == $value->id)
                        selected
                    @endif
                @endforeach
            >{{$tag->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$post->content}}</textarea>
    </div>
    <div class="form-group">
        <label>Thumbnail</label>
        <input type="file" class="form-control" name="img">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Updated</button>
    </div>
</form>

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('content');
</script>

@endsection