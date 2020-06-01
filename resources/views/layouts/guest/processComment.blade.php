<script>

$("body").delegate("form#post_comment input[type=submit]", "submit", function() {
  alert('start click');
});

$("body").delegate("form#post_comment", "submit", function(event) {
  // if( Auth::user()  ) {
  //   alert('ton tai user');
  // } else {
  //   alert('khong ton tai user');
  // }
  // return false;
  event.preventDefault();
  let id = $("form#post_comment input[name=id]").val();
  let comment = $("form#post_comment textarea[name=comment]").val();
  $.ajax({
    url: `{{route('comment.new')}}`,
    method: 'PUT',
    data: {
      id: id,
      comment: comment
    },
    success: function(response) {
      if (response.error == false) {
        //alert('success');

        let strAppend = `<div class="review">
                          <div class="user-img" style="background-image: url(images/default-user.png)"></div>
                          <div class="desc">
                            <h4>
                              <span class="text-left"><?= session('user_name') ?></span>
                              <span class="text-right"><?= date("d F Y", time()) ?></span>
                            </h4>
                            <p>`+ comment +`</p>
                            <p class="star">
                              <span class="text-left"><a href="javascript:void(0)" class="reply"><i class="icon-reply2"></i></a></span>
                            </p>
                          </div>
                        </div>`;


        $("div#content-comment").append(strAppend);
        let countComment = $("div.review").length;
        $("span#total-comment a").html(countComment + ' Comments');
        $("h2#total-comment").html(countComment + ' Comment');
        $("form#post_comment textarea[name=comment]").val('');
      }
    },
    error: function(error) {
      if (error.responseJSON['authenticated'] == false) {
        Swal.fire({
          title: 'Are you want login?',
          // text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes'
        }).then((result) => {
          if (result.value) {
            location.href = "{{ route('dashboard.login') }}";    
          }
        });













      } else {
        alertify.notify('An error occurred', 'error', 3);
      }
    }
  });
});


</script>