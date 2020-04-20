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
<div class="modal fade" id="editModalEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="submit" class="btn btn-primary update_employee">Update data</button>
      </div>

    </div>
  </div>
</div>
<!-- End Edit Employee Modal -->

<!-- Start Edit News Modal  -->
<div class="modal fade" id="editModalNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="submit" class="btn btn-primary update_news">Update data</button>
      </div>

    </div>
  </div>
</div>
<!-- End Edit News Modal -->

<!-- Start Insert News Modal  -->
<div class="modal fade" id="insertModalNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <button type="submit" class="btn btn-success insert_news">Create</button>
      </div>
    </div>
  </div>
</div>
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
                      <th class="text-center">
                        <a href="javascript:void(0)" class="create-modal btn btn-success btn-lg" id="insert_news">
                          <i class="glyphicon glyphicon-plus"></i>
                        </a>
                      </th>
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
          { data: "email", name: "email" },
          {
            data: null,
            targets: "no-sort", orderable: false,
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
          { data: "email", name: "email"},
          {
            data: null,
            targets: "no-sort", orderable: false,
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
            targets: "no-sort", orderable: false,
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
    $('meta[name=type-news]').attr('content', '1');
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
          { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
              if (data == 1) {
                return '<i class="fa fa-check-circle" style="font-size:24px;color:green"></i>';
              }
              else {
                return '<i class="fa fa-times-circle" style="font-size:24px;color:red"></i>';
              }
            },
            targets: "no-sort", orderable: false
          },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            targets: "no-sort", orderable: false,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_news">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
    // setTimeout(function(){
    //   $("tbody").each(function() {
    //   $(this).find("tr").each(function() {
    //     if($(this).find("td:eq(2)").text() == "1"){
    //       $(this).find("td:eq(2)").html(`<i class="fa fa-check-circle" style="font-size:24px;color:green"></i>`);
    //     };
    //     if($(this).find("td:eq(2)").text() == "0"){
    //       // alert("ok")
    //       $(this).find("td:eq(2)").html(`<i class="fa fa-times-circle" style="font-size:24px;color:red""></i>`);
    //     };
    //   });
    //   });
    // }, 100);
  };

  let loadNewsFashion = () => {
    $("meta[name=type-news]").attr("content", "2");
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
          { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
              if (data == 1) {
                return '<i class="fa fa-check-circle" style="font-size:24px;color:green"></i>';
              }
              else {
                return '<i class="fa fa-times-circle" style="font-size:24px;color:red"></i>';
              }
            },
            targets: "no-sort", orderable: false
          },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            targets: "no-sort", orderable: false,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_news">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
  };

  let loadNewsTravel = () => {
    $('meta[name=type-news]').attr('content', '3');
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
          { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
              if (data == 1) {
                return '<i class="fa fa-check-circle" style="font-size:24px;color:green"></i>';
              }
              else {
                return '<i class="fa fa-times-circle" style="font-size:24px;color:red"></i>';
              }
            },
            targets: "no-sort", orderable: false
          },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            targets: "no-sort", orderable: false,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_news">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
  };

  let loadNewsSports = () => {
    $('meta[name=type-news]').attr('content', '4');
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
          { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
              if (data == 1) {
                return '<i class="fa fa-check-circle" style="font-size:24px;color:green"></i>';
              }
              else {
                return '<i class="fa fa-times-circle" style="font-size:24px;color:red"></i>';
              }
            },
            targets: "no-sort", orderable: false
          },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            targets: "no-sort", orderable: false,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_news">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
  };

  let loadNewsVideo = () => {
    $('meta[name=type-news]').attr('content', '5');
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
          { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
              if (data == 1) {
                return '<i class="fa fa-check-circle" style="font-size:24px;color:green"></i>';
              }
              else {
                return '<i class="fa fa-times-circle" style="font-size:24px;color:red"></i>';
              }
            },
            targets: "no-sort", orderable: false
          },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            targets: "no-sort", orderable: false,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_news">
                              <i class="glyphicon glyphicon-trash"></i>
                            </a>`
          }
        ]
    });
  };

  let loadNewsArchives = () => {
    $('meta[name=type-news]').attr('content', '6');
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
          { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
              if (data == 1) {
                return '<i class="fa fa-check-circle" style="font-size:24px;color:green"></i>';
              }
              else {
                return '<i class="fa fa-times-circle" style="font-size:24px;color:red"></i>';
              }
            },
            targets: "no-sort", orderable: false
          },
          { data: "image", name: "image" },
          { data: "tag", name: "tag" },
          { data: "caption", name: "caption" },
          { data: "subtitle", name: "subtitle" },
          {
            data: null,
            targets: "no-sort", orderable: false,
            defaultContent: `<a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                              <i class="glyphicon glyphicon-pencil"></i>
                            </a>
                            <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove">
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

  //Start Setup ajax
  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('[name=csrf-token]').attr('content')
      }
    });
  });
  //End Setup ajax

  // Start CRUD

  //Start Edit Employee Record
  $("body").delegate("#edit_employee", "click", function(){
    let table = $('#dataTable').DataTable();
    $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    };

    let data = table.row($tr).data();
    $("#editModalEmployee").find("#update_name").val(data['name']);
    $("#editModalEmployee").find("#update_email").val(data['email']);
    $("#editModalEmployee").modal('show');
  });
    //Click button update employee
    $("button.update_employee").click(function(event) {
      event.preventDefault();
      let table = $('#dataTable').DataTable();
      let data = table.row($tr).data();
      console.log(data);
      let id = data['id'];
      let name = $("#editModalEmployee").find("#update_name").val();
      let email = $("#editModalEmployee").find("#update_email").val();
      
      $.ajax({
        url: `{{route('employee.update')}}`,
        method: 'PUT',
        data: {
          id: id,
          name: name,
          email: email
        },
        success: function(response) {
          if (response.error == false) {
            $("#editModalEmployee").modal('hide');
            alertify.notify('Update successfully', 'success', 7);
          }
          console.log(response.imput);
        },
        error: function(error) {
          alertify.notify('An error occurred', 'error', 7);
          console.log(error.imput);
        }
      });
    });
    //End click button update employee
  //End Edit Employee Record

  //Click remove employee button
  $("body").delegate("#remove_employee", "click", function(){
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        event.preventDefault();
        let table = $('#dataTable').DataTable();
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        };

        let data = table.row($tr).data();
        let id = data['id'];
        $.ajax({
          url: `{{route('employee.remove')}}`,
          method: 'PUT',
          data: {
            id: id
          },
          success: function(response) {
            if (response.error == false) {
              Swal.fire(
                'Deleted!',
                'Element has been deleted.',
                'success'
              )
            }
          },
          error: function() {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong!',
              // footer: '<a href>Why do I have this issue?</a>'
            })
          }
        });
      }
    });
  });
  //End click remove employee button
  
  //Start Edit News Record
  $("body").delegate("#edit_news", "click", function(){
    let table = $('#dataTable').DataTable();
    $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    };

    let data = table.row($tr).data();
    $("#editModalNews").find("#update_hot_news").val(data['hot_news']);
    $("#editModalNews").find("#update_image").val(data['image']);
    $("#editModalNews").find("#update_tag").val(data['tag']);
    $("#editModalNews").find("#update_caption").val(data['caption']);
    $("#editModalNews").find("#update_subtitle").val(data['subtitle']);
    $("#editModalNews").modal('show');
  });
    //Click button update News
    $("button.update_news").click(function(event) {
      event.preventDefault();
      let table = $('#dataTable').DataTable();
      let data = table.row($tr).data();
      let id = data['id'];
      let hot_news = $("#editModalNews").find("#update_hot_news").val();
      let image = $("#editModalNews").find("#update_image").val();
      let tag = $("#editModalNews").find("#update_tag").val();
      let caption = $("#editModalNews").find("#update_caption").val();
      let subtitle = $("#editModalNews").find("#update_subtitle").val();
      
      $.ajax({
        url: `{{route('news.update')}}`,
        method: 'PUT',
        data: {
          id: id,
          hot_news: hot_news,
          image: image,
          tag: tag,
          caption: caption,
          subtitle: subtitle
        },
        success: function(response) {
          if (response.error == false) {
            $("#editModalNews").modal('hide');
            alertify.notify('Update successfully', 'success', 7);
          }
        },
        error: function(error) {
          alertify.notify('An error occurred', 'error', 7);
          console.log(error.imput);
        }
      });
    });
    //End click button update News
  //End Edit News Record

  //Start Insert Record
  $("body").delegate("#insert_news", "click", function() {
    $("#insertModalNews").modal('show');
  });
    //Start click button create
    $("button.insert_news").on("click", function(event) {
      event.preventDefault();
      let id_topic = $('meta[name=type-news]').attr('content');
      let id_creator = 0;
      let hot_news = $("#insertModalNews").find("#insert_hot_news").val();
      let image = $("#insertModalNews").find("#insert_image").val();
      let tag = $("#insertModalNews").find("#insert_tag").val();
      let caption = $("#insertModalNews").find("#insert_caption").val();
      let subtitle = $("#insertModalNews").find("#insert_subtitle").val();

      $.ajax({
        url: `{{route('news.insert')}}`,
        method: 'PUT',
        data: {
          id_topic: id_topic,
          id_creator: id_creator,
          hot_news: hot_news,
          image: image,
          tag: tag,
          caption: caption,
          subtitle: subtitle
        },
        success: function(response) {
          if (response.error == false) {
            $("#insertModalNews").modal('hide');
            alertify.notify('Create successfully', 'success', 7);
          }
          console.log(response);
        },
        error: function(error) {
          // alertify.notify('An error occurred', 'error', 7);
          console.log(error);
        }
      });
    });
    //End click button create
  //End Insert Record

  //Click remove button
  $("body").delegate("#remove_news", "click", function(event) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
        event.preventDefault();

        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        };

        let table = $('#dataTable').DataTable();
        let data = table.row($tr).data();
        let id = data['id'];
        $.ajax({
          url: `{{route('news.remove')}}`,
          method: 'PUT',
          data: {
            id: id
          },
          success: function(response) {
            if (response.error == false) {
              Swal.fire(
                'Deleted!',
                'Element has been deleted.',
                'success'
              )
            }
          },
          error: function() {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Something went wrong!',
              // footer: '<a href>Why do I have this issue?</a>'
            })
          }
        });
      }
    });
  });
  //End click remove button
  
  // End CRUD
</script>
@endpush
