@extends('layouts.main')
@section('content')
    <table class="table table-dark">
        <thead>
        <th scope="row">id</th>
        <th scope="row">title</th>
        <th scope="row">Category</th>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th class="{{$loop->index % 2 === 0 ? 'table-active' : 'table-dark'}}">
                    <a href="{{route('post.show', ["id" => $post->id])}}">
                        {{$post->id}}
                    </a>
                </th>
                <td class="{{$loop->index % 2 === 0 ? 'table-active' : 'table-dark'}}">
                    <a href="{{route('post.show', ["id" => $post->id])}}">
                        {{$post->title}}
                    </a>
                </td>
                <td class="{{$loop->index % 2 === 0 ? 'table-active' : 'table-dark'}}">
                    <a href="{{route('post.show', ["id" => $post->id])}}">
                        {{$post->category_id}}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--table-active--}}
@endsection
