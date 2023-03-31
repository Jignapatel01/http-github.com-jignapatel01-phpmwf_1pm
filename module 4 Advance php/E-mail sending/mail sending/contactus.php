<?php

require_once('header.php');
require_once('navigation.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST["addcontact"]))
{
    require_once("PHPMailer\PHPMailer.php");
    require_once("PHPMailer\SMTP.php");
    require_once("PHPMailer\Exception.php");

  
    $nm=$_POST["name"];
    $em=$_POST["email"];
    $fnm=$_POST["fname"];
    $lnm=$_POST["lname"];
    $phn=$_POST["phone"];
    $msg=$_POST["message"];
  
    $mail = new PHPMailer(true);
    try {
   

        //Server settings
        $mail->SMTPDebug = true;                                     //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'jigna434@gmail.com';                     //SMTP username
        $mail->Password   = 'jftozrdjqmgudnbn';                               //SMTP password
        $mail->SMTPSecure = 'TLS';                                //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($_POST["email"], 'Mail sending');
        $mail->addAddress('jigna434@gmail.com', 'Contact us mail sending');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contact with us email sending data';
        $mail->Body    = "<img src='https://www.google.com/url?sa=i&url=https%3A%2F%2Fgifer.com%2Fen%2Fgifs%2Femail&psig=AOvVaw3WZ8dp_6oCrKu7kKNVVlLj&ust=1679648379025000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCKDQ-v3X8f0CFQAAAAAdAAAAABBj' width='30%' height='150px'"."<br>".
                         "Customer name is :".$nm."<br>"."Email address is:".$em."<br>"."First name is :".$fnm."<br>"."Last name is:".$lnm."<br>"."Phone no is :".$phn."<br>"."Message is :".$msg."<br>";

        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();

        
        echo "Thank you for contact with us";
        header("refresh:2,emailmsg.php");
        
        
    } 
    catch (Exception $e) 
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

?>
<!-- content start here-->
<div class="container-fluid content  mt-1 p-5">
    <div class="row">
        <div class="col-md-4 shadow bg-light p-3 m-3"><h5 align="center" class="bg-dark text-white p-2">why Contact with us</h5>
             <ul class="sidebar-link">
                <li><a href="">24x7 support</a></li>
                <li><a href="">Online Shopping</a></li>
                <li><a href="">Online payments</a></li>
                <li><a href="">Return Policy</a></li>
                <li><a href="">Refund policy</a></li>
                <li><a href="">Home delivery</a></li>
            </ul>

        <h5 align="center" class="bg-dark text-white p-2">Get in Touch with us</h5>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7791544.479773694!2d69.79632200890134!3d17.533030526153276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae136926b14b2d%3A0xd3604d0e3896d703!2sFlipkart%20Bangalore%20office%20-%20B%20block!5e0!3m2!1sen!2sin!4v1672387243619!5m2!1sen!2sin" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        
        <div class="col-md-7  p-3 m-3">
            <div class="card">
                <div class="card-header">Contact us Form <button type="button" class="btn btn-sm btn-dark float-end">View more >></button></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 ms-5  p-5">
                            <form method="post" >
                                <h3 class="login-heading p-2">Contact Form</h3>
                                <hr class="border border-1 border-dark w-50">
                                <div class="form-group col-md-9 mt-3">
                                    <input type="text" name="name" placeholder="Name *" required class="form-control">
                                </div>

                                <div class="form-group col-md-9 mt-3">
                                    <input type="text" name="email" placeholder="Email *" required class="form-control">
                                </div>

                                <div class="row">
                                <div class="form-group col-md-4 mt-3">
                                    <input type="text" name="fname" placeholder="FirstName *" required class="form-control">
                                </div>
                                
                                <div class="form-group col-md-5 mt-3">
                                    <input type="text" name="lname" placeholder="LastName *" required class="form-control">
                                </div>
                                </div>
                        
                                <div class="form-group col-md-9 mt-3">
                                    <input type="number" name="phone" placeholder="Phone *" required class="form-control">
                                </div>
                        
                        
                                <div class="form-group col-md-9 mt-3">
                                    <textarea name="message" placeholder="Message *" required class="form-control"></textarea>
                                </div>
                        
                                <div class="form-group col-md-9 mt-3">
                                    <input type="submit" name="addcontact" class="btn btn-lg btn-success" value="Send">

                                    <input type="submit" name="reset" class="btn btn-lg btn-danger" value="Reset">
                                   
                                </div>
                            
                           
                            </form>
                          
                     
                     
                        </div>
                          </div>
                        

                    </div>
                </div>
            </div>
          


        </div>
    </div>
</div>
<?php 
require_once("footer.php");
?>