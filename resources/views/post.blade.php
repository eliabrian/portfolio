@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="head pb-5">
                <p class="text-center"><time datetime="{{$post->created_at}}" class="text-muted"><small>{{$post->created_at->format('j F Y')}}</small></time></p>
                <h1 class="text-center"><strong>{{$post->title}}</strong></h1>
            </div>
        </div>
        <div class="col-md-8">
            <div class="summary">
                <p>{{$post->summary}}</p>
            </div>
            <div class="content">
                {!! $post->content !!}
            </div>
        </div>
    </div>
</div>

@endsection

@section('style')
    <style>
        img{
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection