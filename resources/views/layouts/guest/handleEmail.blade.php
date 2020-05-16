<script>
  //Start Setup ajax
  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('[name=csrf-token]').attr('content')
      }
    });
  });
  //End Setup ajax
</script>

<script>
$("body").delegate("button#subscribe-email", "click", function(event) {
  alert("clicked");
  event.preventDefault();
  let email = $("input#email").val();
  $.ajax({
    url: `{{route('news.subcribe')}}`,
    method: "PUT",
    data: {
      email: email
    },
    success: function(response) {
      alert('success');
    },
    error: function(error) {
      alert('error');
    }
  });
});
</script>
