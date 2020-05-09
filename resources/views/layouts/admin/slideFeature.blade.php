<script>
let loadSlide = () => {
  var table = $("#dataTable").DataTable();
  table.destroy();
  $("#dataTable").empty();
  $("#dataTable").append(htmlAllSlide);
  $("#dataTable").DataTable({
      processing: true,
      serverSide: true,
      ajax: "{!! route("slide.all") !!}",
      columns: [
        { data: "id", name: "id" },
        { data: "id_topic", name: "id_topic" },
        { data: "id_creator", name: "id_creator" },
        // { data: "image", name: "image" },
        { data: "image", name: "image", render: function(data, type, row) { 
            return `<a data-toggle="modal"><img id="image-slide" src='images/` + data + `' class="img-responsive"></a>`;
          },
          targets: "no-sort", orderable: false, searchable: false
        },
        { data: "heading_primary", name: "heading_primary" },
        { data: "heading_secondary", name: "heading_secondary" },
        {
          data: null,
          targets: "no-sort", orderable: false,
          defaultContent: `<a href="javascript:void(0)" class="edit-modal btn btn-warning btn-lg" id="edit_slide">
                            <i class="glyphicon glyphicon-pencil"></i>
                          </a>
                          <a href="javascript:void(0)" class="delete-modal btn btn-danger btn-lg" id="remove_slide">
                            <i class="glyphicon glyphicon-trash"></i>
                          </a>`
        }
      ]
  });
};
</script>
