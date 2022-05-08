// File name: main.js
// Date: 8-5-2022
// Author: Kylian de Rooij
// Student number: s4549503


function changeTitle() {
    if (window.location.href.includes("index.html")) {
        document.title = "Webprogramming (LIX018P05) - Index";
    } else if (window.location.href.includes("second.html")) {
        document.title = "Webprogramming (LIX018P05) - Second";
    }
}


function addArticle() {
    if (window.location.href.includes("index.html")) {
        let articleContainer = document.querySelector('article'); // change to getelementbytag
        let dynamicHtml = `
        <h1>This is my second article</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget eros ultrices, dapibus lacus ultrices, ultrices tortor. Nam tincidunt blandit neque, at ornare sapien ultricies ut. Integer eget ultricies velit. Cras eu tellus ex. Integer
            bibendum nisi neque, sed auctor odio blandit sit amet. Aenean augue tellus, tincidunt vel commodo bibendum, rutrum nec augue. Donec pulvinar sem in purus congue sodales. Nam magna urna, maximus ut eros vel, rutrum semper sem. Duis
            a efficitur mauris. Nunc a aliquam nisi, vel iaculis justo. Donec lacus nulla, sollicitudin vitae lectus vel, tempus vestibulum ipsum. In dignissim consequat pellentesque. Pellentesque eget eleifend velit. Aenean aliquam auctor
            nibh vitae tristique. Nulla facilisi.</p>
        
        `;
        let articleElement = document.createElement('article');
        articleElement.innerHTML = dynamicHtml;
        articleContainer.appendChild(articleElement);
    }
}


function addLink() {
    var elements = document.querySelectorAll("#links ul li a");
    elements[2].setAttribute('href', 'https://google.com/');
    elements[2].setAttribute('target', '_blank');
}


function changeColor() {
    var elements = document.getElementsByClassName('nav-item');
    for (i = 0; i < elements.length; i++) {
        elements[i].firstElementChild.style.color = 'red';
    }
}


function addSchedule() {
    if (window.location.href.includes("index.html")) {
        let articleContainer = document.querySelector('article'); // change to getelementbytag
        let dynamicHtml = `
        <ul>
        <li>Week 1 | Assignment 1</li>
        <li>Week 2 | Assignment 1</li>
        <li>Week 3 | Assignment 2</li>
        <li>Week 4 | Assignment 2</li>
        <li>Week 5 | Assignment 3</li>
        <li>Week 6 | Assignment 3</li>
        <li>Week 7 | Final Project</li>
        </ul>
        `;
        let scheduleElement = document.createElement('article');
        scheduleElement.innerHTML = dynamicHtml;
        articleContainer.appendChild(scheduleElement);
    }
}


// Ik kon deze functie niet volledig krijgen. Dit was mijn beste poging
function addSidebar() {
    if (window.location.href.includes("second.html")) {
        var column = document.getElementsByClassName('.col-md-12')
        column.className = 'col-md-8';
        let dynamicHTML = '<h1>Sidebar</h1>';
        let sidebarElement = document.createElement('div').className = 'col-md-4';
        sidebarElement.innerHTML = dynamicHTML;
        column.insertBefore(sidebarElement, column);
    }
}


function eventListener() {
    changeTitle()
    addArticle()
    addLink()
    changeColor()
    addSchedule()
    addSidebar()
}

eventListener()