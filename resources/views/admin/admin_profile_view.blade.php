@extends('admin.admin_dashboard')
@section('admin')
<div class="container-fluid">
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">My Profile</h4>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('dist/images/breadcrumb/ChatBc.png') }}" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
            tabindex="0">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row mt-n8">
                                <div class="col-sm-4 d-flex mb-2">
                                    <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle"
                                        style="width: 110px; height: 110px;" ;>
                                        <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden"
                                            style="width: 100px; height: 100px;" ;>
                                            <img src="{{ asset('dist/images/profile/user-1.jpg') }}" alt=""
                                                class="w-100 h-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h5 class="fs-5 mt-4 fw-semibold">{{ $profileData->name }}</h5>
                                    <p class="fs-4">Username : {{ $profileData->username }}</p>
                                </div>
                            </div>
                            <p>Hello, I am {{ $profileData->name }}. Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</p>
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-center gap-3 mb-4">
                                    <i class="ti ti-briefcase text-dark fs-6"></i>
                                    <h6 class="fs-4 fw-semibold mb-0">RSUD Karsa Husada Batu</h6>
                                </li>
                                <li class="d-flex align-items-center gap-3 mb-4">
                                    <i class="ti ti-mail text-dark fs-6"></i>
                                    <h6 class="fs-4 fw-semibold mb-0">{{ $profileData->email }}</h6>
                                </li>
                                <li class="d-flex align-items-center gap-3 mb-2">
                                    <i class="ti ti-map-pin text-dark fs-6"></i>
                                    <h6 class="fs-4 fw-semibold mb-0">Batu, Ngaglik</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-semibold mb-3">Update Admin Profiles</h5>
                            <form class="form-sample" method="POST" action="{{ route('admin.profile.store') }}">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="name" class="col-md-2 col-form-label">Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="name"
                                            value="{{ $profileData->name }}" id="name" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="username" class="col-md-2 col-form-label">Username</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="username"
                                            value="{{ $profileData->username }}" id="username" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="email" name="email"
                                            value="{{ $profileData->email }}" id="email" />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success rounded-pill px-4">
                                    <div class="d-flex align-items-center">
                                        <i class="ti ti-device-floppy me-1 fs-4"></i>
                                        Save Changes
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection