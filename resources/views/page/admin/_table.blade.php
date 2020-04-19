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

<!-- Start Edit Employee Modal  -->
<!-- <div class="modal fade" id="editModalEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" id="update_name" class="form-control" placeholder="Name">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" id="update_email" class="form-control" placeholder="Email">
        </div>
      </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary update">Update data</button>
      </div>

    </div>
  </div>
</div> -->
<!-- End Edit Employee Modal -->

<!-- Start Edit News Modal  -->
<!-- <div class="modal fade" id="editModalNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label>Hot News</label>
          <input type="text" name="hot_news" id="update_hot_news" class="form-control" placeholder="Hot News">
        </div>

        <div class="form-group">
          <label>Image</label>
          <input type="text" name="image" id="update_image" class="form-control" placeholder="Image">
        </div>

        <div class="form-group">
          <label>Tag</label>
          <input type="text" name="tag" id="update_tag" class="form-control" placeholder="Tag">
        </div>

        <div class="form-group">
          <label>Caption</label>
          <input type="text" name="caption" id="update_caption" class="form-control" placeholder="Caption">
        </div>

        <div class="form-group">
          <label>Subtitle</label>
          <input type="text" name="subtitle" id="update_subtitle" class="form-control" placeholder="Subtitle">
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary update">Update data</button>
      </div>

    </div>
  </div>
</div> -->
<!-- End Edit News Modal -->

<!-- Start Insert News Modal  -->
<!-- <div class="modal fade" id="insertModalNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label>Hot News</label>
          <input type="text" name="hot_news" id="insert_hot_news" class="form-control" placeholder="Hot News">
        </div>

        <div class="form-group">
          <label>Image</label>
          <input type="text" name="image" id="insert_image" class="form-control" placeholder="Image">
        </div>

        <div class="form-group">
          <label>Tag</label>
          <input type="text" name="tag" id="insert_tag" class="form-control" placeholder="Tag">
        </div>

        <div class="form-group">
          <label>Caption</label>
          <input type="text" name="caption" id="insert_caption" class="form-control" placeholder="Caption">
        </div>

        <div class="form-group">
          <label>Subtitle</label>
          <input type="text" name="subtitle" id="insert_subtitle" class="form-control" placeholder="Subtitle">
        </div>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success insert">Create</button>
      </div>
    </div>
  </div>
</div> -->
<!-- End Insert News Modal -->

@push("script-table")

<script>
  // Start load data
  let htmlEmployee = `<thead>
                        <tr>
                          <th>ID</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>`;

  let htmlNews = `<thead>
                    <tr>
                      <th>ID</th>
                      <th>ID_Creator</th>
                      <th>Hot News</th>
                      <th>Image</th>
                      <th>Tag</th>
                      <th>Caption</th>
                      <th>Subtitle</th>
                      <th>Action</th>
                    </tr>
                  </thead>`;

  let loadEmployeeStaff_onLoad = () => {
    $("#dataTable").append(htmlEmployee);
    // $("a[click=index]").click();
    $("#dataTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route("employee.staff") !!}",
        columns: [
          { data: "id", name: "id" },
          { data: "id_role", name: "id_role" },
          { data: "id_status", name: "id_status" },
          { data: "name", name: "name" },
          { data: "email", name: "email"},
          {
            data: null,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_employee">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_employee">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
  };

  let loadEmployeeStaff = () => {
    var table = $("#dataTable").DataTable();
    table.destroy();
    $("#dataTable").empty();
    $("#dataTable").append(htmlEmployee);
    $("#dataTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route("employee.staff") !!}",
        columns: [
          { data: "id", name: "id" },
          { data: "id_role", name: "id_role" },
          { data: "id_status", name: "id_status" },
          { data: "name", name: "name" },
          { data: "email", name: "email" ,targets: "no-sort", orderable: false},
          {
            data: null,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_employee">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_employee">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
  };

  let loadEmployeeNormalUser = () => {
    var table = $("#dataTable").DataTable();
    table.destroy();
    $("#dataTable").empty();
    $("#dataTable").append(htmlEmployee);
    $("#dataTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route("employee.normal_user") !!}",
        columns: [
          { data: "id", name: "id" },
          { data: "id_role", name: "id_role" },
          { data: "id_status", name: "id_status" },
          { data: "name", name: "name" },
          { data: "email", name: "email" },
          {
            data: null,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_employee">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_employee">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
    $("#dataTable").DataTable();
  };

  let loadNewsStyle = () => {
    var table = $("#dataTable").DataTable();
    table.destroy();
    $("#dataTable").empty();
    $("#dataTable").append(htmlNews);
    $("#dataTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route("news.style") !!}",
        columns: [
          { data: "id", name: "id" },
          { data: "id_creator", name: "id_creator" },
          { data: "hot_news", name: "hot_news" },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg edit">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg remove">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
    $("#dataTable").DataTable();
  };

  let loadNewsFashion = () => {
    var table = $("#dataTable").DataTable();
    table.destroy();
    $("#dataTable").empty();
    $("#dataTable").append(htmlNews);
    $("#dataTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route("news.fashion") !!}",
        columns: [
          { data: "id", name: "id" },
          { data: "id_creator", name: "id_creator" },
          { data: "hot_news", name: "hot_news" },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg edit">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg remove">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
  };

  let loadNewsTravel = () => {
    var table = $("#dataTable").DataTable();
    table.destroy();
    $("#dataTable").empty();
    $("#dataTable").append(htmlNews);
    $("#dataTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route("news.travel") !!}",
        columns: [
          { data: "id", name: "id" },
          { data: "id_creator", name: "id_creator" },
          { data: "hot_news", name: "hot_news" },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg edit">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg remove">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
  };

  let loadNewsSports = () => {
    var table = $("#dataTable").DataTable();
    table.destroy();
    $("#dataTable").empty();
    $("#dataTable").append(htmlNews);
    $("#dataTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route("news.sports") !!}",
        columns: [
          { data: "id", name: "id" },
          { data: "id_creator", name: "id_creator" },
          { data: "hot_news", name: "hot_news" },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg edit">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg remove">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
  };

  let loadNewsVideo = () => {
    var table = $("#dataTable").DataTable();
    table.destroy();
    $("#dataTable").empty();
    $("#dataTable").append(htmlNews);
    $("#dataTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route("news.video") !!}",
        columns: [
          { data: "id", name: "id" },
          { data: "id_creator", name: "id_creator" },
          { data: "hot_news", name: "hot_news" },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg edit">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg remove">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
  };

  let loadNewsArchives = () => {
    var table = $("#dataTable").DataTable();
    table.destroy();
    $("#dataTable").empty();
    $("#dataTable").append(htmlNews);
    $("#dataTable").DataTable({
        processing: true,
        serverSide: true,
        ajax: "{!! route("news.archives") !!}",
        columns: [
          { data: "id", name: "id" },
          { data: "id_creator", name: "id_creator" },
          { data: "hot_news", name: "hot_news" },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg edit">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg remove">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
  };

  $( window ).on("load", function() {
    loadEmployeeStaff_onLoad();
  });

  $("#employee-staff").on("click", function() {
    loadEmployeeStaff();
  });

  $("#employee-normal_user").on("click", function() {
    loadEmployeeNormalUser();
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
  // End load data

  // Start CRUD
  //Start Edit Record
  $("#edit_employee").on("click", function() {
    alert("ok");
    // $tr = $(this).closest('tr');
    // if ($($tr).hasClass('child')) {
    //   $tr = $tr.prev('.parent');
    // };

    // let data = $('#dataTable').DataTable().row($tr).data();
    // $("#editModalEmployee").find("#update_name").val(data[3]);
    // $("#editModalEmployee").find("#update_email").val(data[4]);
    // $("#editModalEmployee").modal('show');
  });
  //End Edit Record
  // End CRUD
</script>
@endpush
