<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "info@gastro-waldheim.de";
$subject = "[KONTAKTFORMULAR]";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Danke f&uuml;r Ihre Nachricht. "."<br>"."Wird werden uns sobald wie m&ouml;glich bei Ihnen melden. "."<br>"."<br>"."Sie werden in 10 Sekunden auf die vorherige Seite umgeleitet.";
?>
<meta http-equiv="refresh" content="10; URL=http://gastro-waldheim.de">