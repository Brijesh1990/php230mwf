
<?php 
error_reporting(0);
require_once("header.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["send"]))
{
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

try 
{

$mail = new PHPMailer(true);
$mail->SMTPDebug = 2;									
$mail->isSMTP();											
$mail->Host	 = 'smtp.gmail.com;';					
$mail->SMTPAuth = true;					
$mail->Username = 'bkpandey.pandey@gmail.com';				
$mail->Password = 'acppmuulryysmmwp';						
$mail->SMTPSecure = 'tls';							
$mail->Port	 = 587;
// $mail->FromName = "Tops technology";
$mail->setFrom('bkpandey.pandey@gmail.com', 'Contact us users Details');
//Provide file path and name of the attachments
// $mail->addAttachment("file.txt", "File.txt");        
$mail->addAttachment("assets/img/team-3.jpg"); //Filename is optional
$mail->addAddress($_POST["email"]);
$mail->isHTML(true);
$mail->Subject = "Customer contact us enquiry forms details";
$mail->Body = "<p>"."Customer Name :".$_POST['name']. "<br>"."Customer email :".$_POST['email']."<br>"."Customer Subject :". $_POST['subject']."<br>"."Customer Messages :". $_POST['message']. "</p>";
// $mail->AltBody = "This is the plain text version of the email content";

    $mail->send();

    // echo "Message has been sent successfully";


    echo "<script>
    
    alert('Email send successfully');
    window.location='contact.php';
    
    </script>";
} 

catch (Exception $e)
 {
    echo "Mailer Error: " . $mail->ErrorInfo;
}

}

?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" name="send">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php 
require_once("footer.php");
?>
