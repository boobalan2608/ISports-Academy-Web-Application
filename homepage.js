var menu = document.querySelector(".menubar");
var slidemenu = document.querySelector(".slidemenubar");
var xmark = document.querySelector(".xmark");
var slidemenuItems = document.querySelectorAll(".slidemenu-list");

menu.addEventListener("click", function () {
    slidemenu.style.left = "0%";
    slidemenu.style.zIndex = "2"
});

xmark.addEventListener("click", function () {
    slidemenu.style.left = "-100%";
    slidemenu.style.zIndex = "0"
});

function showSideContent() {
    var time = document.getElementById("time");
    if (time.style.display === "none") {
        time.style.display = "flex";
    } else {
        time.style.display = "none";
    }
}
var schedule = document.querySelector(".details")
var events = document.querySelector(".events")
var tournament = document.querySelector(".tor")
var coach = document.querySelector(".coach")
var fees = document.querySelector(".fees")
var title = document.querySelector(".h")
var srihari = document.getElementsByClassName("sri")
function showcontent(page) {
    pagecontent = "." + page
    schedule.style.display = "none"
    title.style.display = "none"
    events.style.display = "none"
    tournament.style.display = "none"
    coach.style.display = "none"
    fees.style.display = "none"
    document.querySelector(pagecontent).style.display = "block"
    if(page == "details"){
        document.querySelector(pagecontent).style.display = "flex"
        document.querySelector(".h").style.display = "block"
        srihari[0].style.color = "red"
        srihari[2].style.color = "black"
        srihari[3].style.color = "black"
        srihari[4].style.color = "black"
        srihari[1].style.color = "black"
    }
    if(page == "events"){
        srihari[0].style.color = "black"
        srihari[2].style.color = "black"
        srihari[3].style.color = "black"
        srihari[4].style.color = "black"
        srihari[1].style.color = "red"
    }
    if(page == "tor"){
        srihari[0].style.color = "black"
        srihari[2].style.color = "red"
        srihari[3].style.color = "black"
        srihari[4].style.color = "black"
        srihari[1].style.color = "black"
    }
    if(page == "coach"){
        srihari[0].style.color = "black"
        srihari[2].style.color = "black"
        srihari[3].style.color = "red"
        srihari[4].style.color = "black"
        srihari[1].style.color = "black"
    }
    if(page == "fees"){
        srihari[0].style.color = "black"
        srihari[2].style.color = "black"
        srihari[3].style.color = "black"
        srihari[4].style.color = "red"
        srihari[1].style.color = "black"
    }
}
srihari[0].classList.add('clicked')
document.addEventListener('DOMContentLoaded', function() {
    var divs = document.querySelectorAll('.sri');
    divs.forEach(div => {
        div.addEventListener('click', function() {
            // Remove 'clicked' class from all divs
            divs.forEach(div => {
                div.classList.remove('clicked');
            });

            // Add 'clicked' class to the clicked div
            this.classList.add('clicked');
        });
    });
});
