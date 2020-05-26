<script>

//Start Employee

    //Start Edit Employee - All Record
    $("body").delegate("#edit_employee-all", "click", function(){
      let table = $('#dataTable').DataTable();
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      };

      var data = table.row($tr).data();
      console.log(data);
      $("#editModalEmployee-all #id").val(data['id']);
      $(`#editModalEmployee-all #update_role-all option:selected`).removeAttr("selected");
      $(`#editModalEmployee-all #update_role-all option[name=`+ data['id_role'] +`]`).attr('selected', 'selected');
      $("#editModalEmployee-all #update_name-all").val(data['name']);
      $("#editModalEmployee-all #update_email-all").val(data['email']);
      $("#editModalEmployee-all").modal('show');
    });
      //Click button update employee
      $("button.update_employee-all").click(function(event) {
        event.preventDefault();
        let table = $('#dataTable').DataTable();
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        };

        let id = $("#editModalEmployee-all").find("#id").val();
        let id_role = $(`#editModalEmployee-all #update_role-all option:selected`).val();
        alert(id_role);
        let name = $("#editModalEmployee-all").find("#update_name-all").val();
        let email = $("#editModalEmployee-all").find("#update_email-all").val();
        
        $.ajax({
          url: `{{route('employee.update_all')}}`, 
          method: "PUT",
          data: {
            id: id,
            id_role: id_role,
            name: name,
            email: email
          },
          success: function(response) {
            if (response.error == false) {
              $("#editModalEmployee-all").modal('hide');
              alertify.notify('Update successfully', 'success', 3);
            }
            var d = table.row( this ).data();     
            table.row( this ).data( d ).draw();
          },
          error: function(error) {
            if (error.responseText.error == "Unauthenticated.") {
              location.reload(true);
            }
            alertify.notify('An error occurred', 'error', 3);
          }
        });
      });
      //End click button update employee
    //End Edit Employee -All Record



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
            if (error.responseText.error == "Unauthenticated.") {
              location.reload(true);
            }
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
        if (error.responseText.error == "Unauthenticated.") {
          location.reload(true);
        }
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
        if (error.responseText.error == "Unauthenticated.") {
          location.reload(true);
        }
        alertify.notify('An error occurred', 'error', 3);
      }
    });
    //End click button update hot new yes
  });
  //End click update status
  // End Employee

</script>