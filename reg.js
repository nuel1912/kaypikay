function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var prev = document.getElementById("fileprev");
      prev.src = src;
      prev.style.display = "block";
    }
}

// Registration
var move1 = document.getElementById("move1");
var move2 = document.getElementById("move2");
var move3 = document.getElementById("move3");


var next1 = document.getElementById("next1");
var next2 = document.getElementById("next2");
var submit = document.getElementById("submit");
var back1 = document.getElementById("back1");
var back2 = document.getElementById("back2");


var first1 = document.getElementById("first1");
var last1 = document.getElementById("last1");
var email1 = document.getElementById("email1");
var no1 = document.getElementById("no1");
var date = document.getElementById("dob");
var age = document.getElementById("age");
var gender = document.getElementById("gender");
var add = document.getElementById("add");
var city = document.getElementById("city");
var state = document.getElementById("state");
var country = document.getElementById("country");
var pob = document.getElementById("pob");

var full = document.getElementById("full");
var email2 = document.getElementById("email2");
var no2 = document.getElementById("no2");
var state2 = document.getElementById("state2");
var occ = document.getElementById("occ");
var add2 = document.getElementById("add2");

var degree = document.getElementById("degree");
var course = document.getElementById("course");
var pri = document.getElementById("pri");
var sec = document.getElementById("sec");


next1.onclick = function() {
    if (first1.value == "") {
        window.alert("Please your first name...");
        first1.focus();
        return false;
    }
    else if (last1.value == "") {
        window.alert("Please your last name...");
        last1.focus();
        return false;
    }
    else if (email1.value == "") {
        window.alert("Please your email...");
        email1.focus();
        return false;
    }
    else if (no1.value == "") {
        window.alert("Please your phone number...");
        no1.focus();
        return false;
    }
    else if (date.value == "") {
        window.alert("Please your date of birth...");
        date.focus();
        return false;
    }
    else if (age.value == "") {
        window.alert("Please your age...");
        age.focus();
        return false;
    }
    else if (gender.value == "") {
        window.alert("Please your gender...");
        gender.focus();
        return false;
    }
    else if (add.value == "") {
        window.alert("Please your address...");
        add.focus();
        return false;
    }
    else if (city.value == "") {
        window.alert("Please your city...");
        city.focus();
        return false;
    }
    else if (state.value == "") {
        window.alert("Please your state...");
        state.focus();
        return false;
    }
    else if (country.value == "") {
        window.alert("Please your country...");
        country.focus();
        return false;
    }
    else if (pob.value == "") {
        window.alert("Please your place of birth...");
        pob.focus();
        return false;
    }
    else {
        move1.style.display = "none";
        move2.style.display = "block";
        return true;
    }
}

back1.onclick = function() {
    move1.style.display = "block";
    move2.style.display = "none";
}

next2.onclick = function() {
    if (full.value == "") {
        window.alert("Please your full name...");
        full.focus();
        return false;
    }
    else if (email2.value == "") {
        window.alert("Please address of next of kin...");
        email2.focus();
        return false;
    }
    else if (no2.value == "") {
        window.alert("Please phone number of next of kin...");
        no2.focus();
        return false;
    }
    else if (state2.value == "") {
        window.alert("Please your state...");
        state2.focus();
        return false;
    }
    else if (occ.value == "") {
        window.alert("Please your occupation...");
        occ.focus();
        return false;
    }
    else if (add2.value == "") {
        window.alert("Please your address...");
        add2.focus();
        return false;
    }
    else {
        move2.style.display = "none";
        move3.style.display = "block";
        return true;
    }
}

back2.onclick = function() {
    move2.style.display = "block";
    move3.style.display = "none";
}

submit.onclick = function () {
    if (degree.value == "") {
        window.alert("Select your preferred degree...");
        degree.focus();
        return false;
    }
    else if (course.value == "") {
        window.alert("Select your desired course...");
        course.focus();
        return false;
    }
    else if (pri.value == "") {
        window.alert("Please your primary school...");
        pri.focus();
        return false;
    }
    else if (sec.value == "") {
        window.alert("Please your secondary school...");
        sec.focus();
        return false;
    }
    else {
        move2.style.display = "block";
        window.alert('Successful');
        return true;
    }
}

// Chech
// next1.onclick = function() {
//     move1.style.display = "none";
//     move2.style.display = "block";
// }

// next2.onclick = function() {
//     move2.style.display = "none";
//     move3.style.display = "block";
// }