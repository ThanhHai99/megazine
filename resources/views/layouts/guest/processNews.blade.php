<script>
// Start click load more
$("body").delegate("button#loadMore", "click", function() {
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
        $('div#div-load-more').remove();    
        if (!($('div.container-wrap > div').hasClass("append-more"))) {
          $('div.container-wrap').append(`<div class="row row-bottom-padded-md append-more"> </div>`);
        }
        $('div.append-more').append(data);
        $('div.container-wrap').append(`
          <div class="row text-center" id="div-load-more">
            <div class="col-xs-3 center-block">
              <button type="button" class="btn btn-info btn-outline" id="loadMore">Load more</button>
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