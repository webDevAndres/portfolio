<?php

//define variables and set to empty values
 $inNameErr = "";
 $inEmailErr = "";
 $inMessageErr = "";

 
 $inName = "";
 $inEmail = "";
 $inMessage = "";
 $inRoboTest = "";



//validation function

function validateName()
{
    global $inName, $inNameErr;
    if (empty($_POST["name"])) {
          $inNameErr = "Name is required";
         
    } else {
          $inName = test_input($_POST["name"]);
    }
}

function validateEmail()
{
    global $inEmail, $inEmailErr;

    if (empty($_POST["email"])) {
        $inEmailErr = "Email is required";
    } else {
        //check to see if e-mail address is well formed
        if (filter_var($inEmail, FILTER_VALIDATE_EMAIL)) {
            $inEmail = test_input($_POST["email"]);
        }
        else {
        $inEmailErr = "not valid format";
        }
    }
}

function validateMessage()
{
    global $inMessage, $inMessageErr;
    if (empty($_POST["message"])) {
        $inMessageErr = "message is required";
      
    } else {
          $inMessage = test_input($_POST["message"]);
          
    }
}
  

function roboTest()
{
    global $inRoboTest;
    if (!empty($_POST["roboTest"])) {
        $roboTest = test_input($_POST["roboTest"]);

    }
}



//form Validation
if (isset($_POST['submit'])) {
    $inName = $_POST["name"];
    $inEmail = $_POST["email"];
    $inMessage = $_POST["message"];
    $inRoboTest = $_POST["roboTest"];

    

    validateName();
    validateEmail();
    validateMessage();
    roboTest();
 
    if ($inNameErr == '' && $inEmailErr == '' && $inMessageErr == '' && $inRoboTest == '') {
        include './src/php/services/emailHandler/Email.php';
        $clientEmail = new Email(""); //instantiate
        $clientEmail->setRecipient("macias.andres02@gmail.com");           //person receiving email
        $clientEmail->setSender("contact@andresmonline.com");                        //the email that is sending the form
        $clientEmail->setSubject("New contact form Submission from andresmonline");
        $clientEmail->setMessage("New form submission.\nName: " . $inName . "\nEmail: " . $inEmail . "\nMessage: " . $inMessage);
        $clientEmail->sendClientMail(); //create and send email to client
            header("location: emailSuccess.html");      
    }
    else {
        echo "<script>
        window.location.hash = '#contact_form';
        </script>";
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>