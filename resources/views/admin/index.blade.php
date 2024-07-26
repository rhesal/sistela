@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>

                                <h4 class="mt-0 mb-4 header-title">Total Revenue</h4>

                                <div class="widget-chart-1">
                                    <div class="widget-chart-box-1 float-start" dir="ltr">
                                        <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#f05050 "
                                            data-bgColor="#F9B9B9" value="58" data-skin="tron" data-angleOffset="180"
                                            data-readOnly=true data-thickness=".15" />
                                    </div>

                                    <div class="widget-detail-1 text-end">
                                        <h2 class="pt-2 mb-1 fw-normal"> 256 </h2>
                                        <p class="mb-1 text-muted">Revenue today</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>

                                <h4 class="mt-0 mb-3 header-title">Sales Analytics</h4>

                                <div class="widget-box-2">
                                    <div class="widget-detail-2 text-end">
                                        <span class="mt-3 badge bg-success rounded-pill float-start">32% <i
                                                class="mdi mdi-trending-up"></i> </span>
                                        <h2 class="mb-1 fw-normal"> 8451 </h2>
                                        <p class="mb-3 text-muted">Revenue today</p>
                                    </div>
                                    <div class="progress progress-bar-alt-success progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                            <span class="visually-hidden">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>

                                <h4 class="mt-0 mb-4 header-title">Statistics</h4>

                                <div class="widget-chart-1">
                                    <div class="widget-chart-box-1 float-start" dir="ltr">
                                        <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a"
                                            data-bgColor="#FFE6BA" value="80" data-skin="tron" data-angleOffset="180"
                                            data-readOnly=true data-thickness=".15" />
                                    </div>
                                    <div class="widget-detail-1 text-end">
                                        <h2 class="pt-2 mb-1 fw-normal"> 4569 </h2>
                                        <p class="mb-1 text-muted">Revenue today</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>

                                <h4 class="mt-0 mb-3 header-title">Daily Sales</h4>

                                <div class="widget-box-2">
                                    <div class="widget-detail-2 text-end">
                                        <span class="mt-3 badge bg-pink rounded-pill float-start">32% <i
                                                class="mdi mdi-trending-up"></i> </span>
                                        <h2 class="mb-1 fw-normal"> 158 </h2>
                                        <p class="mb-3 text-muted">Revenue today</p>
                                    </div>
                                    <div class="progress progress-bar-alt-pink progress-sm">
                                        <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="77"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                            <span class="visually-hidden">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>

                                <h4 class="mt-0 header-title">Daily Sales</h4>

                                <div class="text-center widget-chart">
                                    <div id="morris-donut-example" dir="ltr" style="height: 245px;"
                                        class="morris-chart"></div>
                                    <ul class="mb-0 list-inline chart-detail-list">
                                        <li class="list-inline-item">
                                            <h5 style="color: #ff8acc;"><i class="fa fa-circle me-1"></i>Series A
                                            </h5>
                                        </li>
                                        <li class="list-inline-item">
                                            <h5 style="color: #5b69bc;"><i class="fa fa-circle me-1"></i>Series B
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                                <h4 class="mt-0 header-title">Statistics</h4>
                                <div id="morris-bar-example" dir="ltr" style="height: 280px;" class="morris-chart">
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                                <h4 class="mt-0 header-title">Total Revenue</h4>
                                <div id="morris-line-example" dir="ltr" style="height: 280px;"
                                    class="morris-chart"></div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar-lg me-3">
                                        <img src="assets/images/users/user-3.jpg" class="img-fluid rounded-circle"
                                            alt="user">
                                    </div>
                                    <div class="overflow-hidden flex-grow-1">
                                        <h5 class="mt-0 mb-1">Chadengle</h5>
                                        <p class="mb-2 text-muted font-13 text-truncate">coderthemes@gmail.com</p>
                                        <small class="text-warning"><b>Admin</b></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar-lg me-3">
                                        <img src="assets/images/users/user-2.jpg" class="img-fluid rounded-circle"
                                            alt="user">
                                    </div>
                                    <div class="overflow-hidden flex-grow-1">
                                        <h5 class="mt-0 mb-1"> Michael Zenaty</h5>
                                        <p class="mb-2 text-muted font-13 text-truncate">coderthemes@gmail.com</p>
                                        <small class="text-pink"><b>Support Lead</b></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar-lg me-3">
                                        <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle"
                                            alt="user">
                                    </div>
                                    <div class="overflow-hidden flex-grow-1">
                                        <h5 class="mt-0 mb-1">Stillnotdavid</h5>
                                        <p class="mb-2 text-muted font-13 text-truncate">coderthemes@gmail.com</p>
                                        <small class="text-success"><b>Designer</b></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body widget-user">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar-lg me-3">
                                        <img src="assets/images/users/user-10.jpg" class="img-fluid rounded-circle"
                                            alt="user">
                                    </div>
                                    <div class="overflow-hidden flex-grow-1">
                                        <h5 class="mt-0 mb-1">Tomaslau</h5>
                                        <p class="mb-2 text-muted font-13 text-truncate">coderthemes@gmail.com</p>
                                        <small class="text-info"><b>Developer</b></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->

                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>

                                <h4 class="mb-3 header-title">Inbox</h4>

                                <div class="inbox-widget">

                                    <div class="inbox-item">
                                        <a href="#">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-1.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <h5 class="mt-0 mb-1 inbox-item-author">Chadengle</h5>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">13:40 PM</p>
                                        </a>
                                    </div>

                                    <div class="inbox-item">
                                        <a href="#">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <h5 class="mt-0 mb-1 inbox-item-author">Tomaslau</h5>
                                            <p class="inbox-item-text">I've finished it! See you so...</p>
                                            <p class="inbox-item-date">13:34 PM</p>
                                        </a>
                                    </div>

                                    <div class="inbox-item">
                                        <a href="#">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <h5 class="mt-0 mb-1 inbox-item-author">Stillnotdavid</h5>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">13:17 PM</p>
                                        </a>
                                    </div>

                                    <div class="inbox-item">
                                        <a href="#">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <h5 class="mt-0 mb-1 inbox-item-author">Kurafire</h5>
                                            <p class="inbox-item-text">Nice to meet you</p>
                                            <p class="inbox-item-date">12:20 PM</p>
                                        </a>
                                    </div>

                                    <div class="inbox-item">
                                        <a href="#">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg"
                                                    class="rounded-circle" alt=""></div>
                                            <h5 class="mt-0 mb-1 inbox-item-author">Shahedk</h5>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">10:15 AM</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>

                                <h4 class="mt-0 mb-3 header-title">Latest Projects</h4>

                                <div class="table-responsive">
                                    <table class="table mb-0 table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th>Assign</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Adminto Admin v1</td>
                                                <td>01/01/2017</td>
                                                <td>26/04/2017</td>
                                                <td><span class="badge bg-danger">Released</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Adminto Frontend v1</td>
                                                <td>01/01/2017</td>
                                                <td>26/04/2017</td>
                                                <td><span class="badge bg-success">Released</span></td>
                                                <td>Adminto admin</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Adminto Admin v1.1</td>
                                                <td>01/05/2017</td>
                                                <td>10/05/2017</td>
                                                <td><span class="badge bg-pink">Pending</span></td>
                                                <td>Coderthemes</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Adminto Frontend v1.1</td>
                                                <td>01/01/2017</td>
                                                <td>31/05/2017</td>
                                                <td><span class="badge bg-purple">Work in Progress</span>
                                                </td>
                                                <td>Adminto admin</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Adminto Admin v1.3</td>
                                                <td>01/01/2017</td>
                                                <td>31/05/2017</td>
                                                <td><span class="badge bg-warning">Coming soon</span></td>
                                                <td>Coderthemes</td>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>Adminto Admin v1.3</td>
                                                <td>01/01/2017</td>
                                                <td>31/05/2017</td>
                                                <td><span class="badge bg-primary">Coming soon</span></td>
                                                <td>Adminto admin</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->

        </div> <!-- content -->
    </div>
@endsection
