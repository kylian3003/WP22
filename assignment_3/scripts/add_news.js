$("#add_news_form").on("submit", (e) => {
          e.preventDefault();
          let title = $("#title").val();
          let content = $("#content").val();

          $.ajax({
                    url: "scripts/add_news.php",
                    method: "POST",
                    data: {
                              title: title,
                              content: content
                    },
                    success: (data) => {
                             if(data == "success"){
                                     $("#add_news_form")[0].reset();
                                        alert("News added successfully");
                             }
                    },error: (err) => {
                              console.log(err);
                    }
          })
         
});

