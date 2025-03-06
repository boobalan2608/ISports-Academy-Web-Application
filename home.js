//var sidenavbar = document.querySelector(".sidenavbar")
var sidemenu = document.querySelector(".sidemenubar")
var button = document.querySelector("regbutton")

//function shownavbar(){//
    //sidenavbar.style.left = "0%"
//}
//function closenavbar(){
//    sidenavbar.style.left = "-60%"
//}

function show(){
    sidemenu.style.left= "0%"
}

function hidemenubar(){
    sidemenu.style.left= "-50%"
}
function btn(){
    window.open('register.php', '_blank')
}
function startbtn(){
    window.open('register.php', '_blank')
}
var user = document.querySelector(".user");
function loginpage(){
    window.location.href = "login.php"
}
document.querySelectorAll('a[href^="."]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
document.querySelectorAll('a[href^="."]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
function hidepopup(){
    var popuplaert = document.querySelector(".popupalert").style.display = "none"
}
setTimeout(hidepopup, 19700);