<script>

//Click update hot video
  //Yes
  $("body").delegate("#hot_video_yes", "click", function(event) {
    //Click button update hot new yes
    event.preventDefault();
    let table = $('#dataTable').DataTable();
    $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    };
    let data = table.row($tr).data();
    let id = data['id'];
    $('meta[name=row-index]').attr('content', id);
    $.ajax({
      url: `{{route('news.updateHotVideoNo')}}`,
      method: "PUT",
      data: {
        id: id
      },
      success: function(response) {
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(4)").html(`<a href="javascript:void(0)" id="hot_video_no"><i class="fa fa-times-circle" style="color: red;"></i></a>`);
            }
          });
        }
      },
      error: function(error) {
        if (error.responseText.error == "Unauthenticated.") {
          location.reload(true);
        }
        alertify.notify('An error occurred', 'error', 3);
      }
    });
    //End click button update hot new yes
  });
  //No
  $("body").delegate("#hot_video_no", "click", function(event) {
    //Click button update hot new yes
    event.preventDefault();
    let table = $('#dataTable').DataTable();
    $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    };
    let data = table.row($tr).data();
    let id = data['id'];
    $('meta[name=row-index]').attr('content', id);
    $.ajax({
      url: `{{route('news.updateHotVideoYes')}}`,
      method: "PUT",
      data: {
        id: id
      },
      success: function(response) {
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(4)").html(`<a href="javascript:void(0)" id="hot_video_yes"><i class="fa fa-check-circle" style="color:green;"></i></a>`);
            }
          });
        }
      },
      error: function(error) {
        if (error.responseText.error == "Unauthenticated.") {
          location.reload(true);
        }
        alertify.notify('An error occurred', 'error', 3);
      }
    });
    //End click button update hot new yes
  });
  //End click update hot video

  //Click update status video
  //Yes
  $("body").delegate("#status_video_yes", "click", function(event) {
    //Click button update hot new yes
    event.preventDefault();
    let table = $('#dataTable').DataTable();
    $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    };
    let data = table.row($tr).data();
    let id = data['id'];
    $('meta[name=row-index]').attr('content', id);
    $.ajax({
      url: `{{route('news.updateStatusVideoNo')}}`,
      method: "PUT",
      data: {
        id: id
      },
      success: function(response) {
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(5)").html(`<a href="javascript:void(0)" id="status_video_no"><i class="fas fa-lock" style="color: red;"></i></a>`);
            }
          });
        }
      },
      error: function(error) {
        if (error.responseText.error == "Unauthenticated.") {
          location.reload(true);
        }
        alertify.notify('An error occurred', 'error', 3);
      }
    });
    //End click button update hot new yes
  });
  //No
  $("body").delegate("#status_video_no", "click", function(event) {
    //Click button update hot new yes
    event.preventDefault();
    let table = $('#dataTable').DataTable();
    $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    };
    let data = table.row($tr).data();
    let id = data['id'];
    $('meta[name=row-index]').attr('content', id);
    $.ajax({
      url: `{{route('news.updateStatusVideoYes')}}`,
      method: "PUT",
      data: {
        id: id
      },
      success: function(response) {
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(5)").html(`<a href="javascript:void(0)" id="status_video_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>`);
            }
          });
        }
      },
      error: function(error) {
        if (error.responseText.error == "Unauthenticated.") {
          location.reload(true);
        }
        alertify.notify('An error occurred', 'error', 3);
      }
    });
    //End click button update hot new yes
  });
  //End click update status video

  //Start click image video
  $("body").delegate("img#image-video", "click", function() {
    let table = $('#dataTable').DataTable();
    $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    };

    let data = table.row($tr).data();
    $("input[name=id_video_hide]").attr('value', data['id']);
    $("img#show-image-video").attr("src", '');
    let linkImage = 'images/' + data['image'];
    $("img#show-image-video").attr("src", linkImage);
    $("button#update_image_video").remove();
    $("#editImageVideo").modal('show');
  });
    
    
    // Start click change image video
      //Start click button create
      
    $("body").delegate("form#form-image-video", "submit", function(event) {
      event.preventDefault();
      let table = $('#dataTable').DataTable();
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      };
      let data = table.row($tr).data();
      $.ajax({
        url: `{{route('news.update_image_video')}}`,
        method: 'POST',
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(response) {
          if (response.error == false) {
            $("#editImageVideo").modal('hide');
            alertify.notify('Update image successfully', 'success', 3);
            $("#dataTable tbody td:nth-child(1)").each(function() {
              if($(this).html() == response.id ) {
                let temp = $('#dataTable').DataTable().row($("#dataTable tbody tr td:nth-child(1)")).data();
                temp.image = response.image;
                $('#dataTable').DataTable().row($(this).parent("tr")).data(temp);
                return false;
              }
            });
          }
        },
        error: function(error) {
          if (error.responseText.error == "Unauthenticated.") {
            location.reload(true);
          }
          alertify.notify('An error occurred', 'error', 3);
        }
      });
    });
    // End click change image video
  //End click image video

  

</script>