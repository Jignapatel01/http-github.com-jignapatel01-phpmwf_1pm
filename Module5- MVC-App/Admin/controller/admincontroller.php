<?php
require_once("model/adminmodel.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Admincontroller extends Adminmodel
{
    public function __construct()
    {
        //logic
        
        parent::__construct();
        
        // add data in contact table logic
        if(isset($_POST["addcontact"]))
        {
            
            require_once("PHPMailer\PHPMailer.php");
            require_once("PHPMailer\SMTP.php");
            require_once("PHPMailer\Exception.php");

            $nm=$_POST["name"];
            $email=$_POST["email"];
            $enqry=$_POST["Enquiry"];
            $phn=$_POST["phone"];

           $mail = new PHPMailer(true);
            try {
   

        //Server settings
        $mail->SMTPDebug = true;                                     //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'jigna434@gmail.com';                     //SMTP username
        $mail->Password   = 'hpzhtuezpywnanka';                               //SMTP password
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
                         "Customer name is :".$nm."<br>"."Email address is:".$email."<br>"."Enquiry is :".$enqry."<br>"."Phone no is :".$phn."<br>";

        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        $mail->send(); 
        
        $data=array("Name"=>$nm,"Email"=>$email,"Enquiry"=>$enqry,"Phone"=>$phn);
        $chk=$this->insertdata($data,'tbl_contact');
        if($chk)
        {
            echo "<script>
                alert('Thank you for contact with me.');
                window.location='contact-us';
            </script>";
        }
     

        // echo "Thank you for contact with us";
        // header("refresh:2,emailmsg.php");
        
        
    } 
    catch (Exception $e) 
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

       
   

        }


        // // load template routing
        if($_SERVER["PATH_INFO"])
        {   
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("dashboard.php");
                    require_once("footer.php");
                    
                    break;

                case 'login':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("login.php");
                        require_once("footer.php");
                        break;
    
                default:
                    require_once("index.php");
                    require_once("header.php");
                    require_once("404.php");
                    require_once("footer.php");

            }
        }


    }
}
$obj=new Admincontroller;

?>