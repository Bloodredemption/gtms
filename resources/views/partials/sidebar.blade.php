  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('residents') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.residents') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Resident Records</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/documentation/documentation.html">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Complaints</span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('baranggay') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.brgy') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Baranggay Records</span>
        </a>
      </li>
      <li class="nav-item {{ (str_starts_with(request()->path(), 'users')) ? 'active' : '' }}">
        <a class="nav-link" href="/users">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Users</span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('trucks') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.trucks') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Garbage Truck Records</span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('drivers') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.drivers') }}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Driver Records</span>
        </a>
      </li>
    </ul>
  </nav>