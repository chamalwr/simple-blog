@extends('layouts.app')

@section('content')

        @foreach($posts as $post)
            <div class="row">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <h5 class="card-title"> Author: <b><i>{{$post->created_by}}</i></b></h5>
                            <p class="card-text">{{$post->description}}</p>
                            <a href="#" class="btn btn-primary">Read More..</a>
                        </div>
                    </div>
                    <br/>
                </div>
            </div>
        @endforeach
@endsection