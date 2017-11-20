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
    <link rel="stylesheet" href="style/css/style.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="style/css/animate.min.css" type="text/css" media="all"/>
    <title>Dmitriy Lozin - Web-Developer</title>

    <script src="style/js/script.js"></script>
</head>
<body>
    <div class="webTool hide">
        <div class="alert" id="alert">
            <div class="body">
                Alert Description
            </div>
            <div class="bottom">
                <div class="button" wt-close>OK</div>
            </div>
        </div>
        <div class="confirm" id="confirm">
            <div class="title">Подтверждение</div>
            <div class="body">
                Описание действия..
            </div>
            <div class="bottom">
                <div class="button success">Подтвердить</div>
                <div class="button close" wt-close>Отмена</div>
            </div>
        </div>
        <div class="auth " id="auth">
            <div class="title">Вход</div>
            <div class="body">
                <input type="text" placeholder="Ник">
                <input type="text" placeholder="Пароль">
                <div align="right">
                    <b wt-open="recovery">Забыли пароль ?</b>
                </div>
            </div>
            <div class="bottom">
                <div class="button success">Войти</div>
            </div>
        </div>
        <div class="recovery" id="recovery">
            <div class="title">Востановить пароль</div>
            <div class="body">
                <input type="text" placeholder="E-mail">
            </div>
            <div class="bottom">
                <div class="button">Отправить письмо</div>
            </div>
        </div>
        <div class="reg" id="reg">
            <div class="title">Регистрация</div>
            <div class="body">
                <input type="text" placeholder="Ник">
                <input type="text" placeholder="E-mail">
                <input type="password" placeholder="Пароль">
                <input type="password" placeholder="Повторите пароль">
            </div>
            <div class="bottom">
                <div class="button">Зарегистрироватся</div>
            </div>
        </div>
    </div>
    <div class="toolBar">
        <div class="button" wt-open="alert" wt-alert="Сообщение которое будет отображено в Alert находится в атребуте wt-alert='тут' надеюсь понятно..">Alert</div>
        <div class="button" wt-open="reg">Sign-Up</div>
        <div class="button" wt-open="confirm" wt-confirm="Описание действия которое нужно подтвердить содержится в атребуте wt-confirm='' надеюсь и это тоже понятно..">Confirm</div>
        <div class="button" wt-open="auth">Auth</div>
        <div class="button" wt-open="recovery">Recovery</div>
    </div>
</body>
</html>