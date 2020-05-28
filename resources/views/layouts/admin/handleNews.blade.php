<script>
// send Mail while created new news  
let sendNews = () => {
  $.ajax({
    url: `{{route('news.send')}}`,
    method: 'POST',
    data: {},
    contentType: false,
    cache: false,
    processData: false,
    success: function(response) {

    },
    error: function(error) {

    }
  });
}

// open modal [prepare]
$("body").delegate("#edit_news", "click", function() {
  let table = $('#dataTable').DataTable();
  $tr = $(this).closest('tr');
  if ($($tr).hasClass('child')) {
    $tr = $tr.prev('.parent');
  };

  let data = table.row($tr).data();
  $("#editModalNews").find("#update_image").val(data['image']);
  $("#editModalNews").find("#update_tag").val(data['tag']);
  $("#editModalNews").find("#update_caption").val(data['caption']);
  $("#editModalNews").find("#update_subtitle").val(data['subtitle']);
  $("meta[name=type-save]").attr("value", $(`#editModalNews #topic_option option:selected`).val());
  $("#editModalNews").modal('show');
});

$("body").delegate("a#insert_news", "click", function() {
  $("#insertModalNews").modal('show');
});

$("body").delegate("img#image-news", "click", function() {
  let table = $('#dataTable').DataTable();
  $tr = $(this).closest('tr');
  if ($($tr).hasClass('child')) {
    $tr = $tr.prev('.parent');
  };

  let data = table.row($tr).data();
  $("input[name=id_news_hide]").attr('value', data['id']);
  $("img#show-image-news").attr("src", '');
  let linkImage = 'images/' + data['image'];
  $("img#show-image-news").attr("src", linkImage);
  $("button#update_image_news").remove();
  $("#editImageNews").modal('show');
});

//handle
$("body").delegate("#hot_news_yes", "click", function(event) {
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
    url: `{{route('news.updateHotNewsNo')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if (response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(3)").html(
              `<a href="javascript:void(0)" id="hot_news_no"><i class="fa fa-times-circle" style="color: red;"></i></a>`
              );
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

$("body").delegate("#hot_news_no", "click", function(event) {
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
    url: `{{route('news.updateHotNewsYes')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if (response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(3)").html(
              `<a href="javascript:void(0)" id="hot_news_yes"><a href="javascript:void(0)" id="hot_news_yes"><i class="fa fa-check-circle" style="color:green;"></i></a>`
              );
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

$("body").delegate("#hot_news_yes-all", "click", function(event) {
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
    url: `{{route('news.updateHotNewsNo')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if (response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(4)").html(
              `<a href="javascript:void(0)" id="hot_news_no-all"><i class="fa fa-times-circle" style="color: red;"></i></a>`
              );
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

$("body").delegate("#hot_news_no-all", "click", function(event) {
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
    url: `{{route('news.updateHotNewsYes')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if (response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(4)").html(
              `<a href="javascript:void(0)" id="hot_news_yes-all"><i class="fa fa-check-circle" style="color:green;"></i></a>`
              );
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

$("body").delegate("#status_news_yes", "click", function(event) {
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
    url: `{{route('news.updateStatusNewsNo')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if (response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(4)").html(
              `<a href="javascript:void(0)" id="status_news_no"><i class="fas fa-lock" style="color: red;"></i></a>`
              );
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

$("body").delegate("#status_news_no", "click", function(event) {
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
    url: `{{route('news.updateStatusNewsYes')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if (response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(4)").html(
              `<a href="javascript:void(0)" id="status_news_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>`
              );
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

$("body").delegate("#status_news_yes-all", "click", function(event) {
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
    url: `{{route('news.updateStatusNewsNo')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if (response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(5)").html(
              `<a href="javascript:void(0)" id="status_news_no-all"><i class="fas fa-lock" style="color: red;"></i></a>`
              );
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

$("body").delegate("#status_news_no-all", "click", function(event) {
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
    url: `{{route('news.updateStatusNewsYes')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if (response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(5)").html(
              `<a href="javascript:void(0)" id="status_news_yes-all"><i class="fas fa-lock-open" style="color:green;"></i></a>`
              );
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

$("body").delegate("button.update_news", "click", function(event) {
  event.preventDefault();
  let table = $('#dataTable').DataTable();
  let data = table.row($tr).data();
  let id = data['id'];
  let id_topic = $(`#editModalNews #topic_option option:selected`).val();
  let tag = $("#editModalNews").find("#update_tag").val();
  let caption = $("#editModalNews").find("#update_caption").val();
  let subtitle = $("#editModalNews").find("#update_subtitle").val();

  $.ajax({
    url: `{{route('news.update')}}`,
    method: "PUT",
    data: {
      id: id,
      id_topic: id_topic,
      tag: tag,
      caption: caption,
      subtitle: subtitle
    },
    success: function(response) {
      if (response.error == false) {

        $("#editModalNews").modal('hide');
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

$("body").delegate("form#form-insert-news", "submit", function(event) {
  event.preventDefault();
  let table = $('#dataTable').DataTable();
  $.ajax({
    url: `{{route('news.insert')}}`,
    method: 'POST',
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    success: function(response) {
      if (response.error == false) {
        $("#insertModalNews").modal('hide');
        alertify.notify('Create successfully', 'success', 3);
        sendNews();
      }
      table.rows.add([{
        "id": "",
        "id_topic": "",
        "id_creator": "",
        "hot_news": "",
        "image": "",
        "tag": "",
        "caption": "",
        "subtitle": "",
        "action": ""
      }]).draw();
    },
    error: function(error) {
      if (error.responseText.error == "Unauthenticated.") {
        location.reload(true);
      }
      alertify.notify('An error occurred', 'error', 3);
    }
  });
});

$("body").delegate("a#insert_news_all", "click", function() {
  $("#insertModalNews_all").modal("show");
});

$("body").delegate("form#form-insert-news_all", "submit", function(event) {
  event.preventDefault();
  let table = $('#dataTable').DataTable();
  $.ajax({
    url: `{{route('news.insert_all')}}`,
    method: 'POST',
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    success: function(response) {
      if (response.error == false) {
        $("#insertModalNews_all").modal('hide');
        alertify.notify('Create successfully', 'success', 3);
      }
      table.rows.add([{
        "id": "",
        "id_topic": "",
        "id_creator": "",
        "hot_news": "",
        "image": "",
        "tag": "",
        "caption": "",
        "subtitle": "",
        "action": ""
      }]).draw();
    },
    error: function(error) {
      if (error.responseText.error == "Unauthenticated.") {
        location.reload(true);
      }
      alertify.notify('An error occurred', 'error', 3);
    }
  });
});

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

$("body").delegate("form#form-image-news", "submit", function(event) {
  event.preventDefault();
  let table = $('#dataTable').DataTable();
  $tr = $(this).closest('tr');
  if ($($tr).hasClass('child')) {
    $tr = $tr.prev('.parent');
  };
  let data = table.row($tr).data();

  $.ajax({
    url: `{{route('news.update_image_news')}}`,
    method: 'POST',
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    success: function(response) {
      if (response.error == false) {
        $("#editImageNews").modal('hide');
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
      // console.log(error.tmp);
    }
  });
});
</script>