<script>
// Start click load more
$("body").delegate("button#loadMoreStyle", "click", function() {
  let _token = $('input[name="_token"]').val();
  let totalItem = $(".item-style").length;
  loadMoreStyle(totalItem, _token);

  function loadMoreStyle(totalItem="", _token) {
    $.ajax({
      url:"{{ route('style.more') }}",
      method:"GET",
      data:{ totalItem: totalItem, _token:_token },
      success:function(data) {
        if (data != "") {
          $('div#div-load-more-style').remove();    
          if (!($('div.container-wrap > div').hasClass("append-more"))) {
            $('div.container-wrap').append(`<div class="row row-bottom-padded-md append-more"> </div>`);
          }
          $('div.append-more').append(data);
          $('div.container-wrap').append(`
            <div class="row text-center" id="div-load-more-style">
              <div class="col-xs-3 center-block">
                <button type="button" class="btn btn-info btn-outline" id="loadMoreStyle">Load more</button>
              </div>
            </div>`
          );
        } else {
          $('div#div-load-more-style').remove();
          alertify.success("End of page");
        }
      },
      error:function(error) {
        alert('error');
      }
    });
  };

});

$("body").delegate("button#loadMoreFashion", "click", function() {
  let _token = $('input[name="_token"]').val();
  let totalItem = $(".item-fashion").length + ($(".slide-fashion").length)/2;
  loadMoreFashion(totalItem, _token);

  function loadMoreFashion(totalItem="", _token) {
    $.ajax({
      url:"{{ route('fashion.more') }}",
      method:"GET",
      data:{ totalItem: totalItem, _token:_token },
      success:function(data) {
        if (data != "") {
          $('div#div-load-more-fashion').remove();    
          $('div.content-wrap').append(data);
          $('div.content-wrap').append(`
            <div class="row text-center" id="div-load-more-fashion">
              <div class="col-xs-3 center-block">
                <button type="button" class="btn btn-info btn-outline" id="loadMoreFashion">Load more</button>
              </div>
            </div>`
          );
        } else {
          $('div#div-load-more-fashion').remove();    
          alertify.success("End of page");
        }
      },
      error:function(error) {
        alert('error');
      }
    });
  };

});

$("body").delegate("button#loadMoreTravel", "click", function() {
  let _token = $('input[name="_token"]').val();
  let totalItem = $(".item-travel").length;
  loadMoreTravel(totalItem, _token);

  function loadMoreTravel(totalItem="", _token) {
    $.ajax({
      url:"{{ route('travel.more') }}",
      method:"GET",
      data:{ totalItem: totalItem, _token:_token },
      success:function(data) {
        if (data != "") {
          $('div#div-load-more-travel').remove(); 
          $('div.content-wrap').append(data);
          $('div.content-wrap').append(`
            <div class="row text-center" id="div-load-more-travel">
              <div class="col-xs-3 center-block">
                <button type="button" class="btn btn-info btn-outline" id="loadMoreTravel">Load more</button>
              </div>
            </div>`
          );
        } else {
          $('div#div-load-more-travel').remove();     
          alertify.success("End of page");
        }
      },
      error:function(error) {
        alert('error');
      }
    });
  };

});

$("body").delegate("button#loadMoreSports", "click", function() {
  let _token = $('input[name="_token"]').val();
  let totalItem = $(".item-sports").length;
  loadMoreSports(totalItem, _token);

  function loadMoreSports(totalItem="", _token) {
    $.ajax({
      url:"{{ route('sports.more') }}",
      method:"GET",
      data:{ totalItem: totalItem, _token:_token },
      success:function(data) {
        if (data != "") {
          $('div#div-load-more-sports').remove();
          $('div.container-wrap').find('div.content').append(data);
          $('div.container-wrap').append(`
            <div class="row text-center" id="div-load-more-sports">
              <div class="col-xs-3 center-block">
                <button type="button" class="btn btn-info btn-outline" id="loadMoreSports">Load more</button>
              </div>
            </div>`
          );
        } else {
          $('div#div-load-more-sports').remove(); 
          alertify.success("End of page");
        }
      },
      error:function(error) {
        alert('error');
      }
    });
  };

});

$("body").delegate("button#loadMoreVideo", "click", function() {
  let _token = $('input[name="_token"]').val();
  let totalItem = $(".item-video").length;
  loadMoreVideo(totalItem, _token);

  function loadMoreVideo(totalItem="", _token) {
    $.ajax({
      url:"{{ route('video.more') }}",
      method:"GET",
      data:{ totalItem: totalItem, _token:_token },
      success:function(data) {
        if (data != "") {
          $('div#div-load-more-video').remove();
          $('div.content').append(data);
          $('div.content-wrap').append(`
            <div class="row text-center" id="div-load-more-video">
              <div class="col-xs-3 center-block">
                <button type="button" class="btn btn-info btn-outline" id="loadMoreVideo">Load more</button>
              </div>
            </div>`
          );
        } else {
          $('div#div-load-more-video').remove();
          alertify.success("End of page");
        }
      },
      error:function(error) {
        alert('error');
      }
    });
  };

});

// End click load more
</script>