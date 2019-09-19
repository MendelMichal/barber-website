<?php

$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Imie jest wymagane ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG .= "Email jest wymagany ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["message"])) {
    $errorMSG .= "Wiadomosc jest wymagana ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "email@gmail.com";
$Subject = "Nowa wiadomość z formularza kontaktowego";

$Body = "";
$Body .= "Imię i nazwisko: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Adres Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Wiadomość: ";
$Body .= $message;
$Body .= "\n";

$success = mail($EmailTo, $Subject, $Body, "From:".$email);

if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Coś poszło nie tak :(";
    } else {
        echo $errorMSG;
    }
}

?>