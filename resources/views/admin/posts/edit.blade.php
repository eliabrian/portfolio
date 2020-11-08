@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">
                        Edit Post
                        <form action="/admin/posts/{{$post->id}}" method="post" class='d-inline float-right'>
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary">Delete Post</button>
                        </form>
                    </h2>
                    
                    <form action="/admin/posts/{{$post->id}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">{{ __('Title') }}</label>
                                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid  @enderror" placeholder="Post title here..." value="{{ $post->title }}">
                                    @error('title')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="category_id">{{ __('Category') }}</label>
                                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid  @enderror">
                                        <option>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $post->category->id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="summary">{{ __('Summary') }}</label>
                                    <textarea name="summary" id="summary" class="form-control @error('summary') is-invalid  @enderror" placeholder="Post summary here..." rows="4">{{ $post->summary }}</textarea>
                                    @error('summary')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contentTextArea">{{__('Content')}}</label>
                                    <textarea id="contentTextArea" name="content" class="@error('content') is-invalid  @enderror">{{$post->content}}</textarea>
                                    @error('content')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save Post</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.tiny.cloud/1/qbwubix454ulae0z63f2gb1q4vbc3yzwxix1x33wscgzmhhq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#contentTextArea',
        plugins: 'codesample | hr | image | lists',
        toolbar: 'codesample | hr | image | numlist bullist',
        height : "480",
      });
    </script>
@endsection