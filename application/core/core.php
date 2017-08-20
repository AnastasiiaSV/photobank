<?php
// Загрузка классов "на лету"
function __autoload($className) {

    $filename = strtolower($className) . '.php';
    // определяем класс и находим для него путь
    $expArr = explode('_', $className, 2);

    if(empty($expArr[1]) /*OR $expArr[1] == 'Base'*/){
        $folder = DS.'application'.DS.'core';
    }else{
        switch(strtolower($expArr[0])){
            case 'controller':
                $folder = DS.'application'.DS.'controllers';
                break;

            case 'model':
                $folder = DS.'application'.DS.'models';
                break;

            case 'view':
                $folder = DS.'application'.DS.'views';
                break;

            default:
                $folder = DS.'application'.DS.'core';
                break;
        }
    }

    // путь до класса
    $file = SITE_PATH . $folder . DS . $filename;

    // проверяем наличие файла
    if (file_exists($file) == false) {
        return false;
    }
    else {
        include($file); // подключаем файл с классом
        return true;
    }
}
