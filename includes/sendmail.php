<?php require_once'./controller/authController.php'; ?>
<!--==== Contact Form Start ====-->
<section style="background: url(assets/img/gallery/section_bg04.jpg)no-repeat; width: 100%; height: 700px;">
        <div class="contact-form-wrapper">
            <div class="contact-form-flex-container">
                <div class="contact-form sign">
                    <h1>If Not Now, When? Let’s Work Together!</h1>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. 
                    Quis ipsum suspendisces gravida. Risus commodo viverra.</p>
                    <img src="assets/img/gallery/sin.png">
                </div>
                <div class="contact-form form">
                    <?php if($msg != ''): ?>
                    <div style="color:red; text-align:center;" class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
                    <?php endif; ?>
                    <form class="form-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="text" name="fullname" value="<?php echo isset($_POST['fullname']) ? $fullname : ''; ?>" placeholder="Full Name">
                        <input type="email" name="email" placeholder="Email Address" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                        <textarea name="message" cols="5" rows="5" placeholder="Your Message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                        <input type="submit" name="send" value="Send Message">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--==== Contact Form End ====-->