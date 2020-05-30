<script>
$("body").delegate("#edit_video", "click", function() {
  let table = $('#dataTable').DataTable();
  $tr = $(this).closest('tr');
  if ($($tr).hasClass('child')) {
    $tr = $tr.prev('.parent');
  };

  $(`#editModalVideo select[name=video_id_topic] option`).each(function() {
    $(this).removeAttr("selected");
  });

  let data = table.row($tr).data();
  console.log(data);
  $("#editModalVideo input[name=video_tag]").val(data['tag']);
  $("#editModalVideo input[name=video_caption]").val(data['caption']);
  $("#editModalVideo input[name=video_subtitle]").val(data['subtitle']);
  if ($("div[data=video] a.active").hasClass("all")) {
    $(`#editModalVideo select[name=video_id_topic] option[data='` + data['id_topic'] + `']`).attr('selected','selected');
  } else {
    let topic = $("div[data=video] a.active").attr("data");
    $(`#editModalVideo select[name=video_id_topic] option[data='` + topic + `']`).attr('selected','selected');
  }
  $("#editModalVideo").modal('show');
});

$("body").delegate("button.update_video", "click", function(event) {
  event.preventDefault();
  let table = $('#dataTable').DataTable();
  let data = table.row($tr).data();
  let id = data['id'];
  let id_topic = $(`#editModalVideo select[name=video_id_topic] option:selected`).val();
  let tag = $("#editModalVideo input[name=video_tag]").val();
  let caption = $("#editModalVideo input[name=video_caption]").val();
  let subtitle = $("#editModalVideo input[name=video_subtitle]").val();

  $.ajax({
    url: `{{route('video.update')}}`,
    method: "PUT",
    data: {
      id: id,
      video_id_topic: id_topic,
      video_tag: tag,
      video_caption: caption,
      video_subtitle: subtitle
    },
    success: function(response) {
      if (response.error == false) {

        $("#editModalVideo").modal('hide');
        alertify.notify('Update successfully', 'success', 3);

        if( $("div.dataTables_paginate span a").length == 1) {
          if( $("div[data=employee] a").hasClass("active") ) {
            $("div[data=employee] a.active").click();
          }
        } else {
          if ( $("div.dataTables_paginate a.previous").hasClass("disabled") ) {
            $("div.dataTables_paginate a.next").click();
            $("div.dataTables_paginate a.previous").click();
          }
          if ( $("div.dataTables_paginate a.next").hasClass("disabled") ) {
            $("div.dataTables_paginate a.previous").click();
            $("div.dataTables_paginate a.next").click();
          }
        }
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


$("body").delegate("#hot_video_yes", "click", function(event) {
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
      if (response.error == false) {
        if ( $("div[data=video] a.active").hasClass("all") ) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(4)").html(
                `<a href="javascript:void(0)" id="hot_video_no"><i class="fa fa-times-circle" style="color: red;"></i></a>`
                ); 
            }
          });
        } else {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(3)").html(
                `<a href="javascript:void(0)" id="hot_video_no"><i class="fa fa-times-circle" style="color: red;"></i></a>`
                ); 
            }
          });
        }
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

$("body").delegate("#hot_video_no", "click", function(event) {
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
      if (response.error == false) {
        if ( $("div[data=video] a.active").hasClass("all") ) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(4)").html(
                `<a href="javascript:void(0)" id="hot_video_yes"><i class="fa fa-check-circle" style="color:green;"></i></a>`
                );
            }
          });
        } else {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(3)").html(
                `<a href="javascript:void(0)" id="hot_video_yes"><i class="fa fa-check-circle" style="color:green;"></i></a>`
                );
            }
          });
        }
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

$("body").delegate("#status_video_yes", "click", function(event) {
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
      if (response.error == false) {
        if ( $("div[data=video] a.active").hasClass("all") ) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(5)").html(
                `<a href="javascript:void(0)" id="status_video_no"><i class="fas fa-lock" style="color: red;"></i></a>`
                );
            }
          });
        } else {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(4)").html(
                `<a href="javascript:void(0)" id="status_video_no"><i class="fas fa-lock" style="color: red;"></i></a>`
                );
            }
          });
        }
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

$("body").delegate("#status_video_no", "click", function(event) {
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
      if (response.error == false) {
        if ( $("div[data=video] a.active").hasClass("all") ) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(5)").html(
                `<a href="javascript:void(0)" id="status_video_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>`
                );
            }
          });
        } else {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(4)").html(
                `<a href="javascript:void(0)" id="status_video_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>`
                );
            }
          });
        }
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

  let backgroudVideo = `background-image: url(images/`+ data['image'] +`); height: 600px;`;
  $("div#video-background").attr("style", backgroudVideo);
  let linkVideo = 'videos/' + data['video'];
  $("div#video-background a").attr("href", linkVideo);
  // $("button#update_video_video").remove();

  $("#editImageVideo").modal('show');
});

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
          if ($(this).html() == response.id) {
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


$("body").delegate("a#insert_video", "click", function() {
  if ($("div[data=video] a.active").hasClass("all")) {
    $("div#insertModalVideo div[id=video_id_topic]").show();
  } else {
    $("div#insertModalVideo div[id=video_id_topic]").hide();
  }
  $("#insertModalVideo").modal('show');
});


$("body").delegate("form#form-insert-video", "submit", function(event) {
  event.preventDefault();
  let table = $('#dataTable').DataTable();
  $.ajax({
    url: `{{route('video.insert')}}`,
    method: 'POST',
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    success: function(response) {
      if (response.error == false) {
        $("#insertModalVideo").modal('hide');
        alertify.notify('Create successfully', 'success', 3);
        sendNews();
      }
      // table.rows.add([{
      //   "id": "",
      //   "id_topic": "",
      //   "id_creator": "",
      //   "hot_news": "",
      //   "image": "",
      //   "tag": "",
      //   "caption": "",
      //   "subtitle": "",
      //   "action": ""
      // }]).draw();
      if( $("div.dataTables_paginate span a").length == 1) {
          if( $("div[data=employee] a").hasClass("active") ) {
            $("div[data=employee] a.active").click();
          }
        } else {
          if ( $("div.dataTables_paginate a.previous").hasClass("disabled") ) {
            $("div.dataTables_paginate a.next").click();
            $("div.dataTables_paginate a.previous").click();
          }
          if ( $("div.dataTables_paginate a.next").hasClass("disabled") ) {
            $("div.dataTables_paginate a.previous").click();
            $("div.dataTables_paginate a.next").click();
          }
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


$("body").delegate("#remove_video", "click", function(event) {
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
        url: `{{route('video.remove')}}`,
        method: "PUT",
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
            if( $("div.dataTables_paginate span a").length == 1) {
              if( $("div[data=employee] a").hasClass("active") ) {
                $("div[data=employee] a.active").click();
              }
            } else {
              if ( $("div.dataTables_paginate a.previous").hasClass("disabled") ) {
                $("div.dataTables_paginate a.next").click();
                $("div.dataTables_paginate a.previous").click();
              }
              if ( $("div.dataTables_paginate a.next").hasClass("disabled") ) {
                $("div.dataTables_paginate a.previous").click();
                $("div.dataTables_paginate a.next").click();
              }
            }
          }
        },
        error: function(error) {
          if (error.responseText.error == "Unauthenticated.") {
            location.reload(true);
          }
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

</script>