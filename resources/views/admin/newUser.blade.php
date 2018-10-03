@extends('layout.adminmain')

@section('title', 'Admin - New User')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('admin/dashboard') }}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ url('admin/user') }}">Users</a>
        </li>
        <li class="breadcrumb-item active">New</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user-plus"></i>
            New User
        </div>

        <div class="container-fluid col-md-6 user-form">
            <br>
            <form>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-label-group">
                                <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                                <label for="firstName">First name</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-label-group">
                                <input type="text" id="middleName" class="form-control" placeholder="Middle name">
                                <label for="middleName">Middle Name</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-label-group">
                                <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                                <label for="lastName">Last name</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="name" id="username" class="form-control" placeholder="Username" required="required">
                        <label for="username">Username</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                        <label for="inputEmail">Email address</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                                <label for="confirmPassword">Confirm password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Save User</button>
            </form>
            <br>

        </div>

    </div>

@endsection

