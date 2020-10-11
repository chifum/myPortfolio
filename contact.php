<?php require_once'./controller/authController.php'; ?>
<!-- Header Start -->
<?php include'./includes/header.php'; ?>
<!-- Header End -->
<body>
    <!-- Nav Menu Start -->
    <?php include'./includes/nav.php'; ?>    
    <!-- Nav Menu End -->

    <!--About Intro Section Start -->
    <div class="about-intro-flex-container" style="background: url(assets/img/hero2.jpg);">
        <div class="about-intro">
            <h1>My Contact</h1>
            <h5><a href="index.html">Home / My Contact</a></h5>
        </div>
    </div>
    <!--About Intro Section End -->
    <!-- Contact Form Area Start -->
    <div class="reachme-flex-container">
        <div class="reachme-box reachme-left">
        
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php if($msg != ''): ?>
                <div style="color:red; text-align:center;" class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                <?php endif; ?>
                <h4>Get in Touch</h4>
                <textarea name="message" cols="30" rows="10" placeholder="Enter Message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                <input type="text" name="fullname" placeholder="Enter your name" value="<?php echo isset($_POST['fullname']) ? $fullname : ''; ?>">
                <input type="email" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                <div class="subject">
                    <input type="text" name="subject" placeholder="Enter Subject" value="<?php echo isset($_POST['subject']) ? $subject : ''; ?>">
                </div>
                <input type="submit" name="submit" value="send">
            </form>
        </div>
        <div class="reachme-box reachme-right">
            <div class="reachme-right-address">
                <span><i class="ti-home"></i></span>
                <div class="add">
                    <h3>Ikeja, Lagos.</h3>
                    <p>MK Abiola Garden</p>
                </div>
            </div>
            <div class="reachme-right-phone">
                <span><i class="ti-tablet"></i></span>
                <div class="add-phone">
                    <h3>+234 703 537 2400</h3>
                    <p>Mon to Fri 9am to 6pm</p>
                </div>
            </div>
            <div class="reachme-right-email">
                <span><i class="ti-email"></i></span>
                <div class="add-email">
                    <h3>chifum@gmail.com</h3>
                    <p>Send us your query anytime!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Area End -->
    <!--==== Footer Start ====-->
    <?php include'./includes/footer.php'; ?>
    <!--==== Footer End ====-->
</body>
</html>