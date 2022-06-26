{{-- <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-boxes-stacked"></i>
        </div>
        <div class="sidebar-brand-text mx-3">VENPILE</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $page = "Home" ? "active" : "" }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        {{ Auth::user()->name }}
    </div>

    @if (Auth::user()->role_id === 1)
        <li class="nav-item {{ $page = "Data Users" ? "active" : "" }}">
            <a class="nav-link" href="{{ route('data_users.index') }}">
                <i class="fa-solid fa-users"></i>
                <span>Data Users</span>
            </a>
        </li>
    @endif

    <li class="nav-item {{ $page = "Data Items" ? "active" : "" }}">
        <a class="nav-link" href="{{ route('data_items.index') }}">
            <i class="fa-solid fa-warehouse"></i>
            <span>Data Items</span></a>
    </li>

    @if (Auth::user()->role_id == 2)
        <li class="nav-item {{ $page = "Manage Items" ? "active" : "" }}">
            <a class="nav-link" href="{{ route('data_items.manageitems') }}">
                <i class="fa-solid fa-wrench"></i>
                <span>Manage Items</span></a>
        </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul> --}}