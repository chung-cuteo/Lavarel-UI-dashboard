<nav
  class="navbar navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 bg-gray-800 border-bottom border-bottom-lg-0 border-end-lg"
  id="navbarVertical" style="max-width: 240px">
  <div class="container-fluid">
    <div class="sidebar">
      <!-- Navigation -->
      <div class="avatar-parent-child">
        <div class="d-flex justify-content-center align-items-center" style="height: 66px">
          <h2 class="text-white">ADMIN</h2>
        </div>
      </div>
      <hr class="navbar-divider opacity-20 m-0">

      <ul class="navbar-nav pt-3">
        <li>
          <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide">
            <span class="text-white">Dashboard</span>
          </div>
        </li>
        <li class="nav-item {{ request()->is('dashboard/top') ? 'active' : '' }}">
          <a class="nav-link text-white " href="{{ route('dashboard.top') }}">
            <i class="bi bi-house-fill"></i> Top
          </a>
        </li>
      </ul>

      <hr class="navbar-divider opacity-20">

      <ul class="navbar-nav mb-md-4">
        <li>
          <div class="nav-link text-xs text-white font-semibold text-uppercase text-muted ls-wide">
            <span class="text-white">案件管理</span>
          </div>
        </li>
        <li class="nav-item {{ request()->is('projects/request-quotation') ? 'active' : '' }}">
          <a class="nav-link text-white " href="{{ route('projects.request-quotation') }}">
            <i class="bi bi-bar-chart-fill"></i> 見積依頼
          </a>
        </li>
        <li class="nav-item {{ request()->is('projects/occupation') ? 'active' : '' }}">
          <a class="nav-link text-white " href="{{ route('projects.occupation') }}">
            <i class="bi bi-binoculars-fill"></i> 士業
          </a>
        </li>
        <li class="nav-item {{ request()->is('projects/word-mouth') ? 'active' : '' }}">
          <a class="nav-link text-white " href="{{ route('projects.word-mouth') }}">
            <i class="bi bi-bookmarks-fill"></i> 口コミ
          </a>
        </li>
      </ul>

      <hr class="navbar-divider opacity-20">

      <ul class="navbar-nav pt-3">
        <li>
          <div class="nav-link text-white text-xs font-semibold text-uppercase text-muted ls-wide">
            <span class="text-white">User</span>
          </div>
        </li>
        <li class="nav-item {{ request()->is('user') ? 'active' : '' }}">
          <a class="text-white nav-link" href="{{ route('user') }}">
            <i class="bi bi-people-fill"></i>User List
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
