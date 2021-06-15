<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ config('app.name') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    <li class="{{ request()->is('/home') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/home') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>
    <li class="{{ request()->is('barang') ? 'active' : '' }}"><a href="{{ url('barang') }}"><i class="fas fa-archive"></i> <span>Barang Aset</span></a></li>
    <li class="{{ request()->is('laporan') ? 'active' : '' }}"><a href="{{ url('laporan') }}"><i class="fas fa-book"></i> <span>Laporan Aset</span></a></li>
    <li class="{{ request()->is('penyusutan') ? 'active' : '' }}"><a href="{{ url('penyusutan') }}"><i class="fas fa-book-open"></i> <span>Laporan Penyusutan</span></a></li>
    <!-- <li class="menu-header">Users</li>
    <li><a class="nav-link" href=""><i class="fas fa-users"></i> <span>Users</span></a></li> -->
  </ul>
</aside>
