  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="ti-layout-grid2 menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'users')) ? 'active' : '' }}">
        <a class="nav-link" href="/users">
          <i class="ti-user menu-icon"></i>
          <span class="menu-title">Users</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'drivers')) ? 'active' : '' }}">
        <a class="nav-link" href="/drivers">
          <i class="ti-user menu-icon"></i>
          <span class="menu-title">Driver</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'baranggays')) ? 'active' : '' }}">
        <a class="nav-link" href="/baranggays">
          <i class="ti-home menu-icon"></i>
          <span class="menu-title">Barangay</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'trucks')) ? 'active' : '' }}">
        <a class="nav-link" href="/trucks">
          <i class="ti-truck menu-icon"></i>
          <span class="menu-title">Dump Truck</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'schedules')) ? 'active' : '' }}">
        <a class="nav-link" href="/schedules">
          <i class="ti-agenda menu-icon"></i>
          <span class="menu-title">Collection Schedule</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'complaints')) ? 'active' : '' }}">
        <a class="nav-link" href="/complaints">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Complaints</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'announcements')) ? 'active' : '' }}">
        <a class="nav-link" href="/announcements">
          <i class="ti-announcement menu-icon"></i>
          <span class="menu-title">Announcements</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'sms')) ? 'active' : '' }}">
        <a class="nav-link" href="/sms">
          <i class="ti-comment-alt menu-icon"></i>
          <span class="menu-title">SMS</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'routes')) ? 'active' : '' }}">
        <a class="nav-link" href="/routes">
          <i class="ti-map-alt menu-icon"></i>
          <span class="menu-title">Routes</span>
        </a>
      </li>
    </ul>
  </nav>