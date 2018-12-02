<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $error = '';
    if(!$name) {$error .= 'Введіть ім\'я. ';}
    if(!$email) {$error .= 'Введіть e-mail. ';}
    if(!$message || strlen($message) < 1) {$error .= 'Введіть повідомлення. ';}
    if(!$error) {
        $address = "max.moskovchuk@gmail.com";    // ВНИМАНИЕ! Здесь указываем адрес электронной почты на которую будут приходить письма
        $mes = "[ies.nau.edu.ua] " .$name."\n\n";
        $headers .= "Content-type: text/html; charset=\"utf-8\"";
        $message = wordwrap($message, 70, "\r\n");
        $send = mail ($address, $mes,"$message \r\nНадіслано від: $email", $headers);
        if($send) {echo 'OK';}
    }
    else {echo '<div class="err">'.$error.'</div>';}
}