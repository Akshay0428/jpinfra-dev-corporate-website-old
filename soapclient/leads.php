<?php error_reporting(); ?>

<?php


$channel = isset($_POST['source'])?$_POST['source']:'';

if($channel == ''){
 $channel = "microsite";
}
else {
 $channel = $_POST['source'];
}


$brandName = $_POST['brandName'];
$catName = $_POST['catName'];
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$code = $_POST['code'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$country = $_POST['country'];
$source = $channel;
$medium = isset($_POST['medium'])?$_POST['medium']:'';
$campaign = isset($_POST['campaign'])?$_POST['campaign']:'';

$term = isset($_POST['term'])?$_POST['term']:'';

$display = isset($_POST['display'])?$_POST['display']:'';


define("USERNAME", "integration.user@jpinfra.com");

define("PASSWORD", "1qaz!QAZ");

define("SECURITY_TOKEN", "VahNU4XY6fha3cvACMWUJveW");

require_once ('SforcePartnerClient.php'); // you can download the salesforce PHP toolkit from the web



$mySforceConnection = new SforcePartnerClient();

$mySforceConnection->createConnection("partner.wsdl.xml");


$mySforceConnection->setEndpoint('https://login.salesforce.com/services/Soap/u/35.0');

$loginResult = $mySforceConnection->login(USERNAME, PASSWORD.SECURITY_TOKEN); // getting the session id from the partner WSDL method.



echo "result:" . $mySforceConnection->getLocation() . "\n";

echo "result:" . $mySforceConnection->getSessionId() . "\n";



// Define constants for the web service. We'll use these later

$parsedURL = parse_url($mySforceConnection->getLocation());

define ("_SFDC_SERVER_", substr($parsedURL['host'],0,strpos($parsedURL['host'], '.')));

define ("_WS_NAME_", 'WebToLeadServices');

define ("_WS_WSDL_", 'WebToLeadServices.xml');

define ("_WS_ENDPOINT_", 'https://' . _SFDC_SERVER_ . '.salesforce.com/services/wsdl/class/' . _WS_NAME_);

define ("_WS_NAMESPACE_", 'http://soap.sforce.com/schemas/class/' . _WS_NAME_);

$client = new SoapClient(_WS_WSDL_);

$sforce_header = new SoapHeader(_WS_NAMESPACE_, "SessionHeader", array("sessionId" => $mySforceConnection->getSessionId()));

$client->__setSoapHeaders(array($sforce_header));



$lead = new StdClass();

$lead->fullName  = $firstName;

$lead->emailAddress  = $email;

$lead->mobileNumber = $phone;

$lead->city  = $city;

$lead->country  = $country;

$lead->dialingCode = $code;

$lead->projectInterested = $brandName;

$lead->source  = 'DIGITAL MARKETING';

$lead->UTMSource   = $source;

$lead->UTMMedium   = $medium;

$lead->UTMCampaign   = $campaign;

$lead->UTMTerm   = $term;

$lead->UTMDisplay   = $display;

$lead->IPAddress   = '49.248.164.98';

$leadData = array('wl'=>$lead);

$response = $client->createLeadfromWeb($leadData); // calling the create lead method of the webtoleadservices SOAP API to post the lead data



echo "result:" . $response->result->message . "\n";

echo "result:" . $response->result->recordId . "\n";


?>