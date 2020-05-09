<script>

//Start Employee
    //Start Edit Employee Record
    $("body").delegate("#edit_employee", "click", function(){
      let table = $('#dataTable').DataTable();
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      };

      var data = table.row($tr).data();
      // console.log(data);
      $("#editModalEmployee").find("#id").val(data['id']);
      $("#editModalEmployee").find("#update_name").val(data['name']);
      $("#editModalEmployee").find("#update_email").val(data['email']);
      $("#editModalEmployee").modal('show');
    });
      //Click button update employee
      $("button.update_employee").click(function(event) {
        event.preventDefault();
        let table = $('#dataTable').DataTable();
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        };

        let id = $("#editModalEmployee").find("#id").val();
        let name = $("#editModalEmployee").find("#update_name").val();
        let email = $("#editModalEmployee").find("#update_email").val();
        
        $.ajax({
          url: `{{route('employee.update')}}`,
          method: "PUT",
          data: {
            id: id,
            name: name,
            email: email
          },
          success: function(response) {
            if (response.error == false) {
              $("#editModalEmployee").modal('hide');
              alertify.notify('Update successfully', 'success', 3);
            }
            var d = table.row( this ).data();     
            table.row( this ).data( d ).draw();
          },
          error: function(error) {
            alertify.notify('An error occurred', 'error', 3);
          }
        });
      });
      //End click button update employee
    //End Edit Employee Record

    //Click remove employee button
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
                table.row( $(this).parents('tr') ).remove().draw();
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
    //End click remove employee button

  //Click update status (all)
  //Yes
  $("body").delegate("#status_employee_yes-all", "click", function(event) {
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
              $(this).parent("tr").find("td:nth-child(3)").html(`<a href="javascript:void(0)" id="status_employee_no-all"><i class="fas fa-lock" style="color: red;"></i></a>`);
            }
          });
        }
      },
      error: function(error) {
        alertify.notify('An error occurred', 'error', 3);
      }
    });
    //End click button update hot new yes
  });
  //No
  $("body").delegate("#status_employee_no-all", "click", function(event) {
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
              $(this).parent("tr").find("td:nth-child(3)").html(`<a href="javascript:void(0)" id="status_employee_yes-all"><i class="fas fa-lock-open" style="color:green;"></i></a>`);
            }
          });
        }
      },
      error: function(error) {
        alertify.notify('An error occurred', 'error', 3);
      }
    });
    //End click button update hot new yes
  });
  //End click update status (all)

  //Click update status
  //Yes
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
        alertify.notify('An error occurred', 'error', 3);
      }
    });
    //End click button update hot new yes
  });
  //No
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
        alertify.notify('An error occurred', 'error', 3);
      }
    });
    //End click button update hot new yes
  });
  //End click update status
  // End Employee

</script>