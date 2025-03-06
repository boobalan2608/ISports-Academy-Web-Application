var tournament = document.querySelector(".tourna-menu")
var classes = document.querySelector(".class-menu")
var events = document.querySelector(".events-menu")
var elements = document.getElementsByClassName("menulist")
var secertkey = document.querySelector(".secertkey")
var popupmsg = document.querySelector(".popupmsg")
function showcontent(menu){
    tournament.style.display = "none"
    classes.style.display = "none"
    events.style.display = "none"
    var content = "." + menu + "-menu"
    var result = document.querySelector(content)
    result.style.display = "block"
    result.classList.add("animation")
    if (menu == "tourna"){
        elements[1].style.color = "black"
        elements[2].style.color = "black"
        elements[0].style.color = "red"
    }
    else if(menu == "class"){
        elements[0].style.color = "black"
        elements[2].style.color = "black"
        elements[1].style.color = "red"
    }
    else{
        elements[0].style.color = "black"
        elements[1].style.color = "black"
        elements[2].style.color = "red"
    }
}
function verification(){
    if(secertkey.value == "ISACADEMY"){
        popupmsg.style.display = "block"
        setTimeout(function(){
            document.querySelector(".loginkey").style.display = "none"
            document.querySelector(".adminpanel").style.display = "block"
            popupmsg.style.display = "none"
        },1000)
    }
    else{
        popupmsg.style.display = "block"
        popupmsg.textContent = "Wrong❌"
        popupmsg.style.color = "red"
        setTimeout(function(){
            popupmsg.classList.add("popdown")
        },1300)
    }
}