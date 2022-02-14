<?php

require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// config
$config = array(
    "tpl_dir" => "tpl/",
    "cache_dir" => "cache/"
);

Tpl::configure($config);


// Add PathReplace plugin (necessary to load the CSS with path replace)
Tpl::registerPlugin(new Tpl\Plugin\PathReplace());


// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign("name", "Miguel Arcanjo");
$tpl->assign("version", PHP_VERSION);

// draw the template
$html = $tpl->draw("index", true);

//Create a new PHPMailer instance
$mail = new PHPMailer();

// Importante para mudar o charset
$mail->CharSet = PHPMailer::CHARSET_UTF8;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
$mail->Port = 465;

//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

// $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'adm.ephemeris';

//Password to use for SMTP authentication
$mail->Password = 'admephe2021';

//Set who the message is to be sent from
//Note that with gmail you can only use your account address (same as `Username`)
//or predefined aliases that you have configured within your account.
//Do not use user-submitted addresses in here
$mail->setFrom('adm.ephemeris@gmail.com', 'Agenda EspOn');

//Set an alternative reply-to address
//This is a good place to put user-submitted addresses
// $mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('miguel.arcanjo@outlook.com', 'Dr Miguel');

//Set the subject line
$mail->Subject = 'Testando a classe PHPMailer com GMail';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($html);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

$mail->send();

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    # echo "Message saved!";
    #}
}
