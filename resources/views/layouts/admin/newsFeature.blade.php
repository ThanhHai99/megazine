<script>
let loadAllNews = () => {
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlAllNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{!! route("news.all") !!}",
      columns: [
        { data: "id", name: "id" },
        { data: "id_topic", name: "id_topic" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news_yes-all"><i class="fa fa-check-circle" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news_no-all"><i class="fa fa-times-circle" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news_yes-all"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news_no-all"><i class="fas fa-lock" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        { data: "image", name: "image", render: function(data, type, row) { 
            return `<a data-toggle="modal"><img id="image-news" src='images/` + data + `' class="img-responsive"></a>`;
          },
          targets: "no-sort", orderable: false, searchable: false
        },
        { data: "tag", name: "tag" },
        { data: "caption", name: "caption" },
        { data: "subtitle", name: "subtitle" },
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_news">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
};

let loadNewsStyle = () => {
  $('meta[name=type-news]').attr('content', '1');
  $('input[name=id_topic]').attr('value', 1);
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{!! route("news.style") !!}",
      columns: [
        { data: "id", name: "id" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news_yes"><i class="fa fa-check-circle" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news_no"><i class="fa fa-times-circle" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news_no"><i class="fas fa-lock" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        // { data: "image", name: "image" },
        { data: "image", name: "image", render: function(data, type, row) { 
            return `<a data-toggle="modal"><img id="image-news" src='images/` + data + `' class="img-responsive"></a>`;
          },
          targets: "no-sort", orderable: false, searchable: false
        },
        { data: "tag", name: "tag" },
        { data: "caption", name: "caption" },
        { data: "subtitle", name: "subtitle" },
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_news">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
};

let loadNewsFashion = () => {
  $("meta[name=type-news]").attr("content", "2");
  $('input[name=id_topic]').attr('value', 2);
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{!! route("news.fashion") !!}",
      columns: [
        { data: "id", name: "id" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news_yes"><i class="fa fa-check-circle" style="color:green"></i>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news_no"><i class="fa fa-times-circle" style="color:red"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news_no"><i class="fas fa-lock" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        // { data: "image", name: "image" },
        { data: "image", name: "image", render: function(data, type, row) { 
            return `<a data-toggle="modal"><img id="image-news" src='images/` + data + `' class="img-responsive"></a>`;
          },
          targets: "no-sort", orderable: false, searchable: false
        },
        { data: "tag", name: "tag" },
        { data: "caption", name: "caption" },
        { data: "subtitle", name: "subtitle" },
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_news">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
};

let loadNewsTravel = () => {
  $('meta[name=type-news]').attr('content', '3');
  $('input[name=id_topic]').attr('value', 3);
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{!! route("news.travel") !!}",
      columns: [
        { data: "id", name: "id" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news_yes"><i class="fa fa-check-circle" style="color:green"></i>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news_no"><i class="fa fa-times-circle" style="color:red"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news_no"><i class="fas fa-lock" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        // { data: "image", name: "image" },
        { data: "image", name: "image", render: function(data, type, row) { 
            return `<a data-toggle="modal"><img id="image-news" src='images/` + data + `' class="img-responsive"></a>`;
          },
          targets: "no-sort", orderable: false, searchable: false
        },
        { data: "tag", name: "tag" },
        { data: "caption", name: "caption" },
        { data: "subtitle", name: "subtitle" },
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_news">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
};

let loadNewsSports = () => {
  $('meta[name=type-news]').attr('content', '4');
  $('input[name=id_topic]').attr('value', 4);
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{!! route("news.sports") !!}",
      columns: [
        { data: "id", name: "id" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news_yes"><i class="fa fa-check-circle" style="color:green"></i>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news_no"><i class="fa fa-times-circle" style="color:red"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news_no"><i class="fas fa-lock" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        // { data: "image", name: "image" },
        { data: "image", name: "image", render: function(data, type, row) { 
            return `<a data-toggle="modal"><img id="image-news" src='images/` + data + `' class="img-responsive"></a>`;
          },
          targets: "no-sort", orderable: false, searchable: false
        },
        { data: "tag", name: "tag" },
        { data: "caption", name: "caption" },
        { data: "subtitle", name: "subtitle" },
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_news">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
};

let loadNewsVideo = () => {
  $('meta[name=type-news]').attr('content', '5');
  $('input[name=id_topic]').attr('value', 5);
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{!! route("news.video") !!}",
      columns: [
        { data: "id", name: "id" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news_yes"><i class="fa fa-check-circle" style="color:green"></i>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news_no"><i class="fa fa-times-circle" style="color:red"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news_no"><i class="fas fa-lock" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        // { data: "image", name: "image" },
        { data: "image", name: "image", render: function(data, type, row) { 
            return `<a data-toggle="modal"><img id="image-news" src='images/` + data + `' class="img-responsive"></a>`;
          },
          targets: "no-sort", orderable: false, searchable: false
        },
        { data: "tag", name: "tag" },
        { data: "caption", name: "caption" },
        { data: "subtitle", name: "subtitle" },
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_news">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
};

let loadNewsArchives = () => {
  $('meta[name=type-news]').attr('content', '6');
  $('input[name=id_topic]').attr('value', 6);
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{!! route("news.archives") !!}",
      columns: [
        { data: "id", name: "id" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news_yes"><i class="fa fa-check-circle" style="color:green"></i>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news_no"><i class="fa fa-times-circle" style="color:red"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news_no"><i class="fas fa-lock" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        // { data: "image", name: "image" },
        { data: "image", name: "image", render: function(data, type, row) { 
            return `<a data-toggle="modal"><img id="image-news" src='images/` + data + `' class="img-responsive"></a>`;
          },
          targets: "no-sort", orderable: false, searchable: false
        },
        { data: "tag", name: "tag" },
        { data: "caption", name: "caption" },
        { data: "subtitle", name: "subtitle" },
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_news">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
};
</script>

<!-- ==================================================================================================================== -->

<script>

//Start News
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
        alertify.notify('An error occurred', 'error', 3);
      }
    });
    //End click button update hot new yes
  });
  //End click update hot_news (all)

  //Click update status (all)
  //Yes
  $("body").delegate("#status_news_yes-all", "click", function(event) {
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
              $(this).parent("tr").find("td:nth-child(5)").html(`<a href="javascript:void(0)" id="status_news_no-all"><i class="fas fa-lock" style="color: red;"></i></a>`);
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
        alertify.notify('An error occurred', 'error', 3);
      }
    });
    //End click button update hot new yes
  });
  //End click update status
  
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
      let tag = $("#editModalNews").find("#update_tag").val();
      let caption = $("#editModalNews").find("#update_caption").val();
      let subtitle = $("#editModalNews").find("#update_subtitle").val();
      
      $.ajax({
        url: `{{route('news.update')}}`,
        method: "PUT",
        data: {
          id: id,
          tag: tag,
          caption: caption,
          subtitle: subtitle
        },
        success: function(response) {
          if (response.error == false) {
            $("#editModalNews").modal('hide');
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
        // alert("Start call ajax");
        $.ajax({
            url: `{{route('news.update_image')}}`,
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
              if (response.error == false) {
                $("#editImageNews").modal('hide');
                // alertify.notify('Update successfully', 'success', 3);
                // console.log(response.tmp);
              }
              var d = table.row( this ).data();     
              table.row( this ).data( d ).draw();
            },
            error: function(error) {
              alertify.notify('An error occurred', 'error', 3);
              // console.log(error.tmp);
            }
          });
        });
      //End click button create
    });
    // End click change image
  //End click image news
  //End News

</script>