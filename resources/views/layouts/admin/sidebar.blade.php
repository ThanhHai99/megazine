<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <!-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
    <div class="sidebar-brand-text mx-3">Megazine</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Divider -->
  <hr class="sidebar-divider">
  <?php if (session('id_role') == '2') { ?>

  <?php } else if ( session('id_role') == '0' || session('id_role') == '1' ) { ?>
            <li class="nav-item">
              <!-- <a click="index" class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseEmployees" aria-expanded="true" aria-controls="collapseEmployees"> -->
              <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Employees Manager</span>
              </a>
              <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar" data="employee">
                <div class="bg-white py-2 collapse-inner rounded">
                  @if ( session('id_role') == '0')
                    <a id="employee-all" class="collapse-item all" href="javascript:void(0)">All</a>
                    <a id="employee-admin" class="collapse-item" data="admin" href="javascript:void(0)">Admin</a>
                  @endif
                  <a id="employee-staff" class="collapse-item" data="staff manager" href="javascript:void(0)">Staff Manager</a>
                  <a id="employee-creator" class="collapse-item" data="creator" href="javascript:void(0)">Creator</a>
                  <a id="employee-guest" class="collapse-item" data="guest" href="javascript:void(0)">Guest</a>
                </div>
              </div>
            </li>
  <?php }?>
  
  <li class="nav-item">
    <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseNews" aria-expanded="true" aria-controls="collapseNews">
      <i class="fas fa-fw fa-folder"></i>
      <span>News Manager</span>
    </a>
    <div id="collapseNews" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar" data="news">
      <div class="bg-white py-2 collapse-inner rounded">
        <a href="javascript:void(0)" class="collapse-item all" id="news-all" style="text-transform: capitalize">All</a>
        @foreach ($topics as $topic)
          <!-- <a href="dashboard/table" class="collapse-item" style="text-transform: capitalize">{{ $topic->name }}</a> -->
          <a href="javascript:void(0)" class="collapse-item" id="news-{{ $topic->name }}" style="text-transform: capitalize">{{ $topic->name }}</a>
        @endforeach
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="javascript:void(0)" id="video">
      <i class="fas fa-fw fa-folder"></i>
      <span>Video</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="javascript:void(0)" id="slide">
      <i class="fas fa-fw fa-folder"></i>
      <span>Slide</span></a>
  </li>
  
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>