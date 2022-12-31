@extends('layouts.main')
@section('content')
  <form method="post" action="{{route('post.store')}}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      {{$post->title}}
      <input type="text" value="{{$post->title}}" placeholder="Enter your title" class="form-control" id="title" name="title"/>
      @error('title')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="mb-3">
      <label for="pass" class="form-label">Categories</label>
      <select class="form-select" name="category_id" id="category_id">
        <option disabled>Open this select menu</option>
        @foreach($categories as $category)
          <option
                  {{$category->id == $post->category->id ? 'selected' : ""}}
                  value="{{$category->id}}"
          >
            {{$category->id}}: {{$category->name}}
          </option>
        @endforeach
      </select>
      @error('category_id')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    @foreach($post->tags as $tag)
      {{gettype($tag)}}
    @endforeach
    <div class="mb-3">
      <label for="pass" class="form-label">Tags</label>
      <select class="form-select" multiple name="tags[]" id="tags">
        <option disabled>Open this select menu</option>
        @foreach($tags as $tag)
          <option
                  {{is_array($post->tags) && in_array($tag->id, $post->tags) ? 'selected' : ''}}
                  value="{{$tag->id}}"
          >{{$tag->name}}</option>
        @endforeach
      </select>
      @error('tags')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
<style>
  #tags {
    height: 200px;
  }
</style>