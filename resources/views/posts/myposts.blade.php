@extends('layouts.app')

@section('content')


    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th> Title </th>

                <th> Content </th>

                <th> Author </th>

                <th> Date & Time </th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td> {{$post->title }}</td>
                        <td> {{$post->description}}</td>
                        <td> {{$post->created_by}}</td>
                        <td> {{$post->created_at}}</td>
                        <td></td>
                        <td> <a href="{{ route('post.delete', ['id' => $post->id]) }}"> <button class="btn btn-danger">Delete</button> </a> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection