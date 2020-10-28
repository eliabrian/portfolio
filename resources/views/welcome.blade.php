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
            <div class="about mb-5">
                <div class="overview">
                    <h1 class="mb-3">👋 <strong>Halo, Elia disini!</strong></h3>
                    <p>
                        Saat ini tinggal di Jakarta, dan bekerja di <a href="https://softwareseni.co.id" target="_blank">SoftwareSeni</a>  - perusahaan <em>Software House</em> yang menyediakan jasa dalam pembuatan perangkat lunak berbasis di Australia dan Yogyakarta - yang dimana saya diposisikan sebagai PHP Developer yang membantu membangun backend-nya produk-produk SoftwareSeni.
                    </p>
                </div>
            </div>

            <div class="post">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="my-3">✏️ Tulisan Terbaru</h2>
                        @foreach ($posts as $post)
                        <article>
                            <time datetime="{{$post->created_at}}" class="text-muted"><small>{{$post->created_at->format('j F Y')}}</small></time>
                            <h4><a href="/{{$post->slug}}" class="text-decoration-none">{{$post->title}}</a></h4>
                        </article>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        <h2 class="my-3">🙌 Favorit</h2>
                        @foreach ($favorites as $favorite)
                            <article>
                                <time datetime="2020-10-11" class="text-muted"><small>11-10-2020</small></time>
                                <h4><a href="/testing" class="text-decoration-none">Testing Blog</a></h4>
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

    h4{
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical; 
    }
</style>
@endsection
