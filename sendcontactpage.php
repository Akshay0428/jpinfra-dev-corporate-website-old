<?php
require("class.phpmailer.php");

$name = $_POST["firstName"];
$email = $_POST["email"];
$code = "No Field on Contact Page";
$phone = $_POST["phone"];
$city = "No Field on Contact Page";
$country = "No Field on Contact Page";
$message = $_POST["message"];
$ipa = $_SERVER['REMOTE_ADDR'];


$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "dotwisedigital.com";

$mail->SMTPAuth = true;
// $mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "info@dotwisedigital.com";
$mail->Password = "dotwise@digital123";

$mail->From = "info@dotwisedigital.com";
$mail->FromName = "JP Infra Website";
$mail->AddAddress("akshay.khambe@gmail.com");
$mail->AddReplyTo("$email");

$mail->IsHTML(true);

$mail->Subject = "Enquiry Form JP Infra Website Contact Page";
$mail->Body = "
Name: $name <br>
Email: $email <br>
Phone: $phone <br>
Message: $message <br>
Ip Adddress: $ipa <br>
";
$mail->Send();

$mail->ClearAllRecipients();

$mail->Subject = "User Mail";
$mail->Body = "Thank You";

$mail->AddAddress("$email");




//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}


$servername = 'localhost';
$username = 'dotwised_jp';
$password = 'jpinfra@123';
$dbname = 'dotwised_jpinfra';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Enquiry (name, email, country_code, phone, country, city, message, ipaddress)
VALUES ('$name','$email','$code','$phone','$country','$city','$message','$ipa')";

if ($conn->query($sql) === TRUE) {
	//header("Location: http://mody.online/contact-us/#Visit_our_campus",true);
   // exit();

} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>