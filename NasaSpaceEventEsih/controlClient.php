
<?php

  require_once("tool/dbConnect.php");
  $action = $_GET['action'];
  
   switch($action) {
   case 'registerClient':
         if(isset($_POST['nom']) AND isset($_POST['email'])) {
            $name = $_POST['nom'];
            $mail = $_POST['email'];
            echo registerClient($name,$mail);
         }
      break;
  }
  
  function registerClient($paramName, $paramMail) {
   global $connect;
   
    if (filter_var($paramMail, FILTER_VALIDATE_EMAIL) ) {
         $selecteMailUser = $connect->query("SELECT clientMail FROM register_client WHERE  clientMail = '$paramMail'");
         
         if ($donnees = $selecteMailUser->fetch()){
            $response = "0";
	    header("Location: authcheck.php?response=" . $response);
         }
         else {
            $insertClient = "INSERT INTO `nasaspace`.`register_client` (`clientID`, `clientNom`, `clientMail`, `clientActive`) VALUES (NULL, :nom, :mail, '0')";
            $inResult = $connect->prepare($insertClient);
            $inResult->bindValue(':nom',  $paramName);
            $inResult->bindValue(':mail', $paramMail);
            $inResult->execute();
            //$response= "<center> Merci " . $paramName .  "<br/>Please check your email to confirm: " . $paramMail . "</center>";
	    $response = "2";
	    $to  = $paramMail;
	    $subject = 'CIM: Click Is Money, account activation.';
							   
	    $headers = "From: " . strip_tags('ralphalex9@gmail.com') . "\r\n";
	    $headers .= "Reply-To: ". strip_tags('ralphalex9@gmail.com') . "\r\n";
	    //$headers .= "CC: susan@example.com\r\n";
	    $headers .= "MIME-Version: 1.0\r\n";
	    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			 
	    $message ="Testing";
	    if (mail($to, "Subject: " . $subject, $message, $headers))  {
		//header('refresh: 3; URL=signup_success.php?');
		header("Location: authcheck.php?response=" . $response . "&name=" . $paramName);
	    } 
	    else {
		echo 'There was a problem sending the email.';
	    }
	    
	    
         }
   }
   else {
            //$response = "<center style='color: red;'> Please check your email</center>";
	    $response = "1";
	    header("Location: authcheck.php?response=" . $response);
   }
     
     return $response;
}
 
$str ="
FUTURE_RA_DEC:   260.1d -24.6d (J2000)   -   58260.00 SOD {16:11:00.00} UT
FUTURE_RA_DEC:   260.1d -24.6d (J2000)   -   58380.00 SOD {16:13:00.00} UT
FUTURE_RA_DEC:   260.1d -24.6d (J2000)   -   58500.00 SOD {16:15:00.00} UT
FUTURE_RA_DEC:   260.1d -24.6d (J2000)   -   58620.00 SOD {16:17:00.00} UT
FUTURE_RA_DEC:   260.1d -24.6d (J2000)   -   58740.00 SOD {16:19:00.00} UT
FUTURE_RA_DEC:   260.1d -24.6d (J2000)   -   58860.00 SOD {16:21:00.00} UT
FUTURE_RA_DEC:   260.1d -24.6d (J2000)   -   58980.00 SOD {16:23:00.00} UT
FUTURE_RA_DEC:   274.0d  +6.5d (J2000)   -   59100.00 SOD {16:25:00.00} UT
FUTURE_RA_DEC:   289.9d +37.2d (J2000)   -   59220.00 SOD {16:27:00.00} UT
FUTURE_RA_DEC:   326.7d +62.9d (J2000)   -   59340.00 SOD {16:29:00.00} UT
FUTURE_RA_DEC:   333.9d +66.0d (J2000)   -   59460.00 SOD {16:31:00.00} UT
FUTURE_RA_DEC:   342.1d +69.1d (J2000)   -   59580.00 SOD {16:33:00.00} UT
FUTURE_RA_DEC:   352.1d +72.1d (J2000)   -   59700.00 SOD {16:35:00.00} UT
FUTURE_RA_DEC:     4.5d +74.8d (J2000)   -   59820.00 SOD {16:37:00.00} UT
FUTURE_RA_DEC:    20.6d +77.0d (J2000)   -   59940.00 SOD {16:39:00.00} UT
FUTURE_RA_DEC:    40.9d +78.5d (J2000)   -   60060.00 SOD {16:41:00.00} UT
FUTURE_RA_DEC:    63.9d +78.7d (J2000)   -   60180.00 SOD {16:43:00.00} UT
FUTURE_RA_DEC:    85.8d +77.7d (J2000)   -   60300.00 SOD {16:45:00.00} UT
FUTURE_RA_DEC:   103.6d +75.6d (J2000)   -   60420.00 SOD {16:47:00.00} UT
FUTURE_RA_DEC:   117.4d +72.9d (J2000)   -   60540.00 SOD {16:49:00.00} UT
FUTURE_RA_DEC:   128.3d +69.9d (J2000)   -   60660.00 SOD {16:51:00.00} UT
FUTURE_RA_DEC:   137.2d +66.6d (J2000)   -   60780.00 SOD {16:53:00.00} UT
FUTURE_RA_DEC:   144.8d +63.3d (J2000)   -   60900.00 SOD {16:55:00.00} UT
FUTURE_RA_DEC:   151.5d +59.9d (J2000)   -   61020.00 SOD {16:57:00.00} UT
FUTURE_RA_DEC:   157.7d +56.5d (J2000)   -   61140.00 SOD {16:59:00.00} UT
FUTURE_RA_DEC:   163.4d +53.1d (J2000)   -   61260.00 SOD {17:01:00.00} UT
FUTURE_RA_DEC:   168.9d +49.9d (J2000)   -   61380.00 SOD {17:03:00.00} UT
FUTURE_RA_DEC:   174.2d +46.7d (J2000)   -   61500.00 SOD {17:05:00.00} UT
FUTURE_RA_DEC:   179.4d +43.6d (J2000)   -   61620.00 SOD {17:07:00.00} UT";

$str1 = explode(" ", $str);
echo "<pre>";
print_r($str1);
echo "</pre>";

//echo count($str1);

for($i = 3; $i <= 101; $i += 14 ) {
  echo $i . " --- " .$str1[$i] . "<br/>";
}
for ($i = 116; $i<= 172; $i += 14) {
  echo $i . " --- " .$str1[$i] . "<br/>";
}

for($i = 188; $i<= 248; $i +=15) {
  echo $i . " --- " .$str1[$i] . "<br/>";
}

for($i = 248; $i <= 402; $i += 14) {
  echo $i . " --- " .$str1[$i] . "<br/>";
}



   

///////////////////////// if login complet///////////////////////////////////////////

//lien "http://localhost/NasaSpace/controlClient.php?active=0+&mailActive=ralphalex9@gmail.com"
//lien http://localhost/NasaSpace/controlClient.php?nom=florial+&email=jflorial%40yahoo.fr
  
   function  activClient() {
   
   if(isset($_GET['active']) AND isset($_GET ['mailActiv'])) {
    
      $active = (int)$_GET['active'];
      $mail = $_GET['mailActive'];
      $updateClient = "UPDATE `nasaspace`.`register_client` SET `clientActive` = '1' WHERE `register_client`.`clientMail` = :mail";
      $upResult = $connection->prepare($updateClient);
      $upResult->bindValue(':mail', $mail);
      $upResult->bindValue(':mailActive', $active);
      $upResult->execute();
      
      $response = " talè";
      
    }
   else{
      $response= "talè";
   }
   
   return $response;
}

class Email_reader {
    // imap server connection
    public $connect;
    // inbox storage and inbox message count

    private $inbox;

    private $msg_cnt;

    // email login credentials

    private $server = 'www.ocw.edu.ht';

    private $user   = 'ralphalex9@gmail.com';

    private $pass   = 'Parson_89';

    private $port   = 80; // adjust according to server settings


    // connect to the server and get the inbox emails

function __construct() {

    $this->connect();

    $this->inbox();

}

    // close the server connection
function close() {

    $this->inbox = array();

    $this->msg_cnt = 0;

    imap_close($this->conn);

}

    // open the server connection

    // the imap_open function parameters will need to be changed for the particular server

    // these are laid out to connect to a Dreamhost IMAP server

function connect() {

    $this->conn = imap_open('{'.$this->server.'/notls}', $this->user, $this->pass);

}

    // move the message to a new folder

function move($msg_index, $folder='INBOX.Processed') {

    // move on server

    imap_mail_move($this->conn, $msg_index, $folder);

    imap_expunge($this->conn);
    // re-read the inbox
    $this->inbox();
}

    // get a specific message (1 = first email, 2 = second email, etc.)

function get($msg_index=NULL) {

    if (count($this->inbox) <= 0) {

	return array();

    }

    elseif ( ! is_null($msg_index) && isset($this->inbox[$msg_index])) {

	return $this->inbox[$msg_index];

    }

    return $this->inbox[0];
}

    // read the inbox

function inbox() {

        $this->msg_cnt = imap_num_msg($this->conn);
        $in = array();
        for($i = 1; $i <= $this->msg_cnt; $i++) {
            $in[] = array(
                'index'     => $i,
                'header'    => imap_headerinfo($this->conn, $i),

                'body'      => imap_body($this->conn, $i),

                'structure' => imap_fetchstructure($this->conn, $i)

            );

        }
        $this->inbox = $in;
    }

}

?>
 





		