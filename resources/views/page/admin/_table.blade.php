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
  <?php if (session('id_role') == 0) { ?>
          $("div[data=employee] a").each(function() {
            $(this).removeClass("active");
          });
          $("div[data=employee] a#employee-all").addClass("active");
          loadEmployeeAll_onLoad();
  <?php } ?>

  <?php if (session('id_role') == 1) { ?>
          $("div[data=employee] a").each(function() {
            $(this).removeClass("active");
          });
          $("div[data=employee] a#employee-staff").addClass("active");
          loadEmployeeStaff_onLoad();
  <?php } ?>

  <?php if (session('id_role') == 2) { ?>
          $("div[data=news] a").each(function() {
            $(this).removeClass("active");
          });
          $("div[data=news] a#news-all").addClass("active");
          loadNewsAll_onLoad();
  <?php } ?>

  $("#employee-all").on("click", function() {
    $("div[data=employee] a").each(function() {
      $(this).removeClass("active");
    });
    $("div[data=employee] a#employee-all").addClass("active");
    loadEmployeeAll();
  });

  $("#employee-admin").on("click", function() {
    $("div[data=employee] a").each(function() {
      $(this).removeClass("active");
    });
    $("div[data=employee] a#employee-admin").addClass("active");
    loadEmployeeAdmin();
  });

  $("#employee-staff").on("click", function() {
    $("div[data=employee] a").each(function() {
      $(this).removeClass("active");
    });
    $("div[data=employee] a#employee-staff").addClass("active");
    loadEmployeeStaff();
  });

  $("#employee-creator").on("click", function() {
    $("div[data=employee] a").each(function() {
      $(this).removeClass("active");
    });
    $("div[data=employee] a#employee-creator").addClass("active");
    loadEmployeeCreator();
  });

  $("#employee-guest").on("click", function() {
    $("div[data=employee] a").each(function() {
      $(this).removeClass("active");
    });
    $("div[data=employee] a#employee-guest").addClass("active");
    loadEmployeeGuest();
  });

  

  $("#news-all").on("click", function() {
    $("div[data=news] a").each(function() {
      $(this).removeClass("active");
    });
    $("div[data=news] a#news-all").addClass("active");
    $("input[name=_news_id_topic]").attr("value", "");
    loadAllNews();
  });

  $("#news-style").on("click", function() {
    $("div[data=news] a").each(function() {
      $(this).removeClass("active");
    });
    $("div[data=news] a#news-style").addClass("active");
    $("input[name=_news_id_topic]").attr("value", "1");
    loadNewsStyle();
  });

  $("#news-fashion").on("click", function() {
    $("div[data=news] a").each(function() {
      $(this).removeClass("active");
    });
    $("div[data=news] a#news-fashion").addClass("active");
    $("input[name=_news_id_topic]").attr("value", "2");
    loadNewsFashion();
  });

  $("#news-travel").on("click", function() {
    $("div[data=news] a").each(function() {
      $(this).removeClass("active");
    });
    $("div[data=news] a#news-travel").addClass("active");
    $("input[name=_news_id_topic]").attr("value", "3");
    loadNewsTravel();
  });

  $("#news-sports").on("click", function() {
    $("div[data=news] a").each(function() {
      $(this).removeClass("active");
    });
    $("div[data=news] a#news-sports").addClass("active");
    $("input[name=_news_id_topic]").attr("value", "4");
    loadNewsSports();
  });

  $("#video-all").on("click", function() {
    $("div[data=video] a").each(function() {
      $(this).removeClass("active");
    });
    $("div[data=video] a#video-all").addClass("active");
    $("input[name=_video_id_topic]").attr("value", "");
    loadVideoAll();
  });

  $("#slide").on("click", function() {
    loadSlide();
  });  

  </script>
@endpush
