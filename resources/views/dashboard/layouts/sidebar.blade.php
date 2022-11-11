<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <i class="bi bi-house"></i></span>
            Dashboard
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/donors*') ? 'active' : '' }}" href="/dashboard/donors">
            <i class="bi bi-card-list"></i>
            Data Pendonor
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pilihdonor*') ? 'active' : '' }}" href="/dashboard/pilihdonor">
            <i class="bi bi-card-list"></i>
            Ambil Darah
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/darahkeluar*') ? 'active' : '' }}" href="/dashboard/darahkeluar">
            <i class="bi bi-card-list"></i>
            Data Darah Keluar
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/changepassword*') ? 'active' : '' }}" href="/dashboard/changepassword">
            <i class="bi bi-card-list"></i>
            Ubah Password
          </a>
        </li>
      </ul>

      @can('admin')
        
      
      <h6 class="sidebar-heading d-flex justify-content-between align-item-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h6>
      
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <i class="bi bi-card-list"></i>
            Berita
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
            <i class="bi bi-grid"></i>
            Tambah Pengguna
          </a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/bulanan*') ? 'active' : '' }}" href="/dashboard/bulanan">
            <i class="bi bi-grid"></i>
            Laporan Bulanan
          </a>
        </li>
      </ul>
    </ul>
    @endcan
    </div>
  </nav>