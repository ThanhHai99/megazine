<script>

let loadNewsAll_onLoad = () => {
  $("#dataTable").append(htmlAllNews);
  // $("a[click=index]").click();
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{!! route("news.all") !!}",
        error: function(error) {
          location.reload(true);
        }
      },  
      columns: [
        { data: "id", name: "id" },
        { data: "id_topic", name: "id_topic" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-check-circle" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-times-circle" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock" style="color: red;"></i></a>';
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


let loadAllNews = () => {
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlAllNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{!! route("news.all") !!}",
        error: function(error) {
          location.reload(true);
        }
      },      
      columns: [
        { data: "id", name: "id" },
        { data: "id_topic", name: "id_topic" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-check-circle" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-times-circle" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock" style="color: red;"></i></a>';
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
  $('input[name=id_topic]').attr('value', 1);
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{!! route("news.style") !!}",
        error: function(error) {
          location.reload(true);
        }
      },
      columns: [
        { data: "id", name: "id" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-check-circle" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-times-circle" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock" style="color: red;"></i></a>';
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
  $('input[name=id_topic]').attr('value', 2);
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{!! route("news.fashion") !!}",
        error: function(error) {
          location.reload(true);
        }
      },
      columns: [
        { data: "id", name: "id" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-check-circle" style="color:green"></i>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-times-circle" style="color:red"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock" style="color: red;"></i></a>';
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
  $('input[name=id_topic]').attr('value', 3);
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{!! route("news.travel") !!}",
        error: function(error) {
          location.reload(true);
        }
      },
      columns: [
        { data: "id", name: "id" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-check-circle" style="color:green"></i>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-times-circle" style="color:red"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock" style="color: red;"></i></a>';
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
  $('input[name=id_topic]').attr('value', 4);
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: {
        url: "{!! route("news.sports") !!}",
        error: function(error) {
          location.reload(true);
        }
      },
      columns: [
        { data: "id", name: "id" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-check-circle" style="color:green"></i>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_news"><i class="fa fa-times-circle" style="color:red"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_news"><i class="fas fa-lock" style="color: red;"></i></a>';
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


</script>
