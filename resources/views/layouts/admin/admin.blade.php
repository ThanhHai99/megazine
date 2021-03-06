<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.admin.head')
  <meta name="csrf-token" content="{{ csrf_token() }}"> <!--pass ajax -->
  <meta name="type-save" content=""> <!--save type news -->
  <meta name="row-index" content=""> <!--set row index news -->
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
      @include('layouts.admin.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
          @include('layouts.admin.topbar')
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
          <div id="content-ajax"></div>
          @yield('content')
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('layouts.admin.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.admin.script')
  @yield('script-home')

  @include("layouts.admin.htmlAppend")

  @include("layouts.admin.loadSlide")
  @include("layouts.admin.handleSlide")

  @include("layouts.admin.loadUser")
  @include("layouts.admin.handleUser")

  @include("layouts.admin.loadNews")
  @include("layouts.admin.handleNews")

  @include("layouts.admin.loadVideo")
  @include("layouts.admin.handleVideo")

  @stack('script-table')
</body>
</html>
