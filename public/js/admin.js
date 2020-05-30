$("input#image_news").change(function() {
  if ($("button#update_image_news").length == false) {
    $("div#news-image-modal-foot").append(`<button id="update_image_news" type="submit" class="btn btn-outline-success btn-rounded btn-md ml-4">Update</button>`);
  }
});

function previewImageNews(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();    
    reader.onload = function(e) {
      $('img#show-image-news').attr('src', e.target.result);
    }    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#image_news").change(function() {
  previewImageNews(this);
});

$("input#image_video").change(function() {
  if ($("button#update_image_video").length == false) {
    $("div#video-image-modal-foot").append(`<button id="update_image_video" type="submit" class="btn btn-outline-success btn-rounded btn-md ml-4">Update</button>`);
  }
});

$("input#video_video").change(function() {
  if ($("button#update_video_video").length == false) {
    $("div#video-modal-foot").append(`<button id="update_video_video" type="submit" class="btn btn-outline-success btn-rounded btn-md ml-4">Update</button>`);
  }
});

function previewImageVideo(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();    
    reader.onload = function(e) {
      $('img#show-image-video').attr('src', e.target.result);
    }    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

function previewVideoVideo(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();    
    reader.onload = function(e) {
      $('img#show-video').attr('src', e.target.result);
    }    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#image_video").change(function() {
  previewImageVideo(this);
});

$("#video_video").change(function() {
  previewVideoVideo(this);
});




$("input#image_slide").change(function() {
  if ($("button#update_image_slide").length == false) {
    $("div#slide-image-modal-foot").append(`<button id="update_image_slide" type="submit" class="btn btn-outline-success btn-rounded btn-md ml-4">Update</button>`);
  }
});

function previewImageSlide(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();    
    reader.onload = function(e) {
      $('img#show-image-slide').attr('src', e.target.result);
    }    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#image_slide").change(function() {
  previewImageSlide(this);
});

// let ok = () => {
  
  // $('#dataTable tbody').on( 'click', 'tr', function () {
      // console.log( $('#dataTable').DataTable().row( this ).data() );
  // } );
// };

$( function() {
  // ok();
});