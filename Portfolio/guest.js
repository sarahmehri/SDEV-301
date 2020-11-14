/**
 * this the validation for guestbook
 * @author Sarah Mehri
 * 11/4/2020
 */



document.getElementById("guestbookform").onsubmit = validate;

//function of validation for form info
function validate() {
    let valid = true;
    //clear all the errs
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";

    }
    //check for name
    let fname = document.getElementById("fname").value;
    if (fname === "") {
        let errfname = document.getElementById("errFname");
        errfname.style.visibility = "visible";
        errfname.innerHTML = "Field is required";//adding the alarm sign
        valid = false;
    }
    //check for name
    let lname = document.getElementById("lname").value;
    if (lname == "") {
        let errLname = document.getElementById("errLname");
        errLname.style.visibility = "visible";
        errLname.innerHTML = "Field is required";//adding the alarm sign
        valid = false;
    }
    //check for email -- challenge
    let email = document.getElementById("email").value;
    let errEmail = document.getElementById("errEmail");
    let checkbox = document.getElementById("checkbox");
    //if they supplied email or enter
    if (email !== "") {
        //call the validation function for email
        if (validateEmail(email) === false) {
            errEmail.style.visibility = "visible";
            errEmail.innerHTML = "Invalid email format";
            valid = false;
        }
    }
    //if the checkbox is checked then the email is required
    else if(checkbox.checked === true){
        if(email === ""){
            errEmail.style.visibility = "visible";
            errEmail.innerHTML = "The field is required";
            valid = false;
        }
    }

    //check for linkedin
    let linkedIn = document.getElementById("linkedin").value;
    let n1 = linkedIn.includes("http");
    let errLinkedin = document.getElementById("errLinkedin");
    let m1 = linkedIn.includes(".com");

    //if they entered the linkedin, it should have http and .com
    if (linkedIn !== "") {


        if (!n1 || !m1) {
            errLinkedin.style.visibility = "visible";
            errLinkedin.innerHTML = "Invalid linkedIn format";
            valid = false;
        }
    }

    //Check how we meet drop box
    let meet = document.getElementById("meet").value;
    let errOthers = document.getElementById("errothers");
    let errMeet = document.getElementById("errMeet");

    if (meet === "none") {

        errMeet.style.visibility = "visible";
        errMeet.innerHTML = "please tell me how we meet";
        valid = false;
    }
    //if the other selected, a box of text appear
     else if(meet === "other") {
         //if the box of other is empty, error up please specify
        if (otherInfo.value === "") {
            errOthers.style.visibility = "visible";
            errOthers.innerHTML = "please specify that";
            valid = false;
        }
    }

    return valid;
}
let meet = document.getElementById("meet");
meet.onclick = showOther;
//funciton for showing the box of text, when the other selected
function showOther() {
    if (meet.value === "other") {
        otherInfo.classList.remove("d-none");

    } else {

        otherInfo.classList.add("d-none");


    }
}
let checkbox = document.getElementById("checkbox");
checkbox.onclick = showEmailing;
let mailInfo = document.getElementById("mailInfo");
//function for validating the email address by regular expression
function showEmailing(){
    if(checkbox.checked === true){
        mailInfo.classList.remove("d-none");
    }
   else{
        mailInfo.classList.add("d-none");
    }
}
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}