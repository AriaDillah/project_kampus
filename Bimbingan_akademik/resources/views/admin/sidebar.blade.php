<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../landing_page/index.html" class="brand-link">
        <span class="brand-text font-weight-light ml-2">Prodi Guide Kampus</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/OIG4.y_Y74kcm7xOBpYDBG.jpeg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="../../admin" class="d-block">Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../admin/mahasiswa" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../admin/dosen" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../admin/prodi" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>prodi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../admin/rombel" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>rombel</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item mt-3">
                    <a href="../admin/landing_page" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
