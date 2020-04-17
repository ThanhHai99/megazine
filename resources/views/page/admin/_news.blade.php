@extends('layouts.admin.admin')
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
              <th class="text-center">
                <a href="javascript:void(0)" class="create-modal btn btn-success btn-lg insert">
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
              <td>{{ $data->id_creator }}</td>
              <td>{{ $data->hot_news }}</td>
              <td>{{ $data->image }}</td>
              <td>{{ $data->tag }}</td>
              <td>{{ $data->caption }}</td>
              <td>{{ $data->subtitle }}</td>
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
        <button type="submit" class="btn btn-primary update">Update data</button>
      </div>

    </div>
  </div>
</div>
<!-- End Edit Modal -->

<!-- Start Insert Modal  -->
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
        <button type="submit" class="btn btn-success insert">Create</button>
      </div>
    </div>
  </div>
</div>
<!-- End Insert Modal -->

@push('script-table')

<script>
  let table = $('#dataTable').DataTable(); //Global env
  //Start Edit Record
  table.on('click', 'a.edit', function() {
    $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    };

    let data = table.row($tr).data();
    $("#editModalNews").find("#update_hot_news").val(data[2]);
    $("#editModalNews").find("#update_image").val(data[3]);
    $("#editModalNews").find("#update_tag").val(data[4]);
    $("#editModalNews").find("#update_caption").val(data[5]);
    $("#editModalNews").find("#update_subtitle").val(data[6]);

    $("#editModalNews").modal('show');

  });
  //End Edit Record

  //Start Insert Record
  $("a.insert").on('click', function() {
    $("#insertModalNews").modal('show');
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
      error: function() {
        alertify.notify('An error occurred', 'error', 7);
      }
    });
  });
  //End click button update

  //Click button create
  $("button.insert").click(function(event) {
    event.preventDefault();
    let id_topic = 0;
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

@endpush
