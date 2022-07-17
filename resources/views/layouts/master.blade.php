<!doctype html>
<html lang="en">
@include('layouts.partials.htmlhead')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="@yield('body-style')">
<div class="wrapper">
    @include('partials.header')
    @include('partials.aside')
        @include('partials.content_header')
        <!-- Main content -->
        <section class="content" style="@yield('content-style')">
            <div class="container-fluid">
                @yield('content')
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
     @include('partials.footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('layouts.partials.scripts')
</body>
</html>
