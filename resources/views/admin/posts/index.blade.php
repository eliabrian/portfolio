@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 card">
            <div class="card-body">
                <h3 class="card-title">{{ __('Posts') }}</h3>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">{{ __('Add Post') }}</a>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>{{ __('Title') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Created At') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->draft ? 'Draft' : 'Published' }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td><a href="/admin/posts/{{ $post->slug }}/edit">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection