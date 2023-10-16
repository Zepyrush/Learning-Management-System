<li class="nav-item">
    <a href="{{ url('/admin') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
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