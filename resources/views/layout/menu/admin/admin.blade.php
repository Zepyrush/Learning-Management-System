
        <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('template') }}/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
    <a href="#" class="d-block">Admin</a>
    </div>
    </div>

    
    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
            </button>
        </div>
        </div>
    </div>


<li class="nav-item">
    <a href="{{ url('/admin') }}" class="nav-link">
        <i class="nav-icon fas fa-house"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Contoh
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ url('/admin/contoh1') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contoh v1</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/admin/contoh2') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contoh v2</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/admin/contoh3') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contoh v3</p>
            </a>
        </li>
    </ul>
</li>