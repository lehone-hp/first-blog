@extends('layout.adminmain')

@section('title', 'Admin - New User')

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
            <form action="{{ url('/admin/user/new') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-label-group">
                                <input type="text" id="firstName" class="form-control {{ $errors->has('first_name') ? 'invalid-field' : '' }}"
                                       name="first_name"
                                       value="{{ old('first_name') }}"
                                       placeholder="First name" autofocus="autofocus">
                                <label for="firstName">First name</label>
                                @if ($errors->has('first_name'))
                                    <span class="text-danger">
                                        {{ $errors->first('first_name') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-label-group">
                                <input type="text" id="middleName" class="form-control {{ $errors->has('middle_name') ? 'invalid-field' : '' }}"
                                       name="middle_name"
                                       value="{{ old('middle_name') }}"
                                       placeholder="Middle name">
                                <label for="middleName">Middle Name</label>
                                @if ($errors->has('middle_name'))
                                    <span class="text-danger">
                                        {{ $errors->first('middle_name') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-label-group">
                                <input type="text" id="lastName" class="form-control {{ $errors->has('last_name') ? 'invalid-field' : '' }}"
                                       name="last_name"
                                       value="{{ old('last_name') }}"
                                       placeholder="Last name" required="required">
                                <label for="lastName">Last name</label>
                                @if ($errors->has('last_name'))
                                    <span class="text-danger">
                                        {{ $errors->first('last_name') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="name" id="username" class="form-control {{ $errors->has('username') ? 'invalid-field' : '' }}"
                               name="username"
                               value="{{ old('username') }}"
                               placeholder="Username" required="required">
                        <label for="username">Username</label>
                        @if ($errors->has('username'))
                            <span class="text-danger">
                                {{ $errors->first('username') }}
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control {{ $errors->has('email') ? 'invalid-field' : '' }}"
                               name="email"
                               value="{{ old('email') }}"
                               placeholder="Email address" required="required">
                        <label for="inputEmail">Email address</label>
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control {{ $errors->has('password') ? 'invalid-field' : '' }}"
                                       name="password"
                                       placeholder="Password" required="required">
                                <label for="inputPassword">Password</label>
                                @if ($errors->has('password'))
                                    <span class="text-danger">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="confirmPassword" class="form-control"  name="password_confirmation"
                                       placeholder="Confirm password" required="required">
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

