$("input#image_news").change(function() {
  if ($("button#update_image_news").length == false) {
    $("div#image-modal-foot").append(`<button id="update_image_news" type="button" class="btn btn-outline-success btn-rounded btn-md ml-4">Update</button>`);
  }
});

function previewImage(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();    
    reader.onload = function(e) {
      $('img#show-image-news').attr('src', e.target.result);
    }    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#image_news").change(function() {
  previewImage(this);
});