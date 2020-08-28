<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{url('/dashboard/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">StayBay Hotel </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('/dashboard/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <!--     ////////////////////////////////////////////////////////////
                    -->
                </a>
            </div>
        </div>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{url('api/rooms')}}" class="nav-link">
                    <p>Rooms Report</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('api/guests')}}" class="nav-link">

                    <p>Customers</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('api/booking')}}" class="nav-link">

                    <p>Booking</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('api/check')}}" class="nav-link">

                    <p>Find a room</p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>