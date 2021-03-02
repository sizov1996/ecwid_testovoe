<?php
include("header.php");
// несколько получателей

$to  = 'sizov73ul@yandex.ru';  // обратите внимание на запятую

// тема письма
$subject = 'Тестовое задание на должность Веб-разработчик';

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// текст письма
$message = '
<style>
.header-mail{
    background:#eee;
    text-align:center;
}
</style>
    <div class="header-mail">
        <h1>Тестовое задание на должность Веб-разработчик</h1>
    </div>
        <p>Пользователь ' . $_POST['name'] . '</p>
        <p>Задал вопрос на сайте: ' . $_POST['text'] . '</p>
        <p>Связяться с ним можно по email: <a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a></p>
        <p>Или по телефону: <a href="tel:' . $_POST['phone'] . '">' . $_POST['phone'] . '</a></p>
        <p>Дата рождения пользователя ' . $_POST['date'] . '</p>
';

// Отправляем

mail($to, $subject, $message, $headers);

?>
<div class="page-content">
    <h2>Спасибо! Ваше письмо отправлено!</h2>
    <p>Ожидайте обратной связи</p>
</div>