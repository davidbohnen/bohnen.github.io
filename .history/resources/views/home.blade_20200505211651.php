@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <a href="/post/create" class="btn btn-dark">Post</a>

                </div>
            </div>
        </div>

        
    </div>
    <br>
    <div class="container">
    <div class="row justify-content-center">
    <h2>Posts You've Interacted With:</h2>
        <hr>
    </div>
</div>
</div>
@endsection
