<?php
$user_name = htmlspecialchars($_POST['username']);
$user_phone = htmlspecialchars($_POST['userphone']);

$token = "7516351126:AAHoWRvOgMROgPugaB0ACr7yE-vu_xIyiJw";
$chat_id ="-4562922421";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
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
}
