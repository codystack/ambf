<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

$res="";

if(isset($_POST['submit'])){

    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $ig_handle = $_POST['ig_handle'];

    // Create email body
    $body = "<strong>First Name:</strong> $first_name<br> <strong>Last Name:</strong> $last_name<br> <strong>Email:</strong> $email<br> <strong>Phone:</strong> $phone<br> <strong>Address:</strong> $address<br> <strong>State:</strong> $state<br> <strong>City:</strong> $city<br> <strong>IG Handle:</strong> $ig_handle";

    try {

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                          //Enable verbose debug output
        $mail->isSMTP();                                                //Send using SMTP
        $mail->Host       = 'das102.truehost.cloud';                    //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                       //Enable SMTP authentication
        $mail->Username   = 'noreply@ambeautifiedlifefoundation.org';      //SMTP username
        $mail->Password   = '$10Password!!';                            //SMTP password
        $mail->SMTPSecure = 'tls';                //Enable implicit TLS encryption
        $mail->Port       = 587;                                        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email, $full_name);
        $mail->addAddress('info@ambeautifiedlifefoundation.org');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Donor';
        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();
        $res = '<span style="color: green;">Form Sent Successfully 👏</span>';
    } catch (Exception $e) {
        $res = "<span style='color: red;'>Form could not be sent: $mail->ErrorInfo</span>";
    }
}
?>