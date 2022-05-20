function validateForm(){
    let score = 0;

    if ($('input[name="Name"]').val() === ""){
        alert("Please provide your name!");
        return false;
    } else {
        score++
    }
    if ($('input[name="Age"]').val() === ""){
        alert("Please provide your age!");
        return false;
    } else {
        score++
    }
    if ($('input[name="City"]').val() === ""){
        alert("Please provide your city!");
        return false;
    } else {
        score++
    }
    if ($('input[name="Email"]').val() === ""){
        alert("Please provide your email!");
        return false;
    } else {
        score++
    }
    if ($('input[name="pNumber"]').val() === ""){
        alert("Please provide your phone number!");
        return false;
    } else {
        score++
    }


    if(($('input[name="Name"]').val().match(/^[a-zA-Z]+$/))) {
        score++
    } else {
        alert("Please provide a valid name!");
        return false;
    }

    if(($('input[name="Age"]').val().match(/^[0-9]+$/))) {
        score++
    } else {
        alert("Please provide a valid age!")
        return false;
    }

    if(($('input[name="City"]').val().match(/^[a-zA-Z]+$/))) {
        score++
    } else {
        alert("Please provide a valid city!");
        return false;
    }

    if(($('input[name="Email"]').val().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/))) {
        score++
    } else {
        alert("Please provide a valid email!");
        return false;
    }

    if(($('input[name="pNumber"]').val().match(/^[0-9]+$/))) {
        score++
    } else {
        alert("Please provide a valid phone number!");
        return false;
    }

    if(score === 10){
        return true;
    }
}


function printToDiv() {
    $('#form-content').show();
    $('td:contains("Kevin")').innerHTML = $('input[name="Name"]').val();
    $('td:contains("24")').innerHTML = $('input[name="Age"]').val();
    $('td:contains("Amsterdam")').innerHTML = $('input[name="City"]').val();
    $('td:contains("kevin@gmail.com")').innerHTML = $('input[name="Email"]').val();
    $('td:contains("+31612345678")').innerHTML = $('input[name="pNumber"]').val();
}


function clearForm(){
    $('input[name="Name"]').val("");
    $('input[name="Age"]').val("");
    $('input[name="City"]').val("");
    $('input[name="Email"]').val("");
    $('input[name="pNumber"]').val("");
}


function openContact(){
    $('#links').className = "tab-pane";
    $('#contact').className = "tab-pane active";
    $('#links').hide();
    $('#contact').show();

}

function openLinks(){
    $('#contact').className = "tab-pane";
    $('#links').className = "tab-pane active";
    $('#contact').hide();
    $('#links').show();
}


$(function() {
});


function eventListener(){
    $('#submit-btn').on('click', function() {
        if (validateForm() == true) {
            printToDiv();
        }
    });
    $('#erase-btn').on('click', function() {
        clearForm();
    });
    $('#contact-tab').on('click', function() {
        openContact();
    });
    $('#link-tab').on('click', function() {
        openLinks();
    });
}


window.addEventListener('DOMContentLoaded', () => {
    eventListener();
})