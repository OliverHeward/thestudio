<?php 

$errors = '';
$toEmail = 'oliver@angellondon.co.uk';

if(empty($_POST['fname']) || 
    empty($_POST['lname']) || 
    empty($_POST['email']) ||
    empty($_POST['phone']) || 
    empty($_POST['message']) {
        $errors .= "\n Error: all fields are required";
    }

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];

if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
    $email_address))
    {
        $errors .= "\n Error: Invalid email address";
    }
if( empty($errors)) {
    $to = $toEmail;
    $email_subject = "Contact form submission: $fname $lname";
    $email_body = "You have recieved a new enquiry.".
    " Here ar ethe details:\n $fname $lname \n Email: $email_address \n Message \n $message" ;
    $headers = "From: $toEmail\n";
    $headers = "Reply-To: $email_address";

    mail($to,$email_subject,$email_body,$headers);
    // Redirect
    header('Location: front-page.php');
}

// $toEmail = 'oliver@angellondon.co.uk';
// $subject = 'Site contact form';
// $mailheader = "From: ".$_POST["email"]."\r\n";
// $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
// $mailheader .= "Content-Type: text/html; charset=iso-8889";
// $messagebody = "Name: ".$_POST["fname"]. " " .$_POST["lname"]. "</br>";
// $messagebody .= "Email: ".$_POST["email"]. "</br>";
// $messagebody .= "Comment: ".nl2br($_POST["message"])."<br />"; 
// mail($toEmail, $subject, $messagebody, $mailheader) or die ("Failure"); 
?>