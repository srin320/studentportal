

/*----------------------Form Validation-----------------------------------*/
function validateText(id)
            {
                if($("#"+id).val()==null || $("#"+id).val()=="")
                {
                    var div=$("#"+id).closest("div");
                    alert(id+" empty!");
                    div.addClass("has-error");
                    return false;
                    
                }
                else{
                    var div=$("#"+id).closest("div");
                    div.removeClass("has-error");
                    return true;
                }
            }
            
        $(document).ready(
            function()
            {
                $("#contactbtn").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                        /*if(!validateText("middleName"))
                    {
                        return false;
                    }*/
                        if(!validateText("lastName"))
                    {
                        return false;
                    }
                        if(!validateText("gender"))
                    {
                        return false;
                    }
                        if(!validateText("dp"))
                    {
                        return false;
                    }
                        if(!validateText("dob"))
                    {
                        return false;
                    }
                        if(!validateText("age"))
                    {
                        return false;
                    }
                        if(!validateText("address"))
                    {
                        return false;
                    }
                        if(!validateText("mobile"))
                    {
                        return false;
                    }
                        if(!validateText("email"))
                    {
                        return false;
                    }
                        if(!validateText("username"))
                    {
                        return false;
                    }
                        if(!validateText("password"))
                    {
                        return false;
                    }
                        if(!validateText("confirmpassword"))
                    {
                        return false;
                    }
                        if(!validateText("tenth"))
                    {
                        return false;
                    }
                        if(!validateText("twelve"))
                    {
                        return false;
                    }
                        if(!validateText("program"))
                    {
                        return false;
                    }
                        if(!validateText("registrationno"))
                    {
                        return false;
                    }
                        if(!validateText("dept"))
                    {
                        return false;
                    }
                        if(!validateText("roll"))
                    {
                        return false;
                    }
                        if(!validateText("sem"))
                    {
                        return false;
                    }
                        
                }
                 );
            }
            
        );





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

/*-------------------------------others------------------------------------------*/

$(document).ready(function(){
    $("#other").click(function(){
        $("#others").show();
    });
});

/*------------------------------------------------Field wise validation-----------------------------------------------------------*/

function validateText(id)
            {
                if($("#"+id).val()==null || $("#"+id).val()=="")
                {
                    var div=$("#"+id).closest("div");
                    alert(id+" empty!");
                    div.addClass("has-error");
                    return false;
                    
                }
                else{
                    var div=$("#"+id).closest("div");
                    div.removeClass("has-error");
                    return true;
                }
            }
            
        $(document).ready(
            function()
            {
                $("#middleName").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#lastName").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#gender").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                        if(!validateText("lastName"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#dp").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#dob").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#age").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#address").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

            $(document).ready(
            function()
            {
                $("#mobile").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );
       
        $(document).ready(
            function()
            {
                $("#email").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    if(!validateText("mobile"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#username").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    if(!validateText("mobile"))
                    {
                        return false;
                    }
                    if(!validateText("email"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );
        

        $(document).ready(
            function()
            {
                $("#password").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    if(!validateText("mobile"))
                    {
                        return false;
                    }
                    if(!validateText("email"))
                    {
                        return false;
                    }
                    if(!validateText("username"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#confirmpassword").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    if(!validateText("mobile"))
                    {
                        return false;
                    }
                    if(!validateText("email"))
                    {
                        return false;
                    }
                    if(!validateText("username"))
                    {
                        return false;
                    }
                    if(!validateText("password"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#tenth").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    if(!validateText("mobile"))
                    {
                        return false;
                    }
                    if(!validateText("email"))
                    {
                        return false;
                    }
                    if(!validateText("username"))
                    {
                        return false;
                    }
                    if(!validateText("password"))
                    {
                        return false;
                    }
                    if(!validateText("confirmpassword"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#twelve").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    if(!validateText("mobile"))
                    {
                        return false;
                    }
                    if(!validateText("email"))
                    {
                        return false;
                    }
                    if(!validateText("username"))
                    {
                        return false;
                    }
                    if(!validateText("password"))
                    {
                        return false;
                    }
                    if(!validateText("confirmpassword"))
                    {
                        return false;
                    }
                    if(!validateText("tenth"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#program").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    if(!validateText("mobile"))
                    {
                        return false;
                    }
                    if(!validateText("email"))
                    {
                        return false;
                    }
                    if(!validateText("username"))
                    {
                        return false;
                    }
                    if(!validateText("password"))
                    {
                        return false;
                    }
                    if(!validateText("confirmpassword"))
                    {
                        return false;
                    }
                    if(!validateText("tenth"))
                    {
                        return false;
                    }
                    if(!validateText("twelve"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#registrationno").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    if(!validateText("mobile"))
                    {
                        return false;
                    }
                    if(!validateText("email"))
                    {
                        return false;
                    }
                    if(!validateText("username"))
                    {
                        return false;
                    }
                    if(!validateText("password"))
                    {
                        return false;
                    }
                    if(!validateText("confirmpassword"))
                    {
                        return false;
                    }
                    if(!validateText("tenth"))
                    {
                        return false;
                    }
                    if(!validateText("twelve"))
                    {
                        return false;
                    }
                    if(!validateText("program"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#dept").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    if(!validateText("mobile"))
                    {
                        return false;
                    }
                    if(!validateText("email"))
                    {
                        return false;
                    }
                    if(!validateText("username"))
                    {
                        return false;
                    }
                    if(!validateText("password"))
                    {
                        return false;
                    }
                    if(!validateText("confirmpassword"))
                    {
                        return false;
                    }
                    if(!validateText("tenth"))
                    {
                        return false;
                    }
                    if(!validateText("twelve"))
                    {
                        return false;
                    }
                    if(!validateText("program"))
                    {
                        return false;
                    }
                    if(!validateText("registrationno"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#roll").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    if(!validateText("mobile"))
                    {
                        return false;
                    }
                    if(!validateText("email"))
                    {
                        return false;
                    }
                    if(!validateText("username"))
                    {
                        return false;
                    }
                    if(!validateText("password"))
                    {
                        return false;
                    }
                    if(!validateText("confirmpassword"))
                    {
                        return false;
                    }
                    if(!validateText("tenth"))
                    {
                        return false;
                    }
                    if(!validateText("twelve"))
                    {
                        return false;
                    }
                    if(!validateText("program"))
                    {
                        return false;
                    }
                    if(!validateText("registrationno"))
                    {
                        return false;
                    }
                    if(!validateText("dept"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

        $(document).ready(
            function()
            {
                $("#sem").click(
                    function(){
                    if(!validateText("firstName"))
                    {
                        return false;
                    }
                    if(!validateText("lastName"))
                    {
                        return false;
                    }
                    if(!validateText("gender"))
                    {
                        return false;
                    }
                    if(!validateText("dp"))
                    {
                        return false;
                    }
                    if(!validateText("dob"))
                    {
                        return false;
                    }
                    if(!validateText("age"))
                    {
                        return false;
                    }
                    if(!validateText("address"))
                    {
                        return false;
                    }
                    if(!validateText("mobile"))
                    {
                        return false;
                    }
                    if(!validateText("email"))
                    {
                        return false;
                    }
                    if(!validateText("username"))
                    {
                        return false;
                    }
                    if(!validateText("password"))
                    {
                        return false;
                    }
                    if(!validateText("confirmpassword"))
                    {
                        return false;
                    }
                    if(!validateText("tenth"))
                    {
                        return false;
                    }
                    if(!validateText("twelve"))
                    {
                        return false;
                    }
                    if(!validateText("program"))
                    {
                        return false;
                    }
                    if(!validateText("registrationno"))
                    {
                        return false;
                    }
                    if(!validateText("dept"))
                    {
                        return false;
                    }
                    if(!validateText("roll"))
                    {
                        return false;
                    }
                    }
                    );
            }
            );

/*----------------------------------------Image preview-------------------------------------------------*/


