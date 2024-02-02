<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cubes"></i>
        </div>
        <div class="sidebar-brand-text mx-3">HRIS</div>
    </a>
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/home">
          <i class="fas fa-fw fa-angle-left"></i>
            <span>Back</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->


  <!-- Divider -->
  <hr class="sidebar-divider">
   <!-- Nav Item - Schedule -->
   <li class="nav-item {{ Request::is('events*','teamschedule*') ? 'active' : '' }}">
      <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePageEv" aria-expanded="true"
      aria-controls="collapsePageEv">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Schedule</span>
    </a>
    <div id="collapsePageEv" class="collapse {{ Request::is('events*','teamschedule*') ? 'show' : '' }}" aria-labelledby="headingPages"
    data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{ route('events.index') }}">My Schedule</a>
        @role('manager|it')
        <a class="collapse-item" href="{{ route('teamschedule.index') }}">Team Schedule</a>
        @endrole

    </div>
</div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('datakaryawan*','gajiAjax*', 'medical*','SewaKendaraan*','cari-gaji*','detailCari*') ? 'active' : '' }}">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePagesHR" aria-expanded="true"
            aria-controls="collapsePagesHR">
            <i class="fas fa-fw fa-coffee"></i>
            <span>HR</span>
        </a>
        <div id="collapsePagesHR" class="collapse {{ Request::is('datakaryawan*','gajiAjax*', 'medical*', 'SewaKendaraan*','cari-gaji*','detailCari*') ? 'show' : '' }}" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('datakaryawanAjax.index') }}">Data Karyawan</a>
                @role('it|manager')
                <a class="collapse-item" href="{{ route('SewaKendaraan.index') }}">Sewa Kendaraan</a>
                <a class="collapse-item" href="{{ route('medical.index') }}">Medical Claim</a>
                <a class="collapse-item" href="{{ route('gajiAjax.index') }}">Gaji Karyawan</a>
                <a class="collapse-item" href="{{ route('gaji.cari') }}">Cari Gaji</a>
                @endrole
            </div>
        </div>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item {{ Request::is('kandidat*','statuskandidat*') ? 'active' : '' }}">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePagesKdt" aria-expanded="true"
            aria-controls="collapsePagesKdt">
            <i class="fas fa-fw fa-coffee"></i>
            <span>Data Kandidat</span>
        </a>
        <div id="collapsePagesKdt" class="collapse {{ Request::is('kandidat*','statuskandidat*') ? 'show' : '' }}" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('kandidat.index') }}">Data Kandidat</a>
                <a class="collapse-item" href="{{ route('statuskandidat.status') }}">Status Kandidat</a>
            </div>
        </div>
    </li>
     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">
    <!-- Nav Item - Pages Collapse Menu -->
    @role('it')
    <li class="nav-item {{ Request::is('adminController*','hrd*') ? 'active' : '' }}">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePagesAdm" aria-expanded="true"
            aria-controls="collapsePagesAdm">
            <i class="fas fa-fw fa-coffee"></i>
            <span>Admin Controller</span>
        </a>
        <div id="collapsePagesAdm" class="collapse {{ Request::is('adminController*','hrd*') ? 'show' : '' }}" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('adminController.index') }}"> {{ __('Admin Controller') }}</a>

                <a class="collapse-item" href="{{ route('hrd.showDeletedData') }}">Deleted Data</a>

            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    @endrole

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
