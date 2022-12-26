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
                <th class="{{$loop->index % 2 === 0 ? 'table-active' : 'table-dark'}}">{{$post->id}}</th>
                <td class="{{$loop->index % 2 === 0 ? 'table-active' : 'table-dark'}}">{{$post->title}} {{$loop->index % 2 == 0}}</td>
                <td class="{{$loop->index % 2 === 0 ? 'table-active' : 'table-dark'}}">{{$post->category_id}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--table-active--}}
@endsection
