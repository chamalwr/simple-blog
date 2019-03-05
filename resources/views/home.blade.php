@extends('layouts.app')

@section('content')

            <div class="panel panel-default">
                <div class="panel-heading">Welcome to My Blog!</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hey ! {{ Auth::user()->name }},  Welcome to My Blog!
                    In Here you can
                    <ul>
                        <li>Share your posts</li>
                        <li>Delete Them</li>
                        <li>Read other's posts</li>
                    </ul>

                </div>
            </div>

@endsection
