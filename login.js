// Password view
let eyes = document.getElementById("eyes");
let password = document.getElementById("pass");

eyes.onclick = function(){
    if (password.type == "password"){
        password.type = "text";
        eyes.src = "img/eye.png";
    }else {
        password.type = "password";
        eyes.src = "img/eyes.png";
    }
}