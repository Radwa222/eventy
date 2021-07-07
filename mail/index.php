<?php
//inc
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//USE
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception;
//PHPMAILER INS
$mail = new PHPMailer();
//STMP 
$mail -> isSMTP();
// host
$mail ->Host="smtp.gmail.com";
//authon
$mail->SMTPAuth="true";
//secue
$mail->SMTPSecure="tls";
$mail->port="587";
//gmail username and password 
$mail->Username="ahmedyassser009@gmail.com";
$mail->Password="ahmedyasser99";
$mail->subject="thanks for help me ";
//set sender email
$mail->setfrom("ahmedyassser009@gmail.com");
$mail->isHTML(true);
$mail->body="this mail may case problem please reject it ";
$mail->addAddress("ahmedyassser009@gmail.com");
//send it
if($mail->send()){
    echo"mail send scsessfuly";
}else{
    echo"erorre happend plese check it".$mail->Errorinfo;
}

//close
$mail->smtpclose();







?>