<div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
            <img src="../../dist/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
        </a>
        <div class="cursor-pointer close-btn d-lg-none d-block sidebartoggler" id="sidebarCollapse">
            <i class="ti ti-x fs-8 text-muted"></i>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar>
        <ul id="sidebarnav">
            <!-- ============================= -->
            <!-- Home -->
            <!-- ============================= -->
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
            </li>
            <!-- =================== -->
            <!-- Dashboard -->
            <!-- =================== -->
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                    <span>
                        <i class="ti ti-aperture"></i>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>
            <!-- ============================= -->
            <!-- Apps -->
            <!-- ============================= -->
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Apps</span>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="./app-notes.html" aria-expanded="false">
                    <span><i class="ti ti-notes"></i></span>
                    <span class="hide-menu">Entry STELA</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                    <li class="sidebar-item">
                        <a href="{{ route('all.stela') }}" class="sidebar-link">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Manual</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="./blog-detail.html" class="sidebar-link">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Speadsheet</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#" aria-expanded="false">
                    <span class="d-flex">
                        <i class="ti ti-printer"></i>
                    </span>
                    <span class="hide-menu">Print STELA</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="./app-calendar.html" aria-expanded="false">
                    <span><i class="ti ti-calendar"></i></span>
                    <span class="hide-menu">Calendar</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('all.user') }}" aria-expanded="false">
                    <span><i class="ti ti-list-details"></i></span>
                    <span class="hide-menu">User List</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
