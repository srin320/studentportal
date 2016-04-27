/*-------------------Roll generate-----------------*/
function generateRoll(){
    var no=document.forms["form1"]["registrationno"].value;
    if(no == "")
    {
        alert("please fill Registration no first");
        document.forms["form1"]["registrationno"].focus();
        return;
    }
    var dept;
    switch(document.forms["form1"]["dept"].value)
    {
        case "Biotechnology":
            dept="BT";
            break;
        case "Civil Engineering":
            dept="CE";
            break;
        case "Chemical Engineering":
            dept="CHE";
            break;
        case "Computer Science Engineering":
            dept="CSE";
            break;
        case "Electronics And Communication Engi":
            dept="ECE";
            break;
        case "Electrical Engineering":
            dept="EE";
            break;
        case "Information Technology":
            dept="IT";
            break;
        case "Mechanical Engineering":
            dept="ME";
            break;
        case "Metallurgical And Materials Engineering":
            dept="MME";
            break;
    }
    document.forms["form1"]["roll"].value=no.substring(2,4).concat("/").concat(dept).concat("/");
    }
/*--------------------------------Age Calculation-----------------------------------------*/

function ageCount() {
  var input = document.getElementById("dob").value;
  var d = new Date( input );
  var day= d.getDate();
  var month=d.getMonth();
  var year = d.getFullYear();
  var today = new Date();
  var yearNow = today.getFullYear();
  var tm=today.getMonth();
  var td=today.getDate();
  var ageyear=yearNow-year;
  var agemonth=Math.abs(tm-month);
  var ageday=Math.abs(td-day);
  var age=ageyear + " Years "+ agemonth +" Months "+ ageday +" Days ";
  
  document.getElementById("age").value = age;

}

/*---------------------------------------------------Others hobby box-----------------------------------------------------*/


$(document).ready(function(){
    $("#other").click(function(){
        $("#others").show();
    });
});


/*------------------------------Email validation----------------------------*/

function emailValidation()
    {
        var emailID = document.getElementById("email").value;
                    atpos = emailID.indexOf("@");
                    dotpos = emailID.lastIndexOf(".");
                    var flag=false;
                    if (atpos < 1 || ( dotpos - atpos < 2 )) 
                    {
                        alert("Please enter correct email ID")
                        document.getElementById("email").focus() ;
                        return flag;
                    }
    }

/*------------------------------All letter check-----------------------------------------*/

function allLetter(inputtxt)
    {
        var letters = /^[A-Za-z ]+$/;
        if(inputtxt.value.match(letters)){
            return true;
        }
        else{
            alert('Please input alphabet characters only');
            return false;
        }
    }

/*--------------------------------All number check----------------------------------------------------*/

function allNumber(inputtxt)
    {
        var letters = /^[0-9]+$/;
        if(inputtxt.value.match(letters)){
            return true;
        }
        else{
            alert('Please input numbers only');
            return false;
        }
    }

/*------------------------------------Password confirmation---------------------------------------------------*/

function checkPassword()
{
    if(document.getElementById("password").value!=document.getElementById("confirmpassword").value)
                {
                    alert("Your passwords do not match please try again");
                    return false;
                    document.getElementById("confrimpassword").focus();
                }
}

