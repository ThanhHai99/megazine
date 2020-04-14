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

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="dashboard/index">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">
  
  
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployees" aria-expanded="true" aria-controls="collapseEmployees">
      <i class="fas fa-fw fa-folder"></i>
      <span>Employees Manager</span>
    </a>
    <div id="collapseEmployees" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="dashboard/employee/staff">Staff</a>
        <a class="collapse-item" href="dashboard/employee/normal_user">Normal Users</a>
      </div>
    </div>
  </li> 
  
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNews" aria-expanded="true" aria-controls="collapseNews">
      <i class="fas fa-fw fa-folder"></i>
      <span>News Manager</span>
    </a>
    <div id="collapseNews" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        @foreach ($topics as $topic)
          <!-- <a href="dashboard/table" class="collapse-item" style="text-transform: capitalize">{{ $topic->name }}</a> -->
          <a href="dashboard/topic/{{ $topic->name }}" class="collapse-item" id="topic-{{ $topic->name }}" style="text-transform: capitalize">{{ $topic->name }}</a>
        @endforeach
      </div>
    </div>
  </li>
  
  
  
  
  
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>