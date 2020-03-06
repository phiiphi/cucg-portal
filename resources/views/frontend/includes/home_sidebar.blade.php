    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('pages.home')}}">
          <div class="sidebar-brand-icon mt-3">
            <img src="{{ asset('images/slogo1.png')}}" alt="cucg logo">
          </div>
        </a>

        <!-- profile -->
        <li class="nav-item active">
          <a class="nav-link text-center" href="{{route('pages.home')}}">
            <span>CUCG STUDENT PORTAL</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading text-white text-warning text-center">
          Student Activity Menu
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link text-center"  href="#">
            <span class="text-uppercase text-white">Register Courses</span>
          </a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

        <li class="nav-item">
          <a class="nav-link text-center"  href="#">
            <span class="text-uppercase text-white">Check Results</span>
          </a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

        <li class="nav-item">
          <a class="nav-link text-center" href="#">
            <span class="text-uppercase text-white">Academic Timetable</span>
          </a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

        <li class="nav-item">
          <a class="nav-link text-center" href="{{route('calendar.index')}}">
            <span class="text-uppercase text-white">Academic calander</span>
          </a>
        </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

        <li class="nav-item">
          <a class="nav-link text-center" href="#">
            <span class="text-uppercase text-white">Announcement</span>
          </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"><i class="fa fa-arrow-left text-white"></i></button>
        </div>

      </ul>
      <!-- End of Sidebar -->
