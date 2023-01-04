@extends('layouts.main')
@section('content')
  <form method="get" action="{{route('post.edit', $post->id)}}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" value="{{$post->title}}" placeholder="Enter your title" class="form-control" id="title" name="title"/>
      @error('title')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="pass" class="form-label">Categories</label>
      <select class="form-select" name="category_id" id="category_id">
        <option value="{{$category->name}}">{{$category->name}}</option>
      </select>
      @error('category_id')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="pass" class="form-label">Tags</label>
      <select class="form-select" multiple name="tags[]" id="tags">
        @foreach($tags as $tag)
          <option
                  {{collect(old('tags'))->contains($tag->id) ? 'selected' : ''}}
                  value="{{$tag->id}}"
          >{{$tag->name}}</option>
        @endforeach
      </select>
      @error('tags')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@endsection
<style>
</style>