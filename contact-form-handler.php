<?php

$errors = '';
$myemail = 'D00249674@student.dkit.ie';// <-----Put your DkIT email address here.
if(
    empty($_POST['userid'])  ||
   empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['zip']) ||
   empty($_POST['phone']) ||
   empty($_POST['city']) ||
   empty($_POST['region']) ||
//    empty($_POST['satisfaction']) ||
   empty($_POST['datePicker']) ||
//    empty($_POST['radio']) ||
//    empty($_POST['choice']) ||
   empty($_POST['message']))

{
    
    $errors .= "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder
$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();

$userid = $_POST['userid'];
$name = $_POST['name'];
$email = $_POST['email'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$region = $_POST['region'];
$recommendation = $_POST['recommendation'];
$datePicker = $_POST['datePicker'];
// $radio = $_POST['radio'];
// $choice = $_POST['choice'];
$message = $_POST['message'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\nUsername :$userid\n Name: $name \n Email: $email\nZip:$zip \n Phone:$phone\n City:$city\n Region:$region\nDate: $datePicker\nRecommendation:$recommendation\n Message $message";

        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: thank-you.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
        <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
        <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>