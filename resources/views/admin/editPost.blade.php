@extends('layouts.adminmain')

@section('title', 'Admin - New Post')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('admin/dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ url('admin/post') }}">Posts</a>
        </li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-edit"></i>
            Edit Post
        </div>

        <div class="container-fluid">
            <br>
            <form action="{{ url('/admin/post/edit/'.$post->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="post-title"
                           name="title"
                           value="{{ old('title', $post->title) }}"
                           placeholder="Title">
                    @if ($errors->has('title'))
                        <span class="text-danger">
                            {{ $errors->first('title') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="post-subtitle"
                           name="subtitle"
                           value="{{ old('subtitle', $post->subtitle) }}"
                           placeholder="Sub title">
                    @if ($errors->has('subtitle'))
                        <span class="text-danger">
                            {{ $errors->first('subtitle') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="post-content"
                              name="content">
                        {{ old('content', $post->content) }}
                    </textarea>

                    @if ($errors->has('content'))
                        <span class="text-danger">
                            {{ $errors->first('content') }}
                        </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <a class="btn btn-secondary btn-cancel" href="{{ url('admin/post') }}">Cancel</a>
            </form>
            <br>

        </div>

    </div>

@endsection

