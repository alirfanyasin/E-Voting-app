<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="index.html">
      <span class="align-middle">E-Voting</span>
    </a>

    <ul class="sidebar-nav">
      {{-- <li class="sidebar-header">
        Pages
      </li> --}}

      <li class="sidebar-item {{ Request::is('app/dashboard') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('app.dashboard') }}">
          <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>

      <li
        class="sidebar-item {{ Request::is('app/candidate') ? 'active' : '' }} {{ Request::is('app/candidate/*') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('app.candidate') }}">
          <i class="align-middle" data-feather="user"></i> <span class="align-middle">Candidate</span>
        </a>
      </li>
      <li class="sidebar-item {{ Request::is('app/token') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('app.token') }}">
          <i class="align-middle" data-feather="book"></i> <span class="align-middle">Token</span>
        </a>
      </li>
      <li class="sidebar-item {{ Request::is('app/pemilih') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('app.pemilih') }}">
          <i class="align-middle" data-feather="users"></i> <span class="align-middle">Voters</span>
        </a>
      </li>
      <li class="sidebar-item {{ Request::is('app/monitoring') ? 'active' : '' }}">
        <a class="sidebar-link" href="{{ route('app.monitoring') }}">
          <i class="align-middle" data-feather="monitor"></i> <span class="align-middle">Monitoring</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
