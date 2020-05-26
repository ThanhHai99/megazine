<script>
  
  let sendNews = () => {
    // alert('sending');
    $.ajax({
      url: `{{route('news.send')}}`,
      method: 'POST',
      data: {  },
      contentType: false,
      cache: false,
      processData: false,
      success: function(response) {
        
      },
      error: function(error) {
        
      }
    });
  }
  
  //Click update hot_news
  //Yes
  $("body").delegate("#hot_news_yes", "click", function(event) {
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
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(3)").html(`<a href="javascript:void(0)" id="hot_news_no"><i class="fa fa-times-circle" style="color: red;"></i></a>`);
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
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(3)").html(`<a href="javascript:void(0)" id="hot_news_yes"><a href="javascript:void(0)" id="hot_news_yes"><i class="fa fa-check-circle" style="color:green;"></i></a>`);
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
  //End click update hot_news

  //Click update hot_news (all)
  //Yes
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
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(4)").html(`<a href="javascript:void(0)" id="hot_news_no-all"><i class="fa fa-times-circle" style="color: red;"></i></a>`);
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
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(4)").html(`<a href="javascript:void(0)" id="hot_news_yes-all"><i class="fa fa-check-circle" style="color:green;"></i></a>`);
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
  //End click update hot_news (all)

  //Click update status (all)
  //Yes
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
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(5)").html(`<a href="javascript:void(0)" id="status_news_no-all"><i class="fas fa-lock" style="color: red;"></i></a>`);
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
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(5)").html(`<a href="javascript:void(0)" id="status_news_yes-all"><i class="fas fa-lock-open" style="color:green;"></i></a>`);
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
  //End click update status (all)

  //Click update status
  //Yes
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
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(4)").html(`<a href="javascript:void(0)" id="status_news_no"><i class="fas fa-lock" style="color: red;"></i></a>`);
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
        if(response.error == false) {
          $('tbody > tr > td:first-child').each(function() {
            if ($(this).html() == $('meta[name=row-index]').attr('content')) {
              $(this).parent("tr").find("td:nth-child(4)").html(`<a href="javascript:void(0)" id="status_news_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>`);
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
  //End click update status

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
              $(this).parent("tr").find("td:nth-child(3)").html(`<a href="javascript:void(0)" id="hot_video_no"><i class="fa fa-times-circle" style="color: red;"></i></a>`);
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
              $(this).parent("tr").find("td:nth-child(3)").html(`<a href="javascript:void(0)" id="hot_video_yes"><i class="fa fa-check-circle" style="color:green;"></i></a>`);
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
              $(this).parent("tr").find("td:nth-child(4)").html(`<a href="javascript:void(0)" id="status_video_no"><i class="fas fa-lock" style="color: red;"></i></a>`);
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
              $(this).parent("tr").find("td:nth-child(4)").html(`<a href="javascript:void(0)" id="status_video_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>`);
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
  

  
  //Start Edit News Record
  $("body").delegate("#edit_news", "click", function(){
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
    $("#editModalNews").modal('show');
  });
    //Click button update News
    $("button.update_news").click(function(event) {
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

            $('tbody > tr > td:first-child').each(function() {
              console.log($(this).html());
              if ($(this).html() == response.id) {
                if ($(this).parent("tr").find("td:nth-child(5) > a > img").hasClass("img-responsive")) {
                  $(this).parent("tr").find("td:nth-child(6)").html(response.tag);
                  $(this).parent("tr").find("td:nth-child(7)").html(response.caption);
                  $(this).parent("tr").find("td:nth-child(8)").html(response.subtitle);
                }
                if ($(this).parent("tr").find("td:nth-child(6) > a > img").hasClass("img-responsive")) {
                  $(this).parent("tr").find("td:nth-child(7)").html(response.tag);
                  $(this).parent("tr").find("td:nth-child(8)").html(response.caption);
                  $(this).parent("tr").find("td:nth-child(9)").html(response.subtitle);
                }
                
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
    //End click button update News
  //End Edit News Record

  //Start Insert News Record
  $("body").delegate("a#insert_news", "click", function() {
    $("#insertModalNews").modal('show');
    // $('input[name=id_creator]').attr('value', 0);
  });
    //Start click button create
    $("form#form-insert-news").on("submit", function(event) {
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
          table.rows.add( [{
            "id" : "",
            "id_topic" : "",
            "id_creator" : "",
            "hot_news" : "",
            "image" : "",
            "tag" : "",
            "caption" : "",
            "subtitle" : "",
            "action": ""
          }] ).draw();
        },
        error: function(error) {
          if (error.responseText.error == "Unauthenticated.") {
            location.reload(true);
          }
          alertify.notify('An error occurred', 'error', 3);
        }
      });
    });
    //End click button create
  //End Insert News Record

  //Start Insert News (All) Record
  $("body").delegate("a#insert_news_all", "click", function() {
    $("#insertModalNews_all").modal("show");
    // $("#form-insert-news_all").find("input[name=id_creator]").attr("value", 0);
    $("form#form-insert-news_all").find("input[name=id_topic]").attr("value", $("select#topic_option").children("option:selected").val());
  });
    //Start click button create
    $("form#form-insert-news_all").on("submit", function(event) {
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
          table.rows.add( [{
            "id" : "",
            "id_topic" : "",
            "id_creator" : "",
            "hot_news" : "",
            "image" : "",
            "tag" : "",
            "caption" : "",
            "subtitle" : "",
            "action": ""
          }] ).draw();
        },
        error: function(error) {
          if (error.responseText.error == "Unauthenticated.") {
            location.reload(true);
          }
          alertify.notify('An error occurred', 'error', 3);
        }
      });
    });
    //End click button create
  //End Insert News (All) Record

  //Click remove news button
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
              table.row( $(this).parents('tr') ).remove().draw();
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
  //End click remove news button

  //Start click image news
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
    // Start click change image
    $("form#form-image-news").delegate("button#update_image_news", "click", function() {
      //Start click button create
      
      $("form#form-image-news").on("submit", function(event) {
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
                // alertify.notify('Update successfully', 'success', 3);

                $('tbody > tr > td:first-child').each(function() {
                  if ($(this).html() == response.id) {
                    if ($(this).parent("tr").find("td:nth-child(5) > a > img").hasClass("img-responsive")) {
                      $(this).parent("tr").find("td:nth-child(5)").html(`<a data-toggle="modal"><img id="image-news" src="images/`+ response.image +`" class="img-responsive"></a>`);
                    } else if ($(this).parent("tr").find("td:nth-child(6) > a > img").hasClass("img-responsive")) {
                      $(this).parent("tr").find("td:nth-child(6)").html(`<a data-toggle="modal"><img id="image-news" src="images/`+ response.image +`" class="img-responsive"></a>`);
                    }

                  }
                });

              }
              // var d = table.row( this ).data();     
              // table.row( this ).data( d ).draw();
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
      //End click button create
    });
    // End click change image
  //End click image news

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
    $("form#form-image-video").delegate("button#update_image_video", "click", function() {
      //Start click button create
      
      $("form#form-image-video").on("submit", function(event) {
        event.preventDefault();
        let table = $('#dataTable').DataTable();
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        };
        let data = table.row($tr).data();
        // alert("Start call ajax");
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
                // alertify.notify('Update successfully', 'success', 3);
                $('tbody > tr > td:first-child').each(function() {
                  if ($(this).html() == response.id) {
                    $(this).parent("tr").find("td:nth-child(6)").html(`<a data-toggle="modal"><img id="image-news" src="images/`+ response.image +`" class="img-responsive"></a>`);
                  }
                });
                // console.log(response.tmp);
              }
              // var d = table.row( this ).data();     
              // table.row( this ).data( d ).draw();
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
      //End click button create
    });
    // End click change image video
  //End click image video
</script>

