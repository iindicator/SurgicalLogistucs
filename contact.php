<?php 
$page_title = "For your specialised delivery requirements, call us at 📞 0800 SURGICAL";
$page_description = "Call 0800 SURGICAL for your specialised delivery requirements. Alternatively you can open an account on our website at www.sugicalcouriers.co.nz or send us an email at info@surgicalcouriers.co.nz"; 
?>

<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>
   
    <img src="assets/header1.jpg" class="img-fluid" alt="Responsive image">
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Contact us</h1>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-12 mb-6">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51065.117902155056!2d174.5884715055413!3d-36.8767132534429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d41cb3c6e1eeb%3A0x500ef6143a2cb60!2sHenderson%2C+Auckland%2C+New+Zealand!5e0!3m2!1sen!2sau!4v1500942589658"></iframe>
                <hr>
            </div>
            
            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="col-lg-8 mb-4">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-danger">Send Message</button>
                </form>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Contact Details</h3>
                <p>
                    PO Box 21374
                    <br>Henderson, Auckland 0650
                    <br>
                </p>
                <p>
                    <abbr title="Phone">P</abbr>: 0800 SURGICAL (787 442)
                </p>
                <p>
                    <abbr title="Email">E</abbr>: <a href="mailto:info@surgicalcouriers.co.nz">info@surgicalcouriers.co.nz
                    </a>
                </p>
                <p>
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
                </p>
                <hr>
                <h3>Our Promises</h3>
                <p>
                    Our courier services are developed on a delivery model that ensures our clients and their customers experience exceptional customer service.
                </p>
                <hr>

                <h3>Vision</h3>
                <p>
                    We at Surgical Couriers Ltd are built on the vision of providing première logistical solutions to the healthcare industry. Call us for a confidential discussion on how surgical couriers can facilitate in achieving your business objectives.
                </p>
            </div>



        </div>
        <!-- /.row -->



    </div>
    <!-- /.row -->
    <!-- /.container -->

    <!-- Footer -->
    <?php include("includes/footer.php"); ?>