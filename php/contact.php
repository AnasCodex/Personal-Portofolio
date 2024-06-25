<?php

header('Content-Type: text/html; charset=utf-8');

// Email recipient
$EmailTo = "anas.coding404@gmail.com";

$errors = "";

// Name
if (empty($_POST["name"])) {
    $errors .= "Name is required ";
} else {
    $name = $_POST["name"];
}

// Email
if (empty($_POST["email"])) {
    $errors .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Subject
if (empty($_POST["subject"])) {
    $errors .= "Subject is required ";
} else {
    $Subject = $_POST["subject"];
}

// Message
if (empty($_POST["message"])) {
    $errors .= "Message is required ";
} else {
    $message = $_POST["message"];
}

// Prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

$Headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";
$Headers .= "From:".$EmailTo . "\r\n";

// Send email
$success = mail($EmailTo, '=?UTF-8?B?' . base64_encode($Subject) . '?=' , $Body, $Headers);

// Redirect to success page
if ($success && $errors == "") {
   echo 'success';
} else {
    echo $errors;
}
?>