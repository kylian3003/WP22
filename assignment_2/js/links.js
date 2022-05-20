// $("#btn_for_fade_list").click(function(){
//           $("#fade_list").fadeToggle(); 
// });

$(document).ready(function(){
          $("#btn_for_fade_list").on("click", function(){
                        $(".fade_list").fadeToggle();
          })

          $("#add_link_form").on("submit", function(e){
                    e.preventDefault();
                    // var link_regex = ;
                    var link_name = $("#link_name").val();
                    var link_url = $("#link_url").val();

                    if(link_name == ""){
                              $(".name_error").html("Please enter a link name.");
                              ($("#link_name").focus());
                    }else{
                              $(".name_error").html("");
                    }

                    if(link_url == ""){
                              $(".url_error").html("Please enter a link url.");
                              ($("#link_url").focus());
                    }else if(!link_url.match(/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/)){
                              $(".url_error").html("Please enter a valid url.");
                              ($("#link_url").focus());
                    }else{
                              $(".url_error").html("");
                    }

                    if(link_name != "" && link_url != ""){
                              let html = "";
                              html += "<li class='list-group-item'><a href='"+link_url+"'>"+link_name+"</a></li>";
                              $(".fade_list").append(html);
                              $("#add_link_form").trigger("reset");
                    }

          });


          $("#delete_mode").on("click", function(){
                   
                              $(document).on("click",function(e){
                                        $(e.target).remove();
                              })
                              $("#delete_mode2").css("display", "block")
          
          })

          $("#delete_mode2").on("click", function(){
                    $(document).off("click");
                    window.location.reload();

          })
          
})