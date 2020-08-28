<!DOCTYPE html>
<html lang="en">


@include('includes.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('includes.navbar')
        <!-- /.navbar -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    @yield('content')

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
        </div>


        <!-- Main Sidebar Container -->
        @include('includes.slidebar')
        <!-- /Main Slider bar Container -->
        <!-- Content Wrapper. Contains page content -->


    </div>
    @include('includes.footer')


    <!-- jQuery -->
    <script src="{{ asset ('/dashboard/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset ('/dashboard/plugins/jquery-ui/jquery-ui.min.js') }}">
    </script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset ('/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <!-- ChartJS -->
    <script src="{{ asset ('/dashboard/plugins/chart.js/Chart.min.js') }}">
    </script>
    <!-- Sparkline -->
    <script src="{{ asset ('/dashboard/plugins/sparklines/sparkline.js') }}">
    </script>
    <!-- JQVMap -->
    <script src="{{ asset ('/dashboard/plugins/jqvmap/jquery.vmap.min.js') }}">
    </script>
    <script src="{{ asset ('/dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js') }}">
    </script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset ('/dashboard/plugins/jquery-knob/jquery.knob.min.js') }}">
    </script>
    <!-- daterangepicker -->
    <script src="{{ asset ('/dashboard/plugins/moment/moment.min.js') }}">
    </script>
    <script src="{{ asset ('/dashboard/plugins/daterangepicker/daterangepicker.js') }}">
    </script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset ('/dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ asset ('/dashboard/plugins/summernote/summernote-bs4.min.js') }}">
    </script>
    <!-- overlayScrollbars -->
    <script src="{{ asset ('/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset ('/dashboard/dist/js/adminlte.js') }}">
    </script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset ('/dashboard/dist/js/pages/dashboard.js') }}">
    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset ('/dashboard/dist/js/demo.js') }}"></script> -->
</body>

</html>