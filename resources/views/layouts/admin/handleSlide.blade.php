<script>
// open modal edit slide
$("body").delegate("#edit_slide", "click", function() {
  let table = $('#dataTable').DataTable();
  $tr = $(this).closest('tr');
  if ($($tr).hasClass('child')) {
    $tr = $tr.prev('.parent');
  };

  let data = table.row($tr).data();
  $("#editModalSlide textarea[name=tag]").val(data['tag']);
  $("#editModalSlide textarea[name=heading_primary]").val(data['heading_primary']);
  $("#editModalSlide textarea[name=heading_secondary]").val(data['heading_secondary']);
  $("#editModalSlide").modal('show');
});

// open modal image slide
$("body").delegate("img#image-slide", "click", function() {
  let table = $('#dataTable').DataTable();
  $tr = $(this).closest('tr');
  if ($($tr).hasClass('child')) {
    $tr = $tr.prev('.parent');
  };

  let data = table.row($tr).data();
  $("input[name=id_slide_hide]").attr('value', data['id']);
  $("img#show-image-slide").attr("src", '');
  let linkImage = 'images/' + data['image'];
  $("img#show-image-slide").attr("src", linkImage);
  $("button#update_image_slide").remove();
  $("#editImageSlide").modal('show');
});

// open modal add slide
$("body").delegate("a#insert_slide", "click", function() {
  $("#insertModalSlide").modal("show");
});

// Solving update slide
$("button.update_slide").click(function(event) {
  event.preventDefault();
  let table = $('#dataTable').DataTable();
  let data = table.row($tr).data();
  let id = data['id'];
  let tag = $("#editModalSlide textarea[name=tag]").val();
  let heading_primary = $("#editModalSlide textarea[name=heading_primary]").val();
  let heading_secondary = $("#editModalSlide textarea[name=heading_secondary]").val();

  $.ajax({
    url: `{{route('slide.update')}}`,
    method: "POST",
    data: {
      id: id,
      tag: tag,
      heading_primary: heading_primary,
      heading_secondary: heading_secondary
    },
    success: function(response) {
      if (response.error == false) {
        $("#editModalSlide").modal('hide');
        alertify.notify('Update successfully', 'success', 3);
      }
      $("#dataTable tbody td:nth-child(1)").each(function() {
        if ($(this).html() == response.id) {
          let temp = $('#dataTable').DataTable().row($("#dataTable tbody tr td:nth-child(1)")).data();
          temp.heading_primary = response.heading_primary;
          temp.heading_secondary = response.heading_secondary;
          $('#dataTable').DataTable().row($(this).parent("tr")).data(temp);
          return false;
        }
      });
    },
    error: function(error) {
      if (error.responseText.error == "Unauthenticated.") {
        location.reload(true);
      }
      alertify.notify('An error occurred', 'error', 3);
    }
  });
});

// solving update image slide
$("body").delegate("form#form-image-slide", "submit", function(event) {
  event.preventDefault();
  let table = $('#dataTable').DataTable();
  $tr = $(this).closest('tr');
  if ($($tr).hasClass('child')) {
    $tr = $tr.prev('.parent');
  };
  let data = table.row($tr).data();
  $.ajax({
    url: `{{route('slide.update_image')}}`,
    method: 'POST',
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    success: function(response) {
      if (response.error == false) {
        $("#editImageSlide").modal('hide');
        alertify.notify('Update successfully', 'success', 3);
      }
      $("#dataTable tbody td:nth-child(1)").each(function() {
        if ($(this).html() == response.id) {
          let temp = $('#dataTable').DataTable().row($("#dataTable tbody tr td:nth-child(1)")).data();
          temp.image = response.image;
          $('#dataTable').DataTable().row($(this).parent("tr")).data(temp);
          return false;
        }
      });
    },
    error: function(error) {
      if (error.responseText.error == "Unauthenticated.") {
        location.reload(true);
      }
      alertify.notify('An error occurred', 'error', 3);
    }
  });
});

// solving remove image slide
$("body").delegate("#remove_slide", "click", function(event) {
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
        url: `{{route('slide.remove')}}`,
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
            $("#dataTable tbody td:nth-child(1)").each(function() {
              if ($(this).html() == response.id) {
                $(this).parent("tr").remove();
                return false;
              }
            });
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

// Solving insert a slide
$("form#form_insert_slide").on("submit", function(event) {
  event.preventDefault();
  let table = $('#dataTable').DataTable();
  $.ajax({
    url: `{{route('slide.insert')}}`,
    method: 'POST',
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    success: function(response) {
      if (response.error == false) {
        $("#insertModalSlide").modal('hide');
        alertify.notify('Create successfully', 'success', 3);
      }
      if( $("div.dataTables_paginate span a").length == 1) {
        // if( $("div[data=slide] a").hasClass("active") ) {
        //   $("div[data=slide] a.active").click();
        // }
        $("a.nav-link[id=slide]").click();
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
</script>