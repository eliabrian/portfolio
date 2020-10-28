@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-12">
            <ul>
                <li><a href="/blog" class="text-decoration-none">📖 Blog</a></li>
                <li><a href="/about" class="text-decoration-none">👨‍💻 About</a></li>
            </ul>
        </div>
        <div class="col-md-9 col-12">
            <div class="post">
                <div class="row">
                    <div class="col-md-12">
                        @foreach ($posts as $post)
                        <article class="mb-5">
                            <time datetime="2020-10-11" class="text-muted"><small>{{$post->created_at->format('j F Y')}}</small></time>
                            <h2><a href="{{$post->slug}}" class="text-decoration-none">{{$post->title}}</a></h2>
                            <p class="post-summary">{{$post->summary}}</p>
                        </article>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
<style>
    ul, ol{
        padding: 0;
        list-style: none;
    }

    ul li{
        margin-bottom: .5rem!important;
    }

    a{
        color: #42b883;
    }

    a:hover{
        color: #35495e
    }

    .post-summary, h2{
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;  
    }
    
</style>
@endsection