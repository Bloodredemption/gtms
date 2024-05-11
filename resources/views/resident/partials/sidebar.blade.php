  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="ti-layout-grid2 menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Your Complaints</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="">
          <i class="ti-map menu-icon"></i>
          <span class="menu-title">Map</span>
        </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="ti-help menu-icon"></i>
          <span class="menu-title">Help</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="ti-info menu-icon"></i>
          <span class="menu-title">About System</span>
        </a>
      </li>
    </ul>
  </nav>