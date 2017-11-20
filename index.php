<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy1921
 * Date: 14.11.2017
 * Time: 17:23
 */
//проверка нахождения на https
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    //перевод пользователя на https адресс сайта
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
}
?>
<html>
<head>
    <link rel="stylesheet" href="style/css/page.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="style/css/webTools.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="style/css/animate.min.css" type="text/css" media="all"/>
    <title>Dmitriy Lozin - Web-Developer</title>

    <script src="style/js/script.js"></script>
</head>
<body>
    <div class="toolBar">
        <div class="button" wt-open="alert" wt-alert="Сообщение которое будет отображено в Alert находится в атребуте wt-alert='тут' надеюсь понятно..">Alert</div>
        <div class="button" wt-open="reg">Sign-Up</div>
        <div class="button" wt-open="confirm" wt-confirm="Описание действия которое нужно подтвердить содержится в атребуте wt-confirm='' надеюсь и это тоже понятно..">Confirm</div>
        <div class="button" wt-open="auth">Auth</div>
        <div class="button" wt-open="recovery">Recovery</div>
    </div>
</body>
</html>