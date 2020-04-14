let callAjaxTopic = (keyword) => {
    $.ajax({
      url:`dashboard/topic/${keyword}`,
      method:"GET",
      data: {keyword: keyword},
      success:function(response) {
        $("div#content-ajax").html(response);
        console.log(response);
     }
  });
};


$(() => {
  $("#topic-style").unbind("click").on("click", function() { callAjaxTopic("style"); });  
  $("#topic-fashion").unbind("click").on("click", function() { callAjaxTopic("fashion"); });  
  $("#topic-travel").unbind("click").on("click", function() { callAjaxTopic("travel"); });  
  $("#topic-sports").unbind("click").on("click", function() { callAjaxTopic("sports"); });  
  $("#topic-video").unbind("click").on("click", function() { callAjaxTopic("video"); });  
  $("#topic-archives").unbind("click").on("click", function() { callAjaxTopic("archives"); });  
});
