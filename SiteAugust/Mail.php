<?php
if (isset($_POST['BtnVerstuur'])) {
    $voornaam = $_POST['Voornaam'];
    $achternaam = $_POST['Achternaam'];
$to      = 'dries.van.ransbeeck@hotmail.com';
$subject = $_POST['Onderwerp'];
$message = "Dit bericht is van ".$achternaam." ".$voornaam + $_POST['Vraag'];
$headers = "From: $_POST['Email']" . "\r\n" .
    "Reply-To: $_POST['Email']";
mail($to, $subject, $message, $headers);
}
?> 