@extends('admin.admin_dashboard')
@section('admin')
    <div class="container-fluid">
        <div class="overflow-hidden shadow-none card bg-light-info position-relative">
            <div class="px-4 py-3 card-body">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="mb-8 fw-semibold">User List</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted "
                                        href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">User List</li>
                            </ol>
                            <ol class="breadcrumb">
                                <a href="{{ route('add.user') }}" class="mt-2 btn btn-info">Add User</a>
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
        <section class="datatables">
            <!-- basic table -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                    <thead>
                                        <!-- start row -->
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <!-- end row -->
                                    </thead>
                                    <tbody>
                                        <!-- start row -->
                                        @foreach ($alluser as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>
                                                    @if ($item->status == 'active')
                                                        <span class="rounded badge-pill bg-success">Active</span>
                                                    @else
                                                        <span class="rounded badge-pill bg-danger">InActive</span>
                                                    @endif
                                                </td>
                                                <td class="text-center button-group">
                                                    <a href="{{ route('edit.user', $item->id) }}"
                                                        class="justify-content-center btn btn-warning" title="Edit"><i
                                                            class="ti ti-edit"></i></a>
                                                    <a href="{{ route('delete.user', $item->id) }}"
                                                        class="justify-content-center btn btn-danger" title="Delete"
                                                        id="sa-confirm"><i class="ti ti-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <!-- end row -->
                                    </tbody>
                                    <tfoot>
                                        <!-- start row -->
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <!-- end row -->
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
