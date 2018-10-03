@extends('layout.adminmain')

@section('title', 'Admin - Users')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('admin/dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Users</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user-friends"></i>
            System Users

            <div style="float: right">
                <a href="{{ url('/admin/user/new') }}" class="btn btn-primary"><span class="fa fa-user-plus"></span> New User</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Verified</th>
                        <th>Created</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Verified</th>
                        <th>Created</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lenya Hope Nembi</td>
                        <td>lehone</td>
                        <td>lehone4hope@gmail.com</td>
                        <td>
                            <i class="fa fa-check text-primary"></i> OR
                            <i class="fa fa-times text-danger"></i>
                        </td>
                        <td>03/09/2018</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-user-edit"></i></a> &nbsp;
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmUserDeleteModal"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" id="confirmUserDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm User Delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you really want to delete this user.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>