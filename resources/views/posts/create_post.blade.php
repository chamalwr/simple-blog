@extends('layouts.app')

@section('content')

   {{--Display Errors--}}

    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $err)
                <li class="list-group-item text-danger">
                    {{ $err }}
                </li>
            @endforeach
        </ul>
     @endif


    <div class="panel panel-default">

        <div class="text-center panel-heading">
            Create a New Post!
        </div>


        <div class="panel-body">

            <form action="{{ route('post.save') }}" method="post">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name = "postTitle" placeholder="Enter your Title Here">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="postDescription" cols="6" rows="6" placeholder="Share your thoughts!"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Save Post</button>
                    </div>
                </div>

            </form>

        </div>


    </div>
    @stop
