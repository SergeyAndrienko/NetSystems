
<meta http-equiv='refresh' content='6; url=index.html'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['tel'])) {$tel = $_POST['tel']; if ($tel == '') {unset($tel);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}

if (isset($name) && isset($email) && isset($tel) && isset($body)){

$address = "info@gmail.com";
$mes = "Имя: $name \nE-mail: $email \nТелефон: $tel \nТекст: $body";
$send = mail ($address,$tel,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Сообщение отправлено успешно, через 6 секунд Вы будете направлены на главную страницу  <a href='index.html'>NetSystem</a>,где сможете продолжить ваш просмотр.";}
else {echo "Ошибка, сообщение не отправлено!";}

}
else
{
echo "Вы заполнили не все поля, вернитесь назад и заполните необходимые поля!";
}
?>