<?php 

$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$nachricht = $_POST['nachricht'];

$empfaenger = "empfaenger@mail.com";
$absendername = "Kontaktformular";
$absendermail = $email;
$betreff = "Neue Nachricht über Kontaktformular";
$text = "Es ist eine neue Nachricht über das Kontaktformular eingetroffen. Folgende Daten wurden übermittelt:
 
Name, Vorname:  ".$nachname.", ".$vorname." 
E-Mail: ".$email."
Telefonnummer: ".$telefon."
Nachricht:  
".$nachricht;
mail($empfaenger, $betreff, $text, "From: $absendername <$absendermail>");

echo('Vielen Dank! Wir melden uns schnellsmöglich bei Ihnen!');

?>