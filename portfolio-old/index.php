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
                <span class="error">
                    <?php echo "$inNameErr" ?></span>
                <input type="text" name="name" id="name" placeholder="your name" value="<?php echo $inName ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-m-2 col-2">
                <label for="email">Email:</label>
            </div>
            <div class="col-m-8 col-8">
                <span class="error">
                    <?php echo "$inEmailErr" ?></span>
                <input type="text" name="email" id="email" placeholder="youremail@something.com" value="<?php echo $inEmail ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-m-2 col-2">
                <label for="message">Message:</label>
            </div>

            <div class="col-m-8 col-8">
                <span class="error">
                    <?php echo "$inMessageErr" ?></span>
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
            <p>&copy;<span id="year"></span>andresmonline.com. All rights reserved.</p>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>

</html>