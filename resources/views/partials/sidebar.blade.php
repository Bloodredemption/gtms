  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'users')) ? 'active' : '' }}">
        <a class="nav-link" href="/users">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Users</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'driver')) ? 'active' : '' }}">
        <a class="nav-link" href="/drivers">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Driver</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Baranggay</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Dump Truck</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Truck Schedule</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Type of Waste</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Complaints</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Announcement</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">SMS</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Route</span>
        </a>
      </li>
    </ul>
  </nav>