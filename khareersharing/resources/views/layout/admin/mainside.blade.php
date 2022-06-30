<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
        <img src="{{ asset('images/demologo.jpg') }}" alt="Product Demo" style="opacity .8;width:100px">

    </a>


    <!-- Quản lý người dùng -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i>
                    <p>
                        Quản lý người dùng
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/admin/adminlist') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách tài khoản</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin/userlist') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm tài khoản admin</p>
                        </a>
                    </li>
         
         

                </ul>
            </li>
        </ul>
    </nav>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i>
                    <p>
                        Quản lý dịch vụ
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/admin/theme') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách dịch vụ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/admin/admin-question') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm dịch vụ mới</p>
                        </a>
                    </li>
         
         

                </ul>
            </li>
        </ul>
    </nav>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i>
                    <p>
                        Quản lý đơn hàng
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/accountlist') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Đơn hàng dịch vụ</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/accountlist') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Đơn hàng khóa học</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/accountlist') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Đơn hàng chưa duyệt</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/accountlist') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Khóa học chưa duyệt</p>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i>
                    <p>
                        Quản lý việc làm
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/accountlist') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách tuyển dụng</p>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="fas fa-user"></i>
                    <p>
                        Yêu cầu từ khách hàng
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/accountlist') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách yêu cầu</p>
                        </a>
                    </li>
           

                </ul>
            </li>
        </ul>
    </nav>
    



</aside>
