/*Email Subscription Validation */

function validateForm(){
    var userName = document.getElementsById("d-name").value;
    var eMail = document.getElementsByName("E-mail");
    if(userName = ""){
        alert("Kindly Enter your Name To Proceed")
        return false;
    }
}