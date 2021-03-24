@extends('homedashboard.blank')
@section('title','Edit Tag')
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

<form action="{{ route('tag.update', $tag->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="form-group">
        <label>Tag</label>
        <input type="text" class="form-control" name="name" value="{{$tag->name}}">
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Update</button>
    </div>
</form>
@endsection