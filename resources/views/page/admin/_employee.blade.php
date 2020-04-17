@extends('layouts.admin.admin')

@section('head-table')

<!-- Custom styles for this page -->
<link href="{{asset('datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css"> -->
<meta name="csrf-token" content="{{ csrf_token() }}"> <!--pass ajax -->


@endsection

@section('content')

<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
  <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{ $text }}</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>id</th>
              <th>id_role</th>
              <th>id_status</th>
              <th>name</th>
              <th>email</th>
              <th>created_at</th>
              <th>updated_at</th>
              <th class="text-center">
                <a href="javascript:void(0)" class="create-modal btn btn-success btn-lg insert">
                  <i class="glyphicon glyphicon-plus"></i>
                </a>
              </th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>id</th>
              <th>id_role</th>
              <th>id_status</th>
              <th>name</th>
              <th>email</th>
              <th>created_at</th>
              <th>updated_at</th>
              <th class="text-center">
                <a href="javascript:void(0)" class="create-modal btn btn-success btn-lg insert">
                  <i class="glyphicon glyphicon-plus"></i>
                </a>
              </th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($datas as $data)
              <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->id_role }}</td>
                <td>{{ $data->id_status }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->updated_at }}</td>
                <td class="text-center">
                  <a href="javascript:void(0)" class="show-modal btn btn-info btn-lg">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg edit">
                    <i class="glyphicon glyphicon-pencil"></i>
                  </a>
                  <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg remove">
                    <i class="glyphicon glyphicon-trash"></i>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection

<!-- Start Edit Modal  -->
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
        <button type="submit" class="btn btn-primary update">Update data</button>
      </div>

    </div>
  </div>
</div>
<!-- End Edit Modal -->

<!-- Start Insert Modal  -->
<div class="modal fade" id="insertModalEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" id="insert_name" class="form-control" placeholder="Name">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" id="insert_email" class="form-control" placeholder="Email">
        </div>
      </div>      


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success update">Create</button>
      </div>
    </div>
  </div>
</div>
<!-- End Insert Modal -->

@section('script-table')

<!-- Page level plugins -->
<script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<!-- <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script> -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>



<script>
  var table = $('#dataTable').DataTable(); //Global env
  //Start Edit Record
  table.on('click', 'a.edit', function() {
    $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    };

    let data = table.row($tr).data();
    $("#editModalEmployee").find("#update_name").val(data[3]);
    $("#editModalEmployee").find("#update_email").val(data[4]);
    $("#editModalEmployee").modal('show');

  });
  //End Edit Record

  //Start Insert Record
  $("a.insert").on('click', function() {
    $("#insertModalEmployee").modal('show');
  });
  //End Insert Record

  //Start Setup ajax
  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('[name=csrf-token]').attr('content')
      }
    });
  });
  //End Setup ajax

  //Click button update
  $("button.update").click(function(event) {
    event.preventDefault();
    let data = table.row($tr).data();
    let id = data[0];
    let hot_news = $("#editModalEmployee").find("#update_hot_news").val();
    let image = $("#editModalEmployee").find("#update_image").val();
    let tag = $("#editModalEmployee").find("#update_tag").val();
    let caption = $("#editModalEmployee").find("#update_caption").val();
    let subtitle = $("#editModalEmployee").find("#update_subtitle").val();

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
          $("#editModalEmployee").modal('hide');
          alertify.notify('Update successfully', 'success', 7);
        }
      },
      error: function() {
        alertify.notify('An error occurred', 'error', 7);
      }
    });
  });
  //End click button update

  //Click button create
  $("button.insert").click(function(event) {
    event.preventDefault();
    let id_creator = 0;
    let hot_news = $("#insertModalEmployee").find("#insert_hot_news").val();
    let image = $("#insertModalEmployee").find("#insert_image").val();
    let tag = $("#insertModalEmployee").find("#insert_tag").val();
    let caption = $("#insertModalEmployee").find("#insert_caption").val();
    let subtitle = $("#insertModalEmployee").find("#insert_subtitle").val();

    $.ajax({
      url: `{{route('news.insert')}}`,
      method: 'PUT',
      data: {
        id_creator: id_creator,
        hot_news: hot_news,
        image: image,
        tag: tag,
        caption: caption,
        subtitle: subtitle
      },
      success: function(response) {
        if (response.error == false) {
          $("#insertModalEmployee").modal('hide');
          alertify.notify('Create successfully', 'success', 7);
        }
      },
      error: function() {
        alertify.notify('An error occurred', 'error', 7);
      }
    });
  });
  //End click button create

  //Click remove button
  table.on('click', 'a.remove', function(event) {
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

        let data = table.row($tr).data();
        let id = data[0];
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

</script>

@endsection
