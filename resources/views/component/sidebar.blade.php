
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
    <img src="{{asset('assets/login/logosmkpgripku.png')}}" alt="SMK PGRI Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">E-School</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="{{ asset('template') }}/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image"> --}}
                @if (auth()->user()->level=='admin')
                    <img src="{{ asset('template') }}/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                @elseif(auth()->user()->level=='guru')
                    <img src="{{ asset('template') }}/dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
                @elseif(auth()->user()->level=='siswa')
                    <img src="{{ asset('template') }}/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">

                @endif
        </div>
        <div class="info">
        <a href="#" class="d-block">{{Auth::user()->role->name}}</a>
        </div>
        </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
            @if(auth()->user()->level == 'admin')
                @include('layout.menu.admin.admin')
            @elseif(auth()->user()->level == 'guru')
                @include('layout.menu.guru.guru')
            @elseif(auth()->user()->level == 'siswa')
                @include('layout.menu.siswa.siswa')
            @endif

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
