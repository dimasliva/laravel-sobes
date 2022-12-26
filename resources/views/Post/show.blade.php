@extends('layouts.main')
@section('content')
  <form method="post" action="{{route('post.store')}}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" value="{{$post->title}}" placeholder="Enter your title" class="form-control" id="title" name="title"/>
      @error('title')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="pass" class="form-label">Categories {{old('category_id')}}</label>
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
        <option disabled>Open this select menu</option>
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
    <button type="submit" class="btn btn-primary">Open</button>
  </form>
@endsection
<style>
  #tags {
    height: 200px;
  }
</style>