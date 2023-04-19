<?php 
require_once("model/model.php");     
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
   
class Controller extends Model
{

    public function __construct()
    {
       
        //logic : WAP to print your name take input from users
        parent:: __construct();
        // set buttons
        // if(isset($_POST["sub"]))
        // {
        //     $nm=$_POST["nm"];
        //     echo "<h3 align='center' style='color:green'>Your name is : $nm</h3>";
        // }

        // add data in contact us table logic
        if(isset($_POST["addcontact"]))
        {
         //email sending
         require_once("PHPMailer/PHPMailer.php");
         require_once("PHPMailer/SMTP.php");
         require_once("PHPMailer/Exception.php");

          $nm=$_POST["name"];
          $em=$_POST["email"];
          $fnm=$_POST["fname"];
          $lnm=$_POST["lname"];
          $phone=$_POST["phone"];
          $msg=$_POST["message"]; 
          
          try {

            ob_start();    
            error_reporting(0);
           $mail = new PHPMailer(true);
            //Server settings
            $mail->SMTPDebug =true;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'bkpandey.pandey@gmail.com';                     //SMTP username
            $mail->Password   = 'btlyjvvhrcqcjqjl';                               //SMTP password
            $mail->SMTPSecure ="TLS";            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom($_POST["email"], 'Mail sending');
            $mail->addAddress('bkpandey.pandey@gmail.com', 'Contact us mail sending');     //Add a recipient
           
            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Contact with Us email sending data';
            $mail->Body    = "<img src='https://techalphagroup.com/wp-content/uploads/2021/10/Email-Marketing11-1.gif' style='width:30%; height:180px; margin-left:5%'>"."<br>"."Customer Name is :".$nm."<br>"."Customer email is :".$em."<br>"."Customer FirstName is :".$fnm."<br>"."Customer LastName is :".$lnm."Customer Phone is :".$phone."<br>"."Customer Message is :".$msg."<br>"."Yashraj E-commerce Pvt Ltd contact us sending emails"."<br>"."Contact us on :(+91)-9998003879"."<br>"."Email us :<a href='mailto:bkpandey.pandey@gmail.com'>bkpandey.pandey@gmail.com</a>";
            $mail->send();
            // echo "<h5 align='center' style='color:green'>Thanks for contact with Us Email send successfully</h5>";
            // header("location:emailsuccessmsg.php");

            $data=array("name"=>$nm,"email"=>$em,"firstname"=>$fnm,"lastname"=>$lnm,"phone"=>$phone,"message"=>$msg);
            $chk=$this->insertalladata($data,'tbl_contact');
            if($chk)
            {
              echo "<script>
              alert('Thanks for contact with us we will contact with you soon!')
              window.location='contact-us';
              </script>";
            }
         
        } 
        catch(Exception $e) 
        {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


        // load templates routing 

        if($_SERVER["PATH_INFO"])
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("slider.php");
                    require_once("content.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;
                case '/about-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("aboutus.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;
                case '/contact-us':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("contactus.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;
                    
                case '/products':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("products.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;
                case '/viewcart':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("viewcart.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;
                    
                case '/youtubechanel':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("navbar.php");
                    require_once("youtubechanel.php");
                    require_once("footer.php");
                    require_once("login.php");
                    require_once("register.php");
                    break;

                default :
                require_once("index.php");
                require_once("header.php");
                require_once("404.php");
                require_once("footer.php");    
            }
        }
         

    }
}
$obj=new Controller;

?>