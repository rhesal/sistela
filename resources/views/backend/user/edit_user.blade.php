@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="container-fluid">
        <div class="overflow-hidden shadow-none card bg-light-info position-relative">
            <div class="px-4 py-3 card-body">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="mb-8 fw-semibold">Edit User</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted " href="{{ route('admin.dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a class="text-muted " href="{{ route('all.user') }}">User List</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Edit User</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="{{ asset('dist/images/breadcrumb/ChatBc.png') }}" alt=""
                                class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="px-4 py-3 border-bottom">
                        <h5 class="mb-0 card-title fw-semibold">Edit User Form</h5>
                    </div>
                    <div class="p-4 card-body">
                        <form id="myForm" action="{{ route('update.user') }}" method="POST" class="forms-sample">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="mb-4 row align-items-center">
                                <label for="name" class="form-label fw-semibold col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9 form-group">
                                    <input type="text" class="form-control text-capitalize" name="name" id="name"
                                        value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label for="username"
                                    class="form-label fw-semibold col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9 form-group">
                                    <input type="text" class="form-control" name="username" id="username"
                                        value="{{ $user->username }}">
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label for="exampleInputPassword1"
                                    class="form-label fw-semibold col-sm-3 col-form-label">Company</label>
                                <div class="col-sm-9 form-group">
                                    <input type="text" class="form-control" id="exampleInputtext"
                                        value="RSUD Karsa Husada Batu" disabled>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label for="email" class="form-label fw-semibold col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9 form-group">
                                    <input type="text" class="form-control" name="email" id="email"
                                        value="{{ $user->email }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    username: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Please Enter Name',
                    },
                    username: {
                        required: 'Please Enter Username',
                    },
                    email: {
                        required: 'Please Enter Email',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
