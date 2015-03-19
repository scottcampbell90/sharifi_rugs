<!-- Header =============================================== -->
<?php include_once "includes/header.php" ?>

<!-- Nav ================================================== -->
<?php include_once "includes/nav.php" ?>

<!-- Body ================================================= -->
<div class="container body contact">
    
        <!--                                                                 
        .contact
            ==================================================================
            ==== -->

            <div class="row">
                <div class="col-md-4">
                <legend>Contact Us</legend>
                <p>If you have any questions about one of our rugs please give us a call Monday-Friday 9am-6pm or come visit our downtown location.</p>
                <h4>Address</h4>
                <p>1011 SW Washington St</p>
                <p>Portland, OR 97205</p>

                <h4>Phone</h4>
                <p>(503) 224-1421</p>
                </div>

                <div class="col-md-8">
                    <legend>Location</legend>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.4303390335135!2d-122.68157500000002!3d45.521544999999925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950a03775f1217%3A0x7b3885c4be22e4d!2sAli+Sharifi+Rugs%2C+Inc.!5e0!3m2!1sen!2sus!4v1400185144259" width="100%" height="300" frameborder="0" style="border:0"></iframe>
                </div><!-- /.map -->
            </div><!-- /.row -->  
            <div class="row">
                <div class="col-md-4 social">
                    <legend>Social</legend>
                    <a href="#"><img src="img/social/facebook.png"></a>
                    <a href="#"><img src="img/social/instagram.png"></a>
                    <a href="#"><img src="img/social/twitter.png"></a>
                    <a href="#"><img src="img/social/yelp.png"></a>
                </div>
                <form class="col-md-8 email-form" action="mailer.php" method="post">
                    <fieldset>
                    <!-- Form Name -->
                    <legend>Email</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="name">Name</label>  
                        <input id="name" name="name" type="text" placeholder="Your Name" class="form-control input-md">
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="email">E-mail</label>  
                        <input id="email" name="email" type="text" placeholder="Your E-mail Address" class="form-control input-md">
                    </div>
                    <!-- Subject Area -->
                    <div class="form-group">
                        <label class="control-label" for="subject">Subject</label>
                        <input class="form-control" id="subject" name="subject" placeholder="Subject...">
                    </div>
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="control-label" for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Your message here..."></textarea>
                    </div>
                    <input class="send" type="submit" value="Send">
                    </fieldset>
                </form>

                
            </div><!-- /.row -->
        </div><!-- /.container -->
                
    </div><!-- /.body -->
<div class="copyright">
                    <p>All rights reserved Ali Sharifi Rugs Inc. &copy; 2014</p>
                </div>
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>

</body>

</html>
