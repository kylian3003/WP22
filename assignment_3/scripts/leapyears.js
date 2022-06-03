
// validate username
var check_name = ()=>{
          let name_value = document.getElementById("name").value;
          if(name_value == ""){
                    document.querySelector(".name_error").innerHTML = "Please enter your name!";
                    return false;
          }else if(!name_value.match(/(^[a-z ]+$)/i)){
                    document.querySelector(".name_error").innerHTML = "Please enter valid name in text format!";
                    return false;
          }else{
                    return true;
          }
}
// validate email address
var check_email = ()=>{
          let email_value = document.getElementById("email").value;
          if(email_value == ""){
                    document.querySelector(".email_error").innerHTML = "Please enter your email!";
                    return false;
          }else if(!email_value.match(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/)){
                    document.querySelector(".email_error").innerHTML = "Please enter valid email address!";
                    return false;
          }else{
                    return true;
          }
}
// validate age
var check_age = ()=>{
          let age_value = document.getElementById("age").value;
          if(age_value == ""){
                    document.querySelector(".age_error").innerHTML = "Please enter your age!";
                    return false;
          }else if(!age_value.match(/^[0-9]+$/)){
                    document.querySelector(".age_error").innerHTML = "Please enter valid age in number format!";
                    return false;
          }else{
                    return true;
          }
}
// validate place
var check_place = ()=>{
          let place_value = document.getElementById("place").value;
          if(place_value == ""){
                    document.querySelector(".place_error").innerHTML = "Please enter your place!";
                    return false;
          }else if(!place_value.match(/^[a-zA-Z ]+$/)){
                    document.querySelector(".place_error").innerHTML = "Please enter valid place in text format!";
                    return false;
          }else{
                    return true;
          }
}


let submit_btn = document.getElementById("submit_btn");
submit_btn.addEventListener("click",()=>{

          let name = check_name();
          let email = check_email();
          let age = check_age();
          let place = check_place();
          console.log(name)
          if(!name){
                    document.getElementById("name").classList.add("is-invalid");
          }else{
                    document.getElementById("name").classList.add("is-valid");
                    document.getElementById("name").classList.remove("is-invalid");
          }

          if(!email){
                    document.getElementById("email").classList.add("is-invalid");
          }else{
                    document.getElementById("email").classList.add("is-valid");
                    document.getElementById("email").classList.remove("is-invalid");
          }

          if(!age){
                    document.getElementById("age").classList.add("is-invalid");
          }else{
                    document.getElementById("age").classList.add("is-valid");
                    document.getElementById("age").classList.remove("is-invalid");
          }

          if(!place){
                    document.getElementById("place").classList.add("is-invalid");
          }else{
                    document.getElementById("place").classList.add("is-valid");
                    document.getElementById("place").classList.remove("is-invalid");
          }

          if(name && email && age && place){
                    document.getElementById("my_form").submit();
          }

});