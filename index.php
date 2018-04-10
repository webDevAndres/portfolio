<?php
//define variables and set to empty values
 $inNameErr = "";
 $inEmailErr = "";
 $inMessageErr = "";
 $errorMessage = "";

 
 $inName = "";
 $inEmail = "";
 $inMessage = "";
 $inRoboTest = "";
 $inDate = date('m/d/Y h:i:s A');

$validForm =false;


//validation function

function validateName()
{
    global $inName, $validForm, $inNameErr;
    if (empty($_POST["name"])) {
          $inNameErr = "Name is required";
          $validForm=false;
    } else {
          $inName = test_input($_POST["name"]);
          //check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $inName)) {
            $inNameErr = "Only letters and white space allowed";
            $validForm = false;
            // cannot be all spaces
        } elseif (!preg_match("/^[^-\s][a-zA-Z \s-]*$/", $inName)) {
            $inNameErr = "Cannot be all spaces";
            $validForm = false;
        }
    }
}

function validateEmail()
{
    global $inEmail, $validForm, $inEmailErr;
    $inNameErr = "";
    if (empty($_POST["email"])) {
        $inEmailErr = "Email is required";
        $validForm = false;
    } else {
        $inEmail = test_input($_POST["email"]);
        //check to see if e-mail address is well formed
        if (!filter_var($inEmail, FILTER_VALIDATE_EMAIL)) {
            $inEmailErr = "Invalid email format";
            $validForm = false;
        }
    }
}




function validateMessage()
{
    global $inMessage, $validForm, $inMessageErr;
    if (empty($_POST["message"])) {
        $inMessageErr = "message is required";
        $validForm = false;
      
    } else {

          $inMessage = test_input($_POST["message"]);
              
           // cannot be all spaces
        if (preg_match("/^[^-\s][<>]*$/", $inMessage)) {
            $inMessageErr = "special characters not allowed";
            $validForm = false;

        }
    }
}
  

function roboTest()
{
    global $inRoboTest,$validForm;
    if (!empty($_POST["roboTest"])) {
        $roboTest = test_input($_POST["roboTest"]);
        $validForm= false;
    }
}



//form Validation
if (isset($_POST['submit'])) {
    $inName = $_POST["name"];
    $inEmail = $_POST["email"];
    $inMessage = $_POST["message"];
    $inRoboTest = $_POST["roboTest"];

    $validForm = true; //form flag is set to true

    validateName();
    validateEmail();
    validateMessage();
    roboTest();

    if($validForm) {
        header("location: emailSuccess.html");
    }
    else {
        $errorMessage = "<h1 class='errorMessage'>Something went wrong please try again later</h1>";
        
        echo "<script>
        window.location.hash = '#contact';
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


if ($validForm) {
    include 'Email.php';
    $clientEmail = new Email(""); //instantiate
    $clientEmail->setRecipient("macias.andres02@gmail.com");           //person receiving email
    $clientEmail->setSender("contact@andresmonline.com");                        //the email that is sending the form
    $clientEmail->setSubject("New contact form Submission from andresmonline");
    $clientEmail->setMessage("Customer inquiry.\nName: " . $inName . "\nEmail: " . $inEmail . "\nMessage: " . $inMessage ."\nSubmitted: " . $inDate);
    $clientEmail->sendClientMail();                     //create and send email to client
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>andresmonline</title>

    <link rel="stylesheet" href="css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Indie+Flower');
    </style>



    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>
</head>

<body>

<section class="headerContent">
    <header>
        <div class="row">
            <div class="col-m-12 col-12">
                <h1>Andres Macias</h1>
                <p>Web Developer</p>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="col-m-12 col-12">
            <button id="backToTop" onclick="goToTop()" title="go to top">Top</button>

            <div class="topnav" id="myTopnav">
                <a href="index.php">Home</a>
                <a href="#about" id="aboutSection">About</a>
                <a href="#projects" id="projectsSection">Projects</a>
                <a href="#contact" id="contactSection">Contact</a>
                <a href="resume/my-resume.pdf" target="_blank">Resume</a>
                <a href="javascript:void(0);" class="icon" onclick="mobileNav()">&#9776;</a>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <section class="about" id="about">
        <div class="row">
            <div class="col-m-12 col-6">
                <section class="leftAboutText">
                    <header>
                        <h1>About</h1>
                    </header>
                    <div class="personAvatar">
                        <img src="images/Macias.gif" alt="avatar" width="260" height="145">
                    </div>
                </section>
            </div>
            <div class="col-m-12 col-6">
                <section class="rightAboutText">
                    <p>I've always enjoyed learning new things, and that drive led me to discover front-end development and
                        back-end development.</p>
                    <h2>Html and CSS</h2>
                    <p>My journey started with learning how to create a basic web page using HTML and CSS.</p>
                    <ul>
                        <li>CSS3</li>
                        <li>HTML5</li>
                        <li>Forms</li>
                        <li>Bootstrap</li>

                    </ul>
                    <h2>JavaScript</h2>
                    <p>Once I had a better understanding of HTML and CSS, I moved onto making my pages dynamic by adding JavaScript.
                    </p>
                    <ul>
                        <li>jQuery</li>
                        <li>JavaScript</li>
                        <li>Form validation</li>
                    </ul>
                    <h2>PHP</h2>
                    <p>After learning to make my pages dynamic, I was ready to move onto the back-end part of development.</p>
                    <ul>
                        <li>PHP form validation</li>
                        <li>MySQL</li>
                        <li>MVC</li>
                        <li>OOP</li>
                        <li>PDO</li>
                    </ul>
                    <h2>WordPress</h2>
                    <p>I learned how to use plugins, themes and how to add custom CSS to a theme.</p>
                </section>
            </div>
        </div>
    </section>
    <section class="projects" id="projects">
        <div class="row">
            <div class="col-m-12 col-6">
                <section class="leftProjectsText">
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <div id="modalContent"></div>
                    </div>
                    <header>
                        <h1>Projects</h1>
                    </header>
                </section>
            </div>
            <div class="col-m-12 col-6">
                <section class="rightProjectsText" id="rightProjectsText">
                    <div class="projectsButtonSection">
                        <div class="row">
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle1" id="project12">DMACC portfolio Day group project</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle2" id="project13">What you dont see INOA site</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle3" id="project5">Wordpress chocolate store</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle1" id="project6">Wordpress FMBC project</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle2" id="project2">Dynamic recipe project</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle1" id="project1">JavaScript form validation project</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle3" id="project3">Rental application project</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle2" id="project4">PHP Contact Form with database</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle2" id="project7">PHP admin system login</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle3" id="project8">Portfolio day splash page entry</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle1" id="project9">Data visualization D3 example</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle2" id="project10">Embedding videos project</button>
                            </div>
                            <div class="col-m-4 col-3">
                                <button class="projectButton projectButtonStyle3" id="project11">PayPal express project</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="row">
            <div class="col-m-12 col-6">
                <section class="leftContactText">
                    <header>
                        <h1>Contact</h1>
                    </header>
                </section>
            </div>

            <div class="col-m-12 col-6">
                <section class="rightContactText" id="contact">
                    <?php if ($validForm == false) 
                                { 
                                    echo $errorMessage; 
                                }?>
                    <form id="myForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                        <div class="row">
                            <div class="col-m-2 col-2">
                                <label for="name">Name:</label>
                            </div>
                            <div class="col-m-8 col-8">
                                <span class="error"><?php echo "$inNameErr" ?></span>
                                <input type="text" name="name" id="name" placeholder="your name" value="<?php echo $inName ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-m-2 col-2">
                                <label for="email">Email:</label>
                            </div>
                            <div class="col-m-8 col-8">
                                <span class="error"><?php echo "$inEmailErr" ?></span>
                                <input type="text" name="email" id="email" placeholder="youremail@something.com" value="<?php echo $inEmail ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-m-2 col-2">
                                <label for="message">Message:</label>
                            </div>

                            <div class="col-m-8 col-8">
                                <span class="error"><?php echo "$inMessageErr" ?></span>
                                <textarea name="message" id="message"><?php echo $inMessage;?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-m-12 col-12">
                                <div class="submitButtons">
                                    <input type="hidden" name="roboTest">
                                    <button class="btnForm" type="submit" name="submit" value="Submit">Submit</button>
                                    <button class="btnForm" type="reset" name="reset" value="Reset">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <section class="socialMediaIcons">
                        <div class="row">
                            <div class="col-m-12 col-12">
                                    <a href="https://www.linkedin.com/in/andres-macias-291a70157/" target="_blank" rel="noopener"><i class="fab fa-linkedin fa-3x"></i></a>
                                    <a href="https://github.com/webDevAndres" target="_blank" rel="noopener"><i class="fab fa-github fa-3x"></i></a>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
        
    </section>
       
    </div>
    <div class="footer">
            <div class="row">
                <div class="col-m-12 col-12">
                    <p>&copy;<span id="year"></span>andresmonline.com</p>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>