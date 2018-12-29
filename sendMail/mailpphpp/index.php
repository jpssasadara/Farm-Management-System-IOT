
    <br />
    <div class="inner contact">
        <!-- Form Area -->
        <div class="contact-form">
            <h1 align="center">SoftAOX</h1>
            <h2 align="center">Send an Email via Gmail SMTP Server in PHP using PHPMailer</h2>
            <hr>
            <!-- Form -->
            <form action="mail.php" method="post">
                <!-- Left Inputs -->
                <div class="col-xs-6">

                    <h3>Enter Your Email ID and Password</h3>
                    <p>Before using your Gmail ID and Password check whether your <a href="https://support.google.com/accounts/answer/6010255?hl=en" target="_blank">Gmail less secure apps</a> is <b>on</b> or <b>not</b>.</p>
                    <input type="text" name="email" required class="form" placeholder="Enter your email ID" />

                    <input type="password" name="password" required class="form" placeholder="Password" />

                </div>
                <!-- End Left Inputs -->

                <!-- Right Inputs -->
                <div class="col-xs-6">

                    <h3>To Address</h3>

                    <input type="email" name="toid" required class="form" placeholder="To : Email Id " />

                    <input type="text" name="subject" required class="form" placeholder="Subject" />

                    <textarea name="message" class="form textarea" placeholder="Message"></textarea>
                </div>
                <!-- End Right Inputs -->

                <!--  Submit -->
                    <button type="submit" id="submit" name="send" class="form-btn semibold">Send Message</button>
                <!-- End Submit -->
                <!-- Clear -->
                <div class="clear"></div>
            </form>

        </div>
        <!-- End Contact Form Area -->
    </div>
