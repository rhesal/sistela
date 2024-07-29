@extends('admin.admin_dashboard')
@section('admin')

<div class="container-fluid">
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Add User</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="{{ route('admin.dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="text-muted " href="{{ route('all.user') }}">User List</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Add User</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="../../dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="px-4 py-3 border-bottom">
                    <h5 class="card-title fw-semibold mb-0">Add User Form</h5>
                </div>
                <div class="card-body p-4">
                    <div class="mb-4 row align-items-center">
                        <label for="name"
                            class="form-label fw-semibold col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" id="name" placeholder="John Deo">
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label for="username"
                            class="form-label fw-semibold col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="username" id="username" placeholder="John Deo">
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label for="exampleInputPassword1"
                            class="form-label fw-semibold col-sm-3 col-form-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputtext" value="RSUD Karsa Husada Batu">
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label for="email"
                            class="form-label fw-semibold col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <div class="input-group border rounded-1">
                                <input type="text" class="form-control border-0" name="email" id="email" placeholder="John Deo">
                                <span class="input-group-text bg-transparent px-6 border-0"
                                    id="basic-addon1">@gmail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label for="password"
                            class="form-label fw-semibold col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="password" id="password" placeholder="John Deo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <BUtton class="btn btn-primary">Send</BUtton>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
