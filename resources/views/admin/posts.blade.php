@extends('layout.adminmain')

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
                        <th>Content</th>
                        <th>Created</th>
                        <th>Written by</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Created</th>
                        <th>Written by</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>My Trip to Australia</td>
                        <td>In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document without relying on meaningful content. Replacing the actual content with placeholder text allows designers to desig</td>
                        <td>2009/09/15</td>
                        <td>admin</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> &nbsp;
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmPostDeleteModal"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

<!-- Logout Modal-->
<div class="modal fade" id="confirmPostDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Post Delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you really want to delete this post.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>
