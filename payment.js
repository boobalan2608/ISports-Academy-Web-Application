var upi = document.getElementById("upi")
var bank = document.getElementById("bank")
var qr = document.getElementById("qr")
var upimethod = document.querySelector(".upimethod")
var bankmethod = document.querySelector(".bankmethod")
var qrmethod = document.querySelector(".qrmethod")
var btndiv = document.querySelector(".paybtn")
var option = document.querySelector(".options")
var gotoupi = document.getElementById("gotoupi")
var gotobank = document.getElementById("gotobank")
var gotoqr = document.getElementById("gotoqr")
var paytmid = document.querySelector(".paytmid")
var gpayid = document.querySelector(".gpayid")
var phonepeid = document.querySelector(".phonepeid")
var button = document.querySelector(".btn-53")
var paymentproof = document.getElementById('paymentproof')
var utrno = document.querySelector(".UTRNO")

function goto(go) {
    get = go + "method"
    option.style.display = "none"
    document.querySelector(".payment-method").style.display = "block"
    document.getElementById(go).checked = true
    if( get == "upimethod" ){
        upipayment();
    }
    else if( get == "bankmethod"){
        bankpayment();
    }
    else{
        qrpayment();
    }

}
function upipayment() {
    if (upi.checked) {
        document.querySelector(".upimethod").style.display = "block";
        bankmethod.style.display = "none"
        qrmethod.style.display = "none"
        btndiv.style.display = "block"
        button.style.top = "0px"
    }
    else {
        document.querySelector(".upimethod").style.display = "none";
    }
}
function bankpayment() {
    if (bank.checked) {
        upimethod.style.display = "none"
        qrmethod.style.display = "none"
        bankmethod.style.display = "block"
        btndiv.style.display = "block"
        button.style.top = "0px"
    }
}
function qrpayment() {
    if (qr.checked) {
        qrmethod.style.display = "block"
        btndiv.style.display = "block"
        upimethod.style.display = "none"
        bankmethod.style.display = "none"
        button.style.top = "-10px"
    }
}
function toggle(pm) {
    paytmid.style.display = "none"
    gpayid.style.display = "none"
    phonepeid.style.display = "none"
    var id = pm + "id"
    document.getElementById(id).style.display = "flex"
}
function copy(get) {
    var getid = get + "id"
    let value1 = document.getElementById(getid).textContent.substring(8, paytmid.length);
    navigator.clipboard.writeText(value1).then(() => {
        alert("Copied");
    })
}
function copybank(get){
    var getbank = ".bank" + get 
    console.log(getbank)
    let value2 = document.querySelector(getbank).textContent.substring(0, paytmid.length);
    navigator.clipboard.writeText(value2).then(() => {
        alert("Copied");
    })

}
document.querySelector(".paybtn").addEventListener("click", function(){
    document.querySelector(".paymentverify").style.display = "block"
    document.querySelector(".head").style.display = "none";
    document.querySelector(".payment-method").style.display = "none"
    option.style.display = "none"
    bankmethod.style.display = "none"
    upimethod.style.display = "none"
    document.querySelector(".paybtn").style.display = "none"
    qrmethod.style.display = "none"
})
function validateform(){
    if(paymentproof.files.length == 0){
        alert("Upload an Image to Continue");
        return false;
    }
    else{
        return true;
    }
}