//Основной класс.
function WebTools(animate,animate_in,animate_out,animate_time){

    this.animate = animate !== undefined ? true : false;
    this.animate_in = animate_in !== undefined ? animate_in : "flipInY";
    this.animate_out = animate_out !== undefined ? animate_out : "flipOutY";
    this.animate_time = animate_time !== undefined ? animate_time : 500;

    this.confirm_text = undefined;
    this.alert_text = undefined;



    var $this = this;
    //Вспомогательные функции
    function $(selector) {
        return document.querySelectorAll(selector);
    }
    function $row(selector,callback){
        var arr = $(selector);
        for(var i=0; i<arr.length; i++){
           if(typeof callback == "function") callback(arr[i]);
        }
    }
    //События.
    function addEvent(selector,eventName,Function){
        $row(selector,function (itm) {
            itm.addEventListener(eventName,Function);
        });
    }


    //.class
    function addClass(selector,className) {
        $row(selector,function (el) {
            if (el.classList)
                el.classList.add(className);
            else
                el.className += ' ' + className;
        });
    }
    function removeClass(selector,className) {
        $row(selector,function (el) {
            if (el.classList)
                el.classList.remove(className);
            else
                el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
        });
    }

    //функция инициализирующая события.
    function events(){
        /** Открывает модальное окно*/
        addEvent('[wt-open]','click',function () {
            //Получаем type окна которого нужно открыть..
            var type = this.getAttribute('wt-open');

            $this.confirm_text = this.getAttribute('wt-confirm');
            $this.alert_text = this.getAttribute('wt-alert');

            openModal(type);
        });
        /**Закрытие по wt-close */
        addEvent('[wt-close]','click',function(){
            closeModal();
        });
        /**Закрываем окно при клике вне блока*/
        addEvent('.webTool','click',function (e) {
            if(!e.target.matches('.webTool *')) {
                closeModal();
            }
        })
    }

    //Открываем модальное окно.
    function openModal(type){

        if($this.animate){
            addClass('.webTool>div#'+type,$this.animate_in);
            removeClass('.webTool>div#'+type,$this.animate_out);
            addClass('.webTool>div#'+type,'animated');
        }

        if($this.confirm_text !== undefined){
            $row('.webTool .confirm .body',function (el) {
                el.textContent = $this.confirm_text;
            });
        }
        if($this.alert_text !== undefined){
            $row('.webTool .alert .body',function (el) {
                el.textContent = $this.alert_text;
            });
        }

        //Удаляем класс show у всех элементов.
        removeClass('.webTool>div','show');
        //Добавляем класс тому блоку который мы хотим отобразить..
        addClass('.webTool>div#'+type,'show');
        //Отображаем элемент
        removeClass('.webTool','hide');
    }

    function closeModal(){
        if($this.animate){
            //Добавляем анимации..
            removeClass('.webTool>.show',$this.animate_in);
            addClass('.webTool>.show',$this.animate_out);
            addClass('.webTool>.show','animated');
            setTimeout(function () {
                addClass('.webTool','hide');
            },$this.animate_time);
        }else{
            //Добавляем класс скрываающий элемент
            addClass('.webTool','hide');
        }

    }


    function init(){
        events();
    }
    //
    init();

    /** API */
    this.confirm = function(text){
        $this.confirm_text = text;
        openModal('confirm');
    }; //Открывает подтверждение с текстом text
    this.alert = function (text) {
        $this.alert_text = text;
        openModal('alert');
    }; //Открывает оповещение с текстом text
    this.recovery = function(){
        openModal('recovery');
    }; //Открывает востановление пароля
    this.auth = function(){
        openModal('auth');
    }; //Открывает авторизацию пользвателя
    this.reg = function () {
        openModal('reg');
    }; //открывает регистрацию.
    this.close = function () {
      closeModal();
    }; //Закрывает любое открытое окно.
}

//Запускаем класс.
window.onload = function () {
    window.webTools = new WebTools(); //Создаем экземпляр класса.
};
