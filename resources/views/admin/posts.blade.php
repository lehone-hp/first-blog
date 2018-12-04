@extends('layouts.adminmain')

@section('title', 'Admin - Posts')

@section('content')


    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('admin/dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Posts</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-file-alt"></i>
            Blog Posts

            <div style="float: right">
                <a href="{{ url('/admin/post/new') }}" class="btn btn-primary"><span class="fa fa-plus-circle"></span>&nbsp;Compose Post</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Written by</th>
                        <th>Last Update</th>
                        <th>Created</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Written by</th>
                        <th>Last Update</th>
                        <th>Created</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->subtitle }}</td>
                            <td>{{ $post->user->username }}</td>
                            <td>{{ $post->last_edit_by }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ url('/admin/post/edit/'.$post->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> &nbsp;
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal"
                                       data-target="#confirmPostDeleteModal{{$post->id}}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal-->
    @foreach ($posts as $post)
        <div class="modal fade" id="confirmPostDeleteModal{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirm Post Delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Delete <strong>{{$post->title}}</strong> ?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" href="{{ url('/admin/post/delete/'.$post->id) }}">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

