
// back to top button

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
        document.getElementById("backToTop").style.display = "block";
    }
    else {
        document.getElementById("backToTop").style.display = "none";
    }
}

// when the button is clicked scroll to the top
function goToTop() {
    $('html, body').animate({ scrollTop: 0 }, 800);
    return false;
}


/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function mobileNav() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
};

// add active class to navbar 
$("#homepage").addClass("active");
$(function () {
    $("#homepage,#aboutSection,#projectsSection,#contactSection").click(function () {
        // remove classes from all
        $("#homepage,#aboutSection,#projectsSection,#contactSection").removeClass("active");
        // add class to the one we clicked
        $(this).addClass("active");
        return false;
    });
});

$(document).ready(function () {
    // Add smooth scrolling to all links
    $("a").on('click', function (event) {

        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });
});


// load data into modal desktop

// Get the modal
var modal = document.getElementById('myModal');

// load projects into the modal
var project1 = document.getElementById('project1');
project1.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/javascriptFormValidationInfo.txt?t=" + Math.random());
}

var project2 = document.getElementById('project2');
project2.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/dynamicRecipeInfo.txt?t=" + Math.random());
}

var project3 = document.getElementById('project3');
project3.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/rentalApplicationInfo.txt?t=" + Math.random());
}

var project4 = document.getElementById('project4');
project4.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/phpContactFormInfo.txt?t=" + Math.random());
}

var project5 = document.getElementById('project5');
project5.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/chocolateStoreInfo.txt?t=" + Math.random());
}

var project6 = document.getElementById('project6');
project6.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/FMBCInfo.txt?t=" + Math.random());
}

var project7 = document.getElementById('project7');
project7.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/adminSystemInfo.txt?t=" + Math.random());
}

var project8 = document.getElementById('project8');
project8.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/portfolioDaySplashPageInfo.txt?t=" + Math.random());
}

var project9 = document.getElementById('project9');
project9.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/dataVisualizationInfo.txt?t=" + Math.random());
}

var project10 = document.getElementById('project10');
project10.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/youtubeVideoPlayerInfo.txt?t=" + Math.random());
}

var project11 = document.getElementById('project11');
project11.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/paypalExpressInfo.txt?t=" + Math.random());
}


var project12 = document.getElementById('project12');
project12.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/dmaccPortfolioDaySiteInfo.txt?t=" + Math.random());
}


var project13 = document.getElementById('project13');
project13.onclick = function () {
    modal.style.display = "block";
    $("#modalContent").load("projects/whatYouDontSeeInfo.txt?t=" + Math.random());
}


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}
    //reset button
    $("[type=reset]").click(function(){
        ("myForm").reset();
    });
    
// footer copyright
var day = new Date();
var year = day.getFullYear();
document.getElementById("year").innerHTML = year + " ";