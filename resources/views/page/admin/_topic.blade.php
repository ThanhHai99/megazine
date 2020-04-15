@extends('layouts.admin.admin')

@section('head-table')

<!-- Custom styles for this page -->
<link href="{{asset('datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css"> -->


@endsection

@section('content')

<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
  <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Topic {{ $topic }}</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Creator</th>
              <th>Hot News</th>
              <th>Image</th>
              <th>Tag</th>
              <th>Caption</th>
              <th>Subtitle</th>
              <th>Created At</th>
              <th class="text-center">
                <a href="#" class="create-modal btn btn-success btn-lg">
                  <i class="glyphicon glyphicon-plus"></i>
                </a>
              </th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Creator</th>
              <th>Hot News</th>
              <th>Image</th>
              <th>Tag</th>
              <th>Caption</th>
              <th>Subtitle</th>
              <th>Created At</th>
              <th class="text-center">
                <a href="#" class="create-modal btn btn-success btn-lg">
                  <i class="glyphicon glyphicon-plus"></i>
                </a>
              </th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($datas as $data)
              <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->id_creator }}</td>
                <td>{{ $data->hot_news }}</td>
                <td>{{ $data->image }}</td>
                <td>{{ $data->tag }}</td>
                <td>{{ $data->caption }}</td>
                <td>{{ $data->subtitle }}</td>
                <td>{{ $data->created_at }}</td>
                <td class="text-center">
                  <a class="show-modal btn btn-info btn-lg">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a class="edit-modal btn btn-warning btn-lg edit">
                    <i class="glyphicon glyphicon-pencil"></i>
                  </a>
                  <a class="delete-modal btn btn-danger btn-lg">
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
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button"class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- <form id="editForm" action="/topic" method="POST"> -->
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="modal-body">
          <div class="form-group">
            <label>Hot News</label>
            <input type="text" name="hot_news" id="hot_news" class="form-control" placeholder="Hot News">
          </div>

          <div class="form-group">
            <label>Image</label>
            <input type="text" name="image" id="image" class="form-control" placeholder="Image">
          </div>

          <div class="form-group">
            <label>Tag</label>
            <input type="text" name="tag" id="tag" class="form-control" placeholder="Tag">
          </div>

          <div class="form-group">
            <label>Caption</label>
            <input type="text" name="caption" id="caption" class="form-control" placeholder="Caption">
          </div>

          <div class="form-group">
            <label>Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Subtitle">
          </div>
        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary update">Update data</button>
        </div>

      <!-- </form> -->

    </div>
  </div>
</div>

<!-- End Edit Modal -->

@section('script-table')

<!-- Page level plugins -->
<script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<!-- <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script> -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>

<script>
  var table = $('#dataTable').DataTable();
  //Start Edit Record
  table.on('click', 'a.edit', function() {
    $tr = $(this).closest('tr');
    if($($tr).hasClass('chlid')) {
      $tr = $tr.prev('.parent');
    }
    
    var data = table.row($tr).data();
    console.log(data);
    $("input#hot_news").val(data[2]);
    $("input#image").val(data[3]);
    $("input#tag").val(data[4]);
    $("input#caption").val(data[5]);
    $("input#subtitle").val(data[6]);
    
    // $("#editForm").attr('action', '/topic'+data[0]);
    $("#editModal").modal('show');

  });
  //End Edit Record

  //If click button update
  $("button.update").click(function() {
    alertify.success('Success message');
  });
</script>

@endsection
