@extends('layouts.adminmain')

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
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->email_verified_at = null)
                                <i class="fa fa-check text-primary"></i>
                            @endif{{ $user->email_verified_at }}
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-user-edit"></i></a> &nbsp;
                                <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmUserDeleteModal{{$user->id}}"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    @foreach ($users as $user)
        <div class="modal fade" id="confirmUserDeleteModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirm User Delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Delete" to confirm deletion of user <strong>{{ $user->username }}</strong>.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" href="#">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
