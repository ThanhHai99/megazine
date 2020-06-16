$("input#image_news").change(function() {
  if ($("button#update_image_news").length == false) {
    $("div#news-image-modal-foot").append(`<button id="update_image_news" type="submit" class="btn btn-outline-success btn-rounded btn-md ml-4">Update</button>`);
  }
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

$("input#image_slide").change(function() {
  if ($("button#update_image_slide").length == false) {
    $("div#slide-image-modal-foot").append(`<button id="update_image_slide" type="submit" class="btn btn-outline-success btn-rounded btn-md ml-4">Update</button>`);
  }
});

function previewImage(input, className) {
  if (input.files && input.files[0]) {
    if ( !(input.files[0].name.match(/\.(jpg|jpeg|png|gif)$/)) ) {
      alertify.error('You must select file image');
      return false;
    }
    var reader = new FileReader();    
    reader.onload = function(e) {
      $(className).attr('src', e.target.result);
    }    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

function previewVideo(input, className) {
  if (input.files && input.files[0]) {
    if ( !(input.files[0].name.match(/\.(mp4|m4v)$/)) ) {
      alertify.error('You must select file video');
      return false;
    }
    var reader = new FileReader();    
    reader.onload = function(e) {
      $(className).attr('src', e.target.result);
    }    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#image_news").change(function() {
  previewImage(this, 'img#show-image-news');
});

$("#image_video").change(function() {
  previewImage(this, 'img#show-image-video');
});

$("input[name=news_image]").change(function() {
  previewImage(this, 'img#preview_news_image');
});

$("input[name=video_image]").change(function() {
  previewImage(this, 'img#preview_video_image');
});

$("input#video_video_preview").change(function() {
  previewVideo(this, 'video#preview_video_video');
});

$("#video_video").change(function() {
  previewVideo(this, 'video#show-video');
});

$("#image_slide").change(function() {
  previewImage(this, 'img#show-image-slide');
});

$("input#insert_image_slide").change(function() {
  previewImage(this, 'img#preview_slide_image');
});