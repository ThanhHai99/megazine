@extends('layouts.admin.admin')
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
              <th>ID</th>
              <th>Role</th>
              <th>Status</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Role</th>
              <th>Status</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
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

@section('script-table')
<script>
  let table = $('#dataTable').DataTable(); //Global env
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
      },
      error: function() {
        alertify.notify('An error occurred', 'error', 7);
      }
    });
  });
  //End click button update

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
  //End click remove button

</script>

@endsection
