<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
 //print_r($_POST);
 

$channel = isset($_POST['source'])?$_POST['source']:'';

if($channel == ''){
 $channel = "Open Street web";
}
else {
 $channel = $_POST['source'];
}


$brandName = $_POST['brandName'];
$catName = $_POST['catName'];
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$country = $_POST['country'];
$source = $channel;
$medium = isset($_POST['medium'])?$_POST['medium']:'';
$campaign = isset($_POST['campaign'])?$_POST['campaign']:'';
$term = isset($_POST['term'])?$_POST['term']:'';

$servername = "localhost";
$username = "alched42_country";
$password = "2^RYfg2scasc";
$dbname = "alched42_country";



// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO openStreet(`full_name`, `email_id`, `phone`, `city`, `country`, `brand`, `category`, `utm_source`, `utm_medium`, `utm_campaign`, `utm_term`) 
VALUES ('$firstName','$email','$phone','$city','$country','$brandName','$catName','$source','$medium','$campaign','$term')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();



?>