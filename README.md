# Web-Tools - набор инструментов для вашего сайта
# Быстрый старт
Подключаем все необходимые файлы:


    <script src="js/webTools.js"></script>
    <link rel="stylesheet" href="css/webTools.css" type="text/css"/>
При желании можем подключить CSS анимации [animate.css](https://daneden.github.io/animate.css/)

    <link rel="stylesheet" href="css/animate.min.css" type="text/css"/>
# Как это использовать ?

## Alert
    <div wt-open="alert" wt-alert="Hello Alert">Alert</div>
## Confirm

    <div wt-open="confirm" wt-confirm="Hellp Confirm">Confirm</div>
    
## Sign-Up 
    <div wt-open="reg">Sign-Up</div>
## Auth

    <div wt-open="auth">Auth</div>

## Recovery

    <div wt-open="recovery">Recovery</div>

*При клике на созданный вами элемент будет открыватся то или иное окно в зависимости от типа указаного в атрибуте `wt-open="@type@"`* 

# JavaScript API
## Методы:

Web-Tools создает глобальный объект`webTools` который содержит в себе некоторые публичные методы которые могут пригодится вам для работы

#### Confirm 
Откроет окно `confirm` с текстом `Текст подтверждения..`
    webTools.confirm('Текст подтверждения..');
##### Alert
Откроет окно `alert` с текстом `Привет Alert!`

    webTools.alert('Привет Alert!');

#### Recovery
Откроет окно `recovery`

     webTools.recovery();
#### Auth
Откроет окно `auth`

     webTools.auth();
     
#### Sign-Up
Откроет окно `reg`

     webTools.reg();
     
#### Сlose
Закроет текущее открытое окно Web-Tools

     webTools.close();
## Animate.CSS:
Включение/Выключение поддержки [animate.css](https://daneden.github.io/animate.css/) (по умолчанию: `false`);

    webTools.animate = false ;
  
Название класса анимации появления окна [animate.css](https://daneden.github.io/animate.css/) (по умолчанию: `flipInY`);

    webTools.animate_in='flipInY';
    
Название класса анимации исчезновения [animate.css](https://daneden.github.io/animate.css/) (по умолчанию: `flipOutY`);

    webTools.animate_out='flipOutY';
    
Время окончания анимации исчезновения [animate.css](https://daneden.github.io/animate.css/) (по умолчанию: `500`);

    webTools.animate_time=500;
