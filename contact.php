<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Anjuman</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
   <?php include('includes/head.php');?>

  <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php include('includes/nav.php');?>
  

  <main id="main">

   
   

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>
        <div class="row">    
            <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="info-box">
                 <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                     <p> Anjuman Pvt. ITI is situated in the heart of the city at Sadar, Nagpur. About 2kms away from railway station</p>
                    </div>
                 </div>
        
                  <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-box">
                    <i class="bx bx-envelope"></i>
                     <h3>Email Us</h3>
                    <p>anjumanitc@yahoo.co.in</p>
                    </div>
                  </div>
        
                 <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-box ">
                      <i class="bx bx-phone-call"></i>
                      <h3>Call Us</h3>
                      <p>0712-6602203</p>
                       <p>8055633584</p>
                    </div>
                  </div>
            </div>
        </div>        
        
        
        <!--<div class="row">-->
      
        <!--      <div class="container">-->
        <!--          <div class="row">-->
        <!--            <div class="col-lg-12 mt-3">-->
        <!--             <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.711656389699!2d79.07876186493492!3d21.163870335925303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c7342bffffff%3A0xc69dc78ec3bad933!2skhadijabai%20Pvt.%20ITI%2C%20Mangal%20Bazar%20Sadar%20Nagpur%2001.!5e0!3m2!1sen!2sin!4v1599634702223!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
        <!--             </div>-->
        <!--         </div>-->
        <!--    </div> -->
            
        <!--</div>-->

        <div class="row">

         

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

   <?php include('includes/footer.php');?>
  <!-- End Footer -->
 <?php include('includes/script.php');?>
  

</body>

</html>