<script>
// Start click load more
$("button#loadMore").on("click", function() {
  alert("clicked");
  var _token = $('input[name="_token"]').val();

  load_data(_token);

  function load_data(_token) {
    $.ajax({
      url:"{{ route('style.more') }}",
      method:"GET",
      data:{_token:_token},
      success:function(data) {
        // $('div#load-more').remove();
        $('div.container-wrap').append(data);
        // $('div.container-wrap').append('<p>rfvhddddddhvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</p>');
      },
      error:function(error) {
        alert('error');
      }
    });
  };

});
// End click load more
</script>