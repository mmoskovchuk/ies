<?php


$name;
$email;
$message;
$captcha;
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['message'])) {
    $message = $_POST['message'];
}
if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
}
if (!$captcha) {
    echo '<p>Ви не поставили галочку в формі captcha.<br> Лист НЕ відправлено.</p>';
    exit;
}
$secretKey = "6Lfb6oEUAAAAAM45MANnd4O58LRQ8qpuHqVHGJMo";
$ip = $_SERVER['REMOTE_ADDR'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha . "&remoteip=" . $ip);
$responseKeys = json_decode($response, true);
if (intval($responseKeys["success"]) !== 1) {
    echo '<p>Спам-лист!Spam-mail!</p>';
} else {

    $address = "max.moskovchuk@gmail.com";    // ВНИМАНИЕ! Здесь указываем адрес электронной почты на которую будут приходить письма
    $mes = "[ies.nau.edu.ua] " . $name . "\n\n";
    $headers .= "Content-type: text/html; charset=\"utf-8\"";
    $message = wordwrap($message, 70, "\r\n");
    $send = mail($address, $mes, "$message \r\n | Надіслано від: $email", $headers);
    if ($send) {
        echo '<p><i class="fas fa-rocket"></i>&nbsp;Повідомлення відправлено</p>';
    }
}
