@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">
                        Edit Category
                        <form action="/admin/categories/{{$category->id}}" method="post" class='d-inline float-right'>
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary">Delete Category</button>
                        </form>
                    </h2>
                    
                    <form action="/admin/categories/{{$category->id}}" method="POST">
                        @method('put')
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid  @enderror" placeholder="Category name here..." value="{{ $category->name }}">
                                    @error('name')
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