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
        <!-- <script src="js/jquery-scrollify/jquery.scrollify.js"></script> -->
        <link rel="stylesheet" href="css/style.css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Indie+Flower');
        </style>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

      <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <section class="headerContent">
                <section class="personAvatar">
                    <div class="row">
                        <div class="col-m-12 col-12">
                            <img src="images/selfPortrait.jpg" alt="avatar" width="260" height="145">
                        </div>
                    </div>
                </section>
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
                        <div class="topnav" id="myTopnav">
                            <a href="index.php" class="active">Home</a>
                            <a href="#about">About</a>
                            <a href="#projects">Projects</a>
                            <a href="#contact">Contact</a>
                            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--         

            <!-- ----------------------------------------------------------
               ABOUT SECTION 
    ---------------------------------------------------- -->
            <section class="about" id="about">
                <div class="row">
                    <div class="col-m-12 col-6">
                        <section class="leftAboutText">
                            <header>
                                <h1>About</h1>
                            </header>
                            <nav class='navLinks'>
                                <a href="#about">About</a> /
                                <a href="#projects">Projects</a> /
                                <a href="#contact">Contact</a>
                            </nav>
                        </section>

                    </div>
                    <div class="col-m-12 col-6">
                        <section class="rightAboutText">
                            <header>
                                <h1> I am a web developer living in Nebraska.</h1>
                            </header>
                            <br>
                            <p>I've always enjoyed learning new things and that drive led me to discover front-end development
                                and back-end development.</p>
                            <br>
                            <h2>Html and CSS</h2>
                            <br>
                            <p>My journey started with learning how to create a basic web page using html and css.</p>
                            <br>
                            <ul>
                                <li>CSS3</li>
                                <li>Html5</li>
                                <li>Forms</li>
                                <li>Animations</li>
                                <li>Bootstrap</li>

                            </ul>
                            <br>
                            <h2>JavaScript</h2>
                            <br>
                            <p>Once I got a good understanding of html and css, I moved on to making my pages dynamic by adding
                                JavaScript.
                            </p>
                            <br>
                            <ul>
                                <li>Jquery</li>
                                <li>Jquery UI</li>
                                <li>Form validation</li>
                                <li>DOM element manipulation</li>

                            </ul>
                            <br>
                            <h2>PHP</h2>
                            <br>
                            <p>After learning to make my pages dynamic, I was ready to learn the backend of webpages.</p>
                            <br>
                            <ul>
                                <li>Form validation</li>
                                <li>MySQL</li>
                                <li>MVC</li>
                                <li>OOP</li>
                                <li>PDO</li>
                            </ul>
                            <br>
                            <h2>WordPress and Drupal</h2>
                            <br>
                            <p>Learning to build a website from scratch was fun but it was time to learn about content management
                                systems.
                            </p>
                            <br>
                            <ul>
                                <li>Theming</li>
                                <li>Plugins</li>
                            </ul>
                        </section>
                    </div>
                </div>
            </section>

            <!-- ----------------------------------------------------------             
                PROJECTS SECTION 
    ---------------------------------------------------- -->

            <section class="projects" id="projects">
                <div class="row">
                    <div class="col-m-12 col-6">
                        <section class="leftProjectsText">
                            <header>
                                <h1>Projects</h1>
                            </header>
                            <nav class='navLinks'>
                               <button id="project1">JavaScript form validation project</button> /
                                <button id="project2">Dynamic recipe project</button> /
                                <button id="project3">Rental application project</button>
                            </nav>
                            <nav class='navLinks'>
                                <a href="#about">About</a> /
                                <a href="#projects">Projects</a> /
                                <a href="#contact">Contact</a>
                            </nav>
                        </section>
                    </div>
                    <div class="col-m-12 col-6">
                        <section class="rightProjectsText" id="rightProjectsText">
                        <div class="overlay"> 
                            <div id="loadProjectInfo"></div>
                        </div>
                             <div id="loadData"></div>
                            
                            <!--
                           
                            <div class="projectImages">
                                <a href="https://andresmonline.com/homework/wdv341/finished_homework/phpContactFormWithDatabaseUpdate/contactForm.php">
                                <img src="images/contactFormWithEmail.png" alt="contact form with email project and database" width="460" height="145"></a>
                            </div>
                            <div class="projectImages">
                                <a href="https://andresmonline.com/homework/wdv341/finished_homework/PortfolioProjectPHP/index.php">
                                <img src="images/hairSalon.png" alt="" width="460" height="145"></a>
                            </div>
                            <div class="projectImages">
                                <a href="http://www.andresmonline.com/wdv240/project3/">
                                <img src="images/sweetbuffetchocolates.png" alt="wordpress chocolate store project" width="460" height="145"></a>
                            </div>
                            <div class="projectImages">
                                <a href="http://www.andresmonline.com/wdv240/final-project/">
                                <img src="images/faithMissionaryBaptistChurch.png" alt="wordpress fath missionary baptist church project" width="800" height="500"></a>
                            </div> -->
                        </section>
                    </div>
                </div>
            </section>

            <!-- ----------------------------------------------------------             
                CONTACT SECTION 
    ---------------------------------------------------- -->

            <section class="contact" id="contact">
                <div class="row">
                    <div class="col-m-12 col-6">
                        <section class="leftContactText">
                            <header>
                                <h1>Contact</h1>
                            </header>
                            <nav class='navLinks'>
                                <a href="#about">About</a> /
                                <a href="#projects">Projects</a> /
                                <a href="#contact">Contact</a>
                            </nav>
                        </section>
                    </div>
                    <div class="col-m-12 col-6">
                    <?php if ($validForm == false) { 
                                        echo $errorMessage; 
                                    }?>
                        <section class="rightContactText">

                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                <div class="row">
                                   
                                    <div class="col-m-2 col-2">
                                        <label for="name">Name:</label>
                                    </div>
                                    <div class="col-m-8 col-8">
                                        <span class="error">
                                            <?php echo "$inNameErr" ?>
                                        </span>
                                        <input type="text" name="name" id="name" placeholder="your name" value="<?php echo $inName ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-m-2 col-2">
                                        <label for="email">Email:</label>
                                    </div>
                                    <div class="col-m-8 col-8">
                                        <span class="error">
                                            <?php echo "$inEmailErr" ?>
                                        </span>
                                        <input type="text" name="email" id="email" placeholder="youremail@something.com" value="<?php echo $inEmail ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-m-2 col-2">
                                        <label for="message">Message:</label>
                                    </div>

                                    <div class="col-m-8 col-8">
                                        <span class="error">
                                            <?php echo "$inMessageErr" ?>
                                        </span>
                                        <textarea name="message" id="message"><?php echo $inMessage;?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-m-12 col-12">
                                        <section class="submitButtons">
                                            <!-- do not fill -->
                                            <input type="hidden" name="roboTest">
                                            <input type="submit" name="submit" value="Submit">
                                            <input type="reset" name="reset" value="Reset">
                                        </section>
                                    </div>
                                </div>
                            </form>
                            <section class="socialMediaIcons">
                            <span>
                            <a href="https://www.linkedin.com/in/andres-macias-291a70157/"><i class="fab fa-linkedin fa-3x"></i></a>
                            </span>
                            <span>
                            <a href="https://github.com/webDevAndres"><i class="fab fa-github fa-3x"></i></a>
                            </span>
                            
                            </section>
                        </section >
                    </div>
                </div>
            </section>
        </div>


        <script src="js/scripts.js"></script>
    </body>

    </html>