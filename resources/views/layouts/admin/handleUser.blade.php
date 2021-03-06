<script>
//open modal edit employee
$("body").delegate("#edit_employee", "click", function() {
  let table = $('#dataTable').DataTable();
  $tr = $(this).closest('tr');
  if ($($tr).hasClass('child')) {
    $tr = $tr.prev('.parent');
  };

  let data = table.row($tr).data();
  $("#editModalEmployee input[name=employee_id]").val(data['id']);
  $(`#editModalEmployee select[name=employee_id_role] option`).each(function() {
    $(this).removeAttr("selected");
  });

  if ( data['id_role'] == "admin" || data['id_role'] == 0 ) {
    $("div#employee_role").hide();

  } else {
    $("div#employee_role").show();
    if ($("div[data=employee] a.active").hasClass("all")) {
      $(`#editModalEmployee select[name=employee_id_role] option[name='` + data['id_role'] + `']`).attr('selected','selected');
    } else {
      let role = $("div[data=employee] a.active").attr("data");
      $(`#editModalEmployee select[name=employee_id_role] option[name='` + role + `']`).attr('selected','selected');
    }
  }
  
  $("#editModalEmployee input[name=employee_name]").val(data['name']);
  $("#editModalEmployee input[name=employee_email]").val(data['email']);
  $("#editModalEmployee").modal('show');
});

$("body").delegate("button.update_employee", "click", function(event) {
  event.preventDefault();
  let table = $('#dataTable').DataTable();
  $tr = $(this).closest('tr');
  if ($($tr).hasClass('child')) {
    $tr = $tr.prev('.parent');
  };

  let employee_id = $("#editModalEmployee input[name=employee_id]").val();
  let employee_id_role = $("#editModalEmployee select[name=employee_id_role] option:selected").val();
  

  let employee_name = $("#editModalEmployee input[name=employee_name]").val();
  let employee_email = $("#editModalEmployee input[name=employee_email]").val();
  $.ajax({
    url: `{{route('employee.update')}}`,
    method: "PUT",
    data: {
      employee_id: employee_id,
      employee_id_role: employee_id_role,
      employee_name: employee_name,
      employee_email: employee_email
    },
    success: function(response) {
      if (response.error == false) {
        $("#editModalEmployee").modal('hide');
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
          if ( !($("div.dataTables_paginate a.previous").hasClass("disabled")) || !($("div.dataTables_paginate a.next").hasClass("disabled")) ) {
            $("div.dataTables_paginate a.next").click();
            $("div.dataTables_paginate a.previous").click();
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

$("body").delegate("#remove_employee", "click", function() {
  let table = $('#dataTable').DataTable();
  $tr = $(this).closest('tr');
  if ($($tr).hasClass('child')) {
    $tr = $tr.prev('.parent');
  };

  let data = table.row($tr).data();
  let id = data['id'];
  if (data["id_role"] == "admin") {
    alertify.error("This is super user");
    return false;
  }


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
      let table = $('#dataTable').DataTable();
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      };

      let data = table.row($tr).data();
      let id = data['id'];
      $.ajax({
        url: `{{route('employee.remove')}}`,
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
              if ( !($("div.dataTables_paginate a.previous").hasClass("disabled")) || !($("div.dataTables_paginate a.next").hasClass("disabled")) ) {
                $("div.dataTables_paginate a.next").click();
                $("div.dataTables_paginate a.previous").click();
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

$("body").delegate("#status_employee", "click", function(event) {
  //Click button update hot new yes
  event.preventDefault();
  let table = $('#dataTable').DataTable();
  $tr = $(this).closest('tr');
  if ($($tr).hasClass('child')) {
    $tr = $tr.prev('.parent');
  };
  let data = table.row($tr).data();
  let id = data['id'];
  let id_status = data['id_status'];
  $('meta[name=row-index]').attr('content', id);
  $.ajax({
    url: `{{route('employee.updateEmployeeStatus')}}`,
    method: "PUT",
    data: {
      id: id,
      id_status: id_status
    },
    success: function(response) {
      if (response.error == false) {        
        if( $("div.dataTables_paginate a.paginate_button:last-child").html() == 1) {
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
          if ( !($("div.dataTables_paginate a.previous").hasClass("disabled")) || !($("div.dataTables_paginate a.next").hasClass("disabled")) ) {
            $("div.dataTables_paginate a.next").click();
            $("div.dataTables_paginate a.previous").click();
          }
        }
      }
    },
    error: function(error) {
      if (error.responseJSON.admin == true) {
        alertify.notify('This is super user', 'error', 3);
        return;
      }

      if (error.responseText.error == "Unauthenticated.") {
        location.reload(true);
      }
      alertify.notify('An error occurred', 'error', 3);

    }
  });
});

</script>