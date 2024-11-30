<?php 
$user_phone = htmlspecialchars($_POST["userphone"]);
$user_mail = htmlspecialchars($_POST["usermail"]);

$token = "7587987932:AAFtIMWMLZQ42WZXx130jRjAZx5HOaLHoDk";
$chat_id = "-4522747184";

if ($user_phone) {
  $formData = array(
    "Номер телефона: " => $user_phone
  );
}
if ($user_mail) {
  $formData = array(
    "Электронная почта: " => $user_mail
  );
}


foreach($formData as $key => $value) {
  $text .=$key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html","r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}



// echo "Привет, " . $user_name . "<br>";
// echo "ваш номер, <b>" . $user_phone . "</b>";