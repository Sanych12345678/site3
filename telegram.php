<?php

/* https://api.telegram.org/bot1249195750:AAEtv14iEUqhzDMlW03HhdZgeRSJIKmDAh0/getUpdates,
где XXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "1249195750:AAEtv14iEUqhzDMlW03HhdZgeRSJIKmDAh0";
$chat_id = "-406919065";
$arr = array(
    'Имя пользователя: ' => $name,
    'Телефон: ' => $phone,
    'Email' => $email
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
    header('Location: thankyou.html');
} else {
    echo "Error";
}
?>