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
              <th class="text-center" width="150px">
                <a href="#" class="create-modal btn btn-success btn-sm">
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
              <th class="text-center" width="150px">
                <a href="#" class="create-modal btn btn-success btn-sm">
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
                  <a href="#" class="show-modal btn btn-info btn-sm">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a href="#" class="edit-modal btn btn-warning btn-sm">
                    <i class="glyphicon glyphicon-pencil"></i>
                    <i class="fas fa-pencil"></i>
                  </a>
                  <a href="#" class="delete-modal btn btn-danger btn-sm">
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

@section('script-table')

<!-- Page level plugins -->
<script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<!-- <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script> -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>


@endsection
