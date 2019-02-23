<?php 
    include_once("brandonly.php");
?>
<?php 
// require_once("Mailer/PHPMailerAutoload.php");
require_once("library/connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Mailer/src/Exception.php';
require 'Mailer/src/PHPMailer.php';
require 'Mailer/src/SMTP.php';

  $email = $_REQUEST['email'];
  // Connection to Db
  $con = connectToDb();
  //-------------------
  $query = "SELECT email, name from ms_users WHERE email = '$email'";
  $result = mysqli_query($con, $query);
  $row = mysqli_num_rows($result);

  if($row > 0){
    while($row = mysqli_fetch_assoc($result)){
        $name = $row["name"];
        $email1 = $row["email"];
        // Send the email 
        $mail = new PHPMailer();
       try{ 
           
            // $mail->SMTPDebug = 2;  
            $mail -> isSMTP();
            $mail -> SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';  
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;   
            $mail->isHTML(true); 
            $mail->Username = 'testidanis2019@gmail.com';                 // SMTP username
            $mail->Password = 'Helloworld1!';
        
            // $mail->setFrom('meh@test.com', 'NO REPLY');
            $mail->From = "meh@test.com";
            $mail->FromName = "Support Team";
            $mail->addAddress("$email1", "$name");  
            $mail->Subject = 'Reset your password!';
            $mail->Body    = "<h1>Reset your password</h1>
            <p>Click this link to reset your password</p>
            <a href=\"https://localhost/Nov_Dec/simple_crud/index.php?page=resetPassword&id=$email1\">CLICK HERE</a>";
            $mail->send();
            echo "<div class=\"msg-container fail-msg-container\">
            <h2 class =\"fail-msg msg\">Email Sent</h2>
            </div>";
       }catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

    };
  }else{
    echo "<div class=\"msg-container fail-msg-container\">
    <h2 class =\"fail-msg msg\">This address does not have an account.</h2>
    </div>";
  }

?>