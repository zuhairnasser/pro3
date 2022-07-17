    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 pt-5">
        <!-- Brand Logo -->
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image" style="text-align: center;">
                    <i class="fa fa-user fa-2x" style="color: white"></i>
                </div>
                <div class="info">
                    <a href="" class="d-block">مرحبا بك
                    </a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                                          with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link {{ \Request::is('/') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>الرئيسية</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('accounts') }}"
                            class="nav-link {{ \Request::is('accounts') || \Request::is('accounts/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>إدارة المستخدمين</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/products"
                            class="nav-link {{ \Request::is('products') || \Request::is('products/*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>التقارير</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/oprations-report  "
                            class="nav-link {{ \Request::is('oprations-report') || \Request::is('oprations-report/*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>العمليات</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/store') }}" class="nav-link {{ \Request::is('/') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>المخزون</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/get-export') }}" class="nav-link {{ \Request::is('/') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>التصدير</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/get-import') }}"
                            class="nav-link {{ \Request::is('/') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>الاستيراد</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/repository') }}"
                            class="nav-link {{ \Request::is('/') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>المخازن</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/product') }}" class="nav-link {{ \Request::is('/') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>المنتجات</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/category') }}"
                            class="nav-link {{ \Request::is('/category/create') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>الأصناف</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/manufacture') }}"
                            class="nav-link {{ \Request::is('/') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>الشركات المصنعة</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/client') }}" class="nav-link {{ \Request::is('/') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>الزبائن</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/section') }}" class="nav-link {{ \Request::is('/') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>الأقسام</p>
                        </a>
                    </li>
                    @stack('aside-item')
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
