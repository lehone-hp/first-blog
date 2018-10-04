@extends('layout.adminmain')

@section('title', 'Admin - New Post')

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('success') }}
        </div>
    @endif

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('admin/dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ url('admin/post') }}">Posts</a>
        </li>
        <li class="breadcrumb-item active">New</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-edit"></i>
            New Post
        </div>

        <div class="container-fluid">
            <br>
            <form action="{{ url('/admin/post/new') }}" method="post">
                @csrf

                <div class="form-group">
                    <input type="text" class="form-control" id="post-title"
                           name="title"
                           value="{{ old('title') }}"
                           placeholder="Title">
                    @if ($errors->has('title'))
                        <span class="text-danger">
                            {{ $errors->first('title') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="post-content"
                              name="content">
                        {{ old('content') }}
                    </textarea>

                    @if ($errors->has('content'))
                        <span class="text-danger">
                            {{ $errors->first('content') }}
                        </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            <br>

        </div>

    </div>

@endsection

