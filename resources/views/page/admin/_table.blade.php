@extends("layouts.admin.admin")
@section("content")
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Topic </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">   
        </table>
      </div>
    </div>
  </div>
</div>

@endsection

@include("layouts.admin.modal")

@push("script-table")

<script>
  //Start Setup ajax
  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('[name=csrf-token]').attr('content')
      }
    });
  });
  //End Setup ajax
</script>

  

  <script>
  $( window ).on("load", function() {
    loadEmployeeAll_onLoad();
  });

  $("#employee-all").on("click", function() {
    loadEmployeeAll();
  });

  $("#employee-admin").on("click", function() {
    loadEmployeeAdmin();
  });

  $("#employee-staff").on("click", function() {
    loadEmployeeStaff();
  });

  $("#employee-normal_user").on("click", function() {
    loadEmployeeNormalUser();
  });

  $("#news-all").on("click", function() {
    loadAllNews();
  });

  $("#topic-style").on("click", function() {
    loadNewsStyle();
  });

  $("#topic-fashion").on("click", function() {
    loadNewsFashion();
  });

  $("#topic-travel").on("click", function() {
    loadNewsTravel();
  });

  $("#topic-sports").on("click", function() {
    loadNewsSports();
  });
  
  $("#topic-video").on("click", function() {
    loadNewsVideo();
  });

  $("#topic-archives").on("click", function() {
    loadNewsArchives();
  });

  $("#slide").on("click", function() {
    loadSlide();
  });  

  </script>
@endpush
