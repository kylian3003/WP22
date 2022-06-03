$("#edit_news_form").on("submit", (e) => {
          let form_date = $("#edit_news_form").serialize();
          e.preventDefault();
          let title = $("#title").val();
          let content = $("#content").val();
          $.ajax({
                  url:"scripts/update_news.php",
                  method:"POST",
                  data:form_date,
                  success: (data) => {
                          if(data == "success"){
                                  $("#edit_news_form")[0].reset();
                                  alert("News updated successfully");
                                  location.reload();
                          }
                  },error: (err) => {
                          console.log(err);
                  }
          })
  });