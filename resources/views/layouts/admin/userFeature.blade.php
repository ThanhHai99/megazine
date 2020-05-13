<script>

let loadEmployeeAll_onLoad = () => {
  $("#dataTable").append(htmlEmployeeAll);
  // $("a[click=index]").click();
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{!! route("employee.all") !!}",
        error: function(error) {
          location.reload(true);
        }
      },  
      columns: [
        { data: "id", name: "id" },
        { data: "id_role", name: "id_role" },
        { data: "id_status", name: "id_status" },
        { data: "name", name: "name" },
        { data: "email", name: "email" },
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_employee">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_employee">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
};

let loadEmployeeAll = () => {
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlEmployeeAll);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{!! route("employee.all") !!}",
        error: function(error) {
          location.reload(true);
        }
      },  
      columns: [
        { data: "id", name: "id" },
        { data: "id_role", name: "id_role" },
        // { data: "id_status", name: "id_status" },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_employee_yes-all"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_employee_no-all"><i class="fas fa-lock" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        { data: "name", name: "name" },
        { data: "email", name: "email"},
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_employee">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_employee">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
};

let loadEmployeeStaff = () => {
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlEmployee);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{!! route("employee.staff") !!}",
        error: function(error) {
          location.reload(true);
        }
      },  
      columns: [
        { data: "id", name: "id" },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_employee_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_employee_no"><i class="fas fa-lock" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        { data: "name", name: "name" },
        { data: "email", name: "email"},
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_employee">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_employee">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
};

let loadEmployeeNormalUser = () => {
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlEmployee);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{!! route("employee.normal_user") !!}",
        error: function(error) {
          location.reload(true);
        }
      },  
      columns: [
        { data: "id", name: "id" },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_employee_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_employee_no"><i class="fas fa-lock" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        { data: "name", name: "name" },
        { data: "email", name: "email" },
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_employee">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_employee">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
  $("#dataTable").DataTable();
};

</script>
