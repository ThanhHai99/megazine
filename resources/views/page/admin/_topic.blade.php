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
              <th>id</th>
              <th>id_topic</th>
              <th>id_creator</th>
              <th>hot_news</th>
              <th>image</th>
              <th>tag</th>
              <th>caption</th>
              <th>subtitle</th>
              <th>created_at</th>
              <th>updated_at</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>id</th>
              <th>id_topic</th>
              <th>id_creator</th>
              <th>hot_news</th>
              <th>image</th>
              <th>tag</th>
              <th>caption</th>
              <th>subtitle</th>
              <th>created_at</th>
              <th>updated_at</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($datas as $data)
              <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->id_topic }}</td>
                <td>{{ $data->id_creator }}</td>
                <td>{{ $data->hot_news }}</td>
                <td>{{ $data->image }}</td>
                <td>{{ $data->tag }}</td>
                <td>{{ $data->caption }}</td>
                <td>{{ $data->subtitle }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->updated_at }}</td>
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
