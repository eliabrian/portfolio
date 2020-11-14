@extends('layouts.client')

@section('content')
@if ($post->draft)
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="head pb-5">
                <h1 class="text-center display-2"><strong>404 Not Found</strong></h1>
                <p class="text-center"><a href="{{url()->previous()}}">&larr; Go to back</a></p>
            </div>
        </div>
    </div>
</div>
@else
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
@endif
@endsection

@section('style')
    <style>
        img{
            max-width: 100%;
            height: auto;
        }
        
        a{
        color: #42b883;
        }

        a:hover{
            color: #35495e
        }
    </style>
@endsection