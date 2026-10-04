const username = doocument.getElementById('displayusername').innerText;
const userID = doocument.getElementById('displayuserid').innerText;
const studentNumber = doocument.getElementById('displaystudentnumber').innerText;
const email = doocument.getElementById('displayemail').innerText;
const phoneNumber = doocument.getElementById('displayphonenumber').innerText;


function greeting(){
    alert("Hello "+username+ ". "+" Your User ID is: "+userID+"And Your Student Number is: "+studentNumber+"The Email is: "+email+"And The Phone Number is "+phoneNumber+);
}

