<script>
//open modal edit employee
$("body").delegate("#edit_employee", "click", function(){
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
  $(`#editModalEmployee select[name=employee_id_role] option[name='`+ data['id_role'] +`']`).attr('selected', 'selected');
  $("#editModalEmployee input[name=employee_name]").val(data['name']);
  $("#editModalEmployee input[name=employee_email]").val(data['email']);
  $("#editModalEmployee").modal('show');
});


$("button.update_employee").click(function(event) {
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
        $("#dataTable tbody td:nth-child(1)").each(function() {
          if($(this).html() == response.employee_id ) {
            let temp = $('#dataTable').DataTable().row($(this)).data();
            temp.name = response.employee_name;
            temp.email = response.employee_email;
            temp.id_role = $(`#editModalEmployee select option[value='`+ response.employee_id_role + `']`).attr("name");
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




$("body").delegate("#remove_employee", "click", function(){
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
            // table.row( $(this).parents('tr') ).remove().draw();
            table.draw();
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

$("body").delegate("#status_employee_yes-all", "click", function(event) {
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
    url: `{{route('employee.updateEmployeeStatusNo')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if(response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(3)").html(`<a href="javascript:void(0)" id="status_employee_no-all"><i class="fas fa-lock" style="color: red;"></i></a>`);
          }
        });
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


$("body").delegate("#status_employee_no-all", "click", function(event) {
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
    url: `{{route('employee.updateEmployeeStatusYes')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if(response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(3)").html(`<a href="javascript:void(0)" id="status_employee_yes-all"><i class="fas fa-lock-open" style="color:green;"></i></a>`);
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


$("body").delegate("#status_employee_yes", "click", function(event) {
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
    url: `{{route('employee.updateEmployeeStatusNo')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if(response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(2)").html(`<a href="javascript:void(0)" id="status_employee_no"><i class="fas fa-lock" style="color: red;"></i></a>`);
          }
        });
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


$("body").delegate("#status_employee_no", "click", function(event) {
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
    url: `{{route('employee.updateEmployeeStatusYes')}}`,
    method: "PUT",
    data: {
      id: id
    },
    success: function(response) {
      if(response.error == false) {
        $('tbody > tr > td:first-child').each(function() {
          if ($(this).html() == $('meta[name=row-index]').attr('content')) {
            $(this).parent("tr").find("td:nth-child(2)").html(`<a href="javascript:void(0)" id="status_employee_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>`);
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
</script>