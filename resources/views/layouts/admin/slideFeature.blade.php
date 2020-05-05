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

<!-- ==================================================================================================================== -->

<script>

//Start Slide
  //Start Edit Slide Record
  $("body").delegate("#edit_slide", "click", function(){
    let table = $('#dataTable').DataTable();
    $tr = $(this).closest('tr');
    if ($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    };

    let data = table.row($tr).data();
    $("#editModalSlide").find("#update_heading_primary").val(data['heading_primary']);
    $("#editModalSlide").find("#update_heading_secondary").val(data['heading_secondary']);
    $("#editModalSlide").modal('show');
  });
    //Click button update Slide
    $("button.update_slide").click(function(event) {
      event.preventDefault();
      let table = $('#dataTable').DataTable();
      let data = table.row($tr).data();
      let id = data['id'];
      let caption = $("#editModalSlide").find("#update_caption").val();
      let subtitle = $("#editModalSlide").find("#update_subtitle").val();
      
      $.ajax({
        url: `{{route('slide.update')}}`,
        method: "PUT",
        data: {
          id: id,
          caption: caption,
          subtitle: subtitle
        },
        success: function(response) {
          if (response.error == false) {
            $("#editModalSlide").modal('hide');
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
    //End click button update Slide
  //End Edit Slide Record

  //Start click image slide
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
    // Start click change image
    $("form#form-image-slide").delegate("button#update_image_slide", "click", function() {
      //Start click button create
      
      $("form#form-image-slide").on("submit", function(event) {
        event.preventDefault();
        let table = $('#dataTable').DataTable();
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        };
        let data = table.row($tr).data();
        // alert("Start call ajax");
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
                // alertify.notify('Update successfully', 'success', 3);
              }
              var d = table.row( this ).data();     
              table.row( this ).data( d ).draw();
            },
            error: function(error) {
              alertify.notify('An error occurred', 'error', 3);
            }
          });
        });
      //End click button create
    });
    // End click change image
  //End click image slide

  //End Slide

</script>