@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="title">
            <h3>{{ $post->title ?? '' }}</h3>
        </div>
        <div class="body">
            <p>{!! $post->body !!}</p>    
        </div>
        <span>Author: {{ $post->user->name }}</span>
    </div>

@endsection