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
  $("#dataTable").append(htmlAllNews);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{!! route("news.video") !!}",
      columns: [
        { data: "id", name: "id" },
        { data: "id_topic", name: "id_topic" },
        { data: "id_creator", name: "id_creator" },
        { data: "hot_news", name: "hot_news", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="hot_video_yes"><i class="fa fa-check-circle" style="color:green"></i>';
            }
            else {
              return '<a href="javascript:void(0)" id="hot_video_no"><i class="fa fa-times-circle" style="color:red"></i></a>';
            }
          },
          searchable: false
        },
        { data: "id_status", name: "id_status", render: function(data, type, row) { 
            if (data == 1) {
              return '<a href="javascript:void(0)" id="status_video_yes"><i class="fas fa-lock-open" style="color:green;"></i></a>';
            }
            else {
              return '<a href="javascript:void(0)" id="status_video_no"><i class="fas fa-lock" style="color: red;"></i></a>';
            }
          },
          searchable: false
        },
        // { data: "image", name: "image" },
        { data: "image", name: "image", render: function(data, type, row) { 
            return `<a data-toggle="modal"><img id="image-video" src='images/` + data + `' class="img-responsive"></a>`;
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
