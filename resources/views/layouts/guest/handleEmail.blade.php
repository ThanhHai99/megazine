<script>
  $(document).ready(function() {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('[name=csrf-token]').attr('content')
      }
    });
  });
</script>

<script>
$("button#subscribe-email").on("click", function(event) {
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
