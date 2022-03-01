  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
@if(auth()->user()->user_type == 'admin')
<li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        @endif
<!-- Divider -->
<hr class="sidebar-divider">


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Posts</span>
        </a>
        <div id="collapseTwo" class="collapse {{ request()->routeIs('posts.create') || request()->routeIs('posts.index') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('posts.create') ? 'active' : '' }}" href="{{ route('posts.create') }}">Add Post</a>
                <a class="collapse-item {{ request()->routeIs('posts.index') ? 'active' : '' }}" href="{{ route('posts.index') }}">All Posts</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
            aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Categories</span>
        </a>
        <div id="collapseCategory" class="collapse {{ request()->routeIs('categories.create') || request()->routeIs('categories.index') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->routeIs('categories.create') ? 'active' : '' }}" href="{{ route('categories.create') }}">Add Category</a>
                <a class="collapse-item {{ request()->routeIs('categories.index') ? 'active' : '' }}" href="{{ route('categories.index') }}">All Categories</a>
            </div>
        </div>
    </li>

<!-- Nav Item - Utilities Collapse Menu -->




<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>

<!-- Nav Item - Tables -->



<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->

</ul>
<!-- End of Sidebar -->
