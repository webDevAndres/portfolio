<?php 
include './src/php/services/formValidation/validateEmailForm.php'; 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Front-end Web Developer based in La Vista, Nebraska. Experienced in building custom websites.">
    <meta name="theme-color" content="#239CEC">
    <title>andresmonlines | Front-end Developer</title>
    <!-- icons -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- status bar -->
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- splash screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="splashscreens/iphone5_splash.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"
        rel="apple-touch-startup-image" />
    <link href="splashscreens/iphone6_splash.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)"
        rel="apple-touch-startup-image" />
    <link href="splashscreens/iphoneplus_splash.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)"
        rel="apple-touch-startup-image" />
    <link href="splashscreens/iphonex_splash.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)"
        rel="apple-touch-startup-image" />
    <link href="splashscreens/ipad_splash.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)"
        rel="apple-touch-startup-image" />
    <link href="splashscreens/ipadpro1_splash.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)"
        rel="apple-touch-startup-image" />
    <link href="splashscreens/ipadpro2_splash.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)"
        rel="apple-touch-startup-image" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105627616-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-105627616-1');
</script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/styles.css">
    <link rel="manifest" href="manifest.json">

</head>

<body id="home" data-spy="scroll" data-target="#navbar" data-offset="65">
    <header>
        <nav id="navbar" class="navbar navbarShadow fixed-top navbar-expand-lg navbar-light bg-white">
            <a class="navbar-brand" href="/"><img src="favicon.ico" alt="andresmonline logo"><strong>ndres
                    macias</strong></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-secondary ml-auto">
                        <a class="nav-link" href="#home">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="#skills">SKILLS</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="#experience">EXPERIENCE</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron bg-white">
            <img src="src/assets/images/Macias.jpg" alt="resume image" class="img-thumbnail selfPortrait mr-auto d-block">
            <h1 class="display-4">Front-end Developer based in La Vista, Nebraska.</h1>
            <p class="lead">Experienced in creating custom websites.</p>
        </div>
    </header>
    <div class="container-fluid" id="animatedBackground">
        <main>
            <section class="skills" id="skills">
                <div class="row justify-content-between">
                    <div class="col-sm-6">
                        <h2 class="text-center skillsHeader rounded-top border-top border-left border-right border-info">DEVELOPER</h2>
                        <div class="card-group">
                            <div class="card border-top-0 border-info">
                                <div class="card-body">
                                    <h5 class="card-title text-center">FRONT-END</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-secondary text-center">HTML5</li>
                                        <li class="list-group-item text-secondary text-center">CSS3</li>
                                        <li class="list-group-item text-secondary text-center">JavaScript</li>
                                        <li class="list-group-item text-secondary text-center">Bootstrap</li>
                                        <li class="list-group-item text-secondary text-center">Git and Github</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card border-top-0 border-info">
                                <div class="card-body">
                                    <h5 class="card-title text-center">BACK-END</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item text-secondary text-secondary text-center">PHP</li>
                                        <li class="list-group-item text-secondary text-secondary text-center">MVC</li>
                                        <li class="list-group-item text-secondary text-secondary text-center">OOP</li>
                                        <li class="list-group-item text-secondary text-secondary text-center">MySQL</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <h2 class="text-center textWrap skillsHeader rounded-top border-top border-left border-right border-info">TRANSFERABLE
                            SKILLS</h2>
                        <div class="card border-top-0 border-info">
                            <div class="card-body">
                                <h5 class="card-title text-center">SOFT SKILLS</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-secondary text-center">Communication</li>
                                    <li class="list-group-item text-secondary text-center">Teamwork</li>
                                    <li class="list-group-item text-secondary text-center">Approachability and
                                        Helpfulness</li>
                                    <li class="list-group-item text-secondary text-center">Problem
                                        solving</li>
                                    <li class="list-group-item text-secondary text-center">Time
                                        management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="portfolio container-fluid pb-5 rounded border border-info" id="portfolio">
                <h2 class="text-center skillsHeader">PORTFOLIO</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4 pb-5">
                        <div class="card">
                            <img class="card-img-top" src="src/assets/images/dmaccPortfolioDaySite.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">DMACC PORTFOLIO DAY</h5>
                                <p class="card-text">
                                    Displays the May 2018 graduating students from the Web, Graphic Design,
                                    Photography, and Video production departments.
                                </p>
                                <a href="http://www.dmaccportfolioday.com/" class="btn btn-primary btn-block" target="_blank"
                                    rel="noopener noreferrer">Visit dmaccportfolioday.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 pb-5">
                        <div class="card ">
                            <img class="card-img-top" src="src/assets/images/whatYouDontSee.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">WHAT YOU DONT SEE</h5>
                                <p class="card-text">
                                    Website for the Iowa Narcotics Officers Association
                                    as a response to a clearly identified public need for more youth interdiction
                                    training.
                                </p>
                                <a href="https://whatyoudontsee.com/" class="btn btn-primary btn-block" target="_blank"
                                    rel="noopener noreferrer">Visit whatyoudontsee.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 pb-5">
                        <div class="card ">
                            <img class="card-img-top" src="src/assets/images/copperstoneArt.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Copperstone Art</h5>
                                <p class="card-text">Website for a Graphic Design Artist in Iowa to showcase his work
                                    and be an introduction to using the Drupal CMS.</p>
                                <a href="https://copperstoneart.andresmonline.com/" class="btn btn-primary btn-block"
                                    target="_blank" rel="noopener noreferrer">Visit copperstoneart.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 pb-5">
                        <div class="card ">
                            <img class="card-img-top" src="src/assets/images/sweetbuffetchocolates.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"> The Sweet Buffet</h5>
                                <p class="card-text">Introduction to using the Wordpress CMS and the various themes and
                                    plugins to develop an E-commerce site.</p>
                                <a href="http://www.andresmonline.com/wdv240/project3/" class="btn btn-primary btn-block"
                                    target="_blank" rel="noopener noreferrer">Visit sweetbuffetschocolates.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="experience" id="experience">
                <div class="row justify-content-between">
                    <div class="col">
                        <div class="card-group">
                            <div class="card border-info">
                                <div class="card-body">
                                    <h2 class=" card-title text-center">EDUCATION</h2>
                                    <dl class="list-group">
                                        <dt class="list-group-item d-md-flex justify-content-between align-items-center">Des
                                            Moines Area Community College</dt>
                                        <dd class="text-secondary">- Date: August 2016 - May 2018</dd>
                                        <dd class="text-secondary">- Web Development, AAS</dd>
                                        <dd class="text-secondary">- Digital Marketing Certificate</dd>
                                        <dt class="list-group-item">Iowa State University</dt>
                                        <dd class="text-secondary">- Date: August 2013 - May 2016</dd>
                                        <dd class="text-secondary">- Psychology, BS</dd>
                                    </dl>
                                    <div class="resumeContainer">
                                        <h5 class="text-center">RESUME</h5>
                                        <p class="d-flex justify-content-center">
                                            <a id="resumeDownload" href="src/assets/resume/Andres_Macias_Resume_2018.pdf"
                                                download>
                                                <img src="src/assets/images/document.svg" alt="Web developer resume"
                                                    class="img-thumbnail resumeImage">
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-info">
                                <div class="card-body">
                                    <h2 class="card-title text-center">EXPERIENCE</h2>
                                    <dl class="list-group">
                                        <dt class="list-group-item d-md-flex justify-content-between align-items-center">Des
                                            Moines Area Community College/Iowa Narcotics Officers Association Academic
                                            Project</dt>
                                        <dd class="text-secondary">- Wordpress Developer</dd>
                                        <dd class="text-secondary">- whatyoudontsee.com</dd>
                                        <dd class="text-secondary">- Date: March 2018 - May 2018</dd>
                                        <dd class="text-secondary">- Team based project</dd>
                                        <dd class="text-secondary">- This project was handed down to us to maintain and
                                            update</dd>
                                        <dd class="text-secondary">- Set up county functionality to be ready to use for
                                            the next group</dd>
                                        <dd class="text-secondary">- Tools: Wordpress, CSS, Git, Github, Trello</dd>

                                        <dt class="list-group-item d-md-flex justify-content-between align-items-center">Des
                                            Moines Area Community College Academic Project </dt>
                                        <dd class="text-secondary">- Full-stack Developer</dd>
                                        <dd class="text-secondary">- dmaccportfolioday.com</dd>
                                        <dd class="text-secondary">- Date: April 2018 - May 2018</dd>
                                        <dd class="text-secondary">- Team based project</dd>
                                        <dd class="text-secondary">- Contributed to design and assisted with backend
                                            functionality</dd>
                                        <dd class="text-secondary">- Tools: HTML, CSS, Bootstrap, AJAX, Drupal, PHP,
                                            Git, Github, Slack</dd>
                                        <dt class="list-group-item d-md-flex justify-content-between align-items-center">copperstone
                                            Art</dt>
                                        <dd class="text-secondary">- Drupal Developer</dd>
                                        <dd class="text-secondary">- Date: May 2018 - Present</dd>
                                        <dd class="text-secondary">- Designed and developed site</dd>
                                        <dd class="text-secondary">- Tools: HTML, CSS, Drupal, PHP, Git, Github</dd>

                                        <dt class="list-group-item d-md-flex justify-content-between align-items-center">dsmtrumpetguy,
                                            LLC</dt>
                                        <dd class="text-secondary">- Full-stack Developer</dd>
                                        <dd class="text-secondary">- Date: April 2017 - Present</dd>
                                        <dd class="text-secondary">- First project</dd>
                                        <dd class="text-secondary">- Developed and designed site</dd>
                                        <dd class="text-secondary">- set up hosting</dd>
                                        <dd class="text-secondary">- Tools: HTML, CSS, Bootstrap, PHP</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact" id="contact">
                <div class="row justify-content-between">
                    <div class="col">
                        <div class="card-group">
                            <div class="card border-info">
                                <div class="card-body d-flex align-items-center">
                                    <div class="socialMediaTitle">
                                        <h2 class="card-title text-center">FIND ME ON:</h2>
                                    </div>
                                    <div class="socialMediaContainer">
                                        <a href="https://github.com/webDevAndres" target="_blank" rel="noopener noreferrer">Github
                                            <img src="src/assets/images/github.svg" alt="Social media link to guthub"
                                                class="img-thumbnail socialMediaImage mx-auto d-block ">
                                        </a>
                                        <br>
                                        <a href="https://twitter.com/webDevAndres" target="_blank" rel="noopener noreferrer">Twitter
                                            <img src="src/assets/images/Twitter.svg" alt="Social media link to twitter"
                                                class="img-thumbnail socialMediaImage mx-auto d-block ">
                                        </a>
                                        <br>
                                        <a href="https://www.linkedin.com/in/andres-macias-291a70157/" target="_blank"
                                            rel="noopener noreferrer">LinkedIn
                                            <img src="src/assets/images/linkedin.svg" alt="Social media link to linkedin"
                                                class="img-thumbnail socialMediaImage mx-auto d-block ">
                                        </a>

                                    </div>
                                </div>

                            </div>
                            <div class="card border-info">
                                <div class="card-body">
                                    <h2 class="card-title text-center">CONTACT ME</h2>
                                    <form id="contact_form" method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'
                                        class="needs-validation mt-3" novalidate>
                                        <div class="form-group row">
                                            <label for="form_name" class="col-lg-2 col-form-label">Name</label>
                                            <div class="col-lg-10">
                                                <input type="text" id="form_name" name="name" placeholder="Name" class="form-control"
                                                    required minlength="2" value="<?php echo $inName ?>">
                                                <span class="error">
                                                    <?php echo $inNameErr ?></span>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">

                                                    Please enter your name!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="form_email" class="col-lg-2 col-form-label">Email address</label>
                                            <div class="col-lg-10">
                                                <input type="email" class="form-control" id="form_email" name="email"
                                                    placeholder="Enter email" required value="<?php echo $inEmail ?>">
                                                <span class="error">
                                                    <?php echo $inEmailErr ?></span>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">

                                                    The email is required!
                                                </div>

                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label for="form_message" class="col-lg-2 col-form-label">Message</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" id="form_message" name="message" rows="3"
                                                    required><?php echo $inMessage ?></textarea>
                                                <?php echo $inMessageErr ?>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    <span class="error">
                                                        <?php echo $inMessageErr ?></span>
                                                    Message is required
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <div class="col-10 offset-2">
                                                <input type="hidden" name="roboTest">
                                                <button type="submit" name="submit" class="btn btn-outline-primary btn-lg">Submit</button>
                                                <button type="reset" class="btn btn-outline-primary btn-lg">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div> <!-- end container-fluid -->
    <footer class="footer">
        <div class="container">
            <span id="copyright" class="text-muted">Copyright&copy; 2018 andresmonline.</span>
            <span> <a href='https://www.freepik.com/free-vector/abstract-background-with-a-watercolor-texture_886474.htm'
                    target="_blank" rel="noopener noreferrer">background image Designed by Kjpargeter</a></span>
            <span>Icons made by <a href="http://www.freepik.com" title="Freepik" rel="noopener noreferrer">Freepik</a>
                from <a href="https://www.flaticon.com/" title="Flaticon" rel="noopener noreferrer">www.flaticon.com</a>
                is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0"
                    target="_blank" rel="noopener noreferrer">CC 3.0 BY</a></span>
        </div>
    </footer>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="./src/js/home.js"></script>
    <!-- smooth scroll -->
    <script src="./src/js/smooth-scroll/smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>

</body>


</html>