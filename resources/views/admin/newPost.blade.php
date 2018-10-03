@extends('layout.adminmain')

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
        <li class="breadcrumb-item active">New</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            New Post
        </div>

        <div class="container-fluid">
            <br>
            <form action="#">
                <div class="form-group">
                    <input type="text" class="form-control" id="post-title" placeholder="Title">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="post-content"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            <br>

        </div>

    </div>

@endsection

