function deleteNews(id) {

          $.ajax({
                    url: "scripts/delete_news.php",
                    method: "POST",
                    data: {
                              id: id
                    }, success: function (data) {
                              if (data == "success") {
                                        alert("News item deleted successfully");
                                        location.reload();
                              }
                    }, error: function (data) {
                              console.log(data);
                    }
          })
}