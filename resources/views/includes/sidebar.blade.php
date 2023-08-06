<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <center>
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">GIS SEKOLAH</span>
        </a>
    </center>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('be/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Super Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                </li>
                <li class="nav-item">
                    <a href="{{ route('sekolah') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Sekolah</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('sekolah') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Hak izin User</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('sekolah') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Level User</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('sekolah') }}" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>User</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
