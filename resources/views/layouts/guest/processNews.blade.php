<script>
// Start click load more
$("body").delegate("button#loadMoreStyle", "click", function() {
  // alert("clicked");
  let _token = $('input[name="_token"]').val();
  let totalItem = $(".item-style").length;
  loadMoreStyle(totalItem, _token);

  function loadMoreStyle(totalItem="", _token) {
    $.ajax({
      url:"{{ route('style.more') }}",
      method:"GET",
      data:{ totalItem: totalItem, _token:_token },
      success:function(data) {
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
  alert(totalItem);
  loadMoreFashion(totalItem, _token);

  function loadMoreFashion(totalItem="", _token) {
    $.ajax({
      url:"{{ route('fashion.more') }}",
      method:"GET",
      data:{ totalItem: totalItem, _token:_token },
      success:function(data) {
        $('div#div-load-more-fashion').remove();    
        if (!($('div.container-wrap > div').hasClass("append-more"))) {
          $('div.container-wrap').append(`<div class="row row-bottom-padded-md append-more"> </div>`);
        }
        $('div.append-more').append(data);
        $('div.container-wrap').append(`
          <div class="row text-center" id="div-load-more-fashion">
            <div class="col-xs-3 center-block">
              <button type="button" class="btn btn-info btn-outline" id="loadMoreFashion">Load more</button>
            </div>
          </div>`
        );
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
  alert(totalItem);
  loadMoreTravel(totalItem, _token);

  function loadMoreTravel(totalItem="", _token) {
    $.ajax({
      url:"{{ route('travel.more') }}",
      method:"GET",
      data:{ totalItem: totalItem, _token:_token },
      success:function(data) {
        $('div#div-load-more-style').remove();    
        if (!($('div.container-wrap > div').hasClass("append-more"))) {
          $('div.container-wrap').append(`<div class="row row-bottom-padded-md append-more"> </div>`);
        }
        $('div.append-more').append(data);
        $('div.container-wrap').append(`
          <div class="row text-center" id="div-load-more-style">
            <div class="col-xs-3 center-block">
              <button type="button" class="btn btn-info btn-outline" id="loadMoreTravel">Load more</button>
            </div>
          </div>`
        );
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
  alert(totalItem);
  loadMoreSports(totalItem, _token);

  function loadMoreSports(totalItem="", _token) {
    $.ajax({
      url:"{{ route('sports.more') }}",
      method:"GET",
      data:{ totalItem: totalItem, _token:_token },
      success:function(data) {
        $('div#div-load-more-style').remove();    
        if (!($('div.container-wrap > div').hasClass("append-more"))) {
          $('div.container-wrap').append(`<div class="row row-bottom-padded-md append-more"> </div>`);
        }
        $('div.append-more').append(data);
        $('div.container-wrap').append(`
          <div class="row text-center" id="div-load-more-style">
            <div class="col-xs-3 center-block">
              <button type="button" class="btn btn-info btn-outline" id="loadMoreSports">Load more</button>
            </div>
          </div>`
        );
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
  alert(totalItem);
  loadMoreVideo(totalItem, _token);

  function loadMoreVideo(totalItem="", _token) {
    $.ajax({
      url:"{{ route('video.more') }}",
      method:"GET",
      data:{ totalItem: totalItem, _token:_token },
      success:function(data) {
        $('div#div-load-more-style').remove();    
        if (!($('div.container-wrap > div').hasClass("append-more"))) {
          $('div.container-wrap').append(`<div class="row row-bottom-padded-md append-more"> </div>`);
        }
        $('div.append-more').append(data);
        $('div.container-wrap').append(`
          <div class="row text-center" id="div-load-more-style">
            <div class="col-xs-3 center-block">
              <button type="button" class="btn btn-info btn-outline" id="loadMoreVideo">Load more</button>
            </div>
          </div>`
        );
      },
      error:function(error) {
        alert('error');
      }
    });
  };

});

// End click load more
</script>