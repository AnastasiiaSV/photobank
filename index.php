<?php
/**
 * Файл index.php - точка входа в приложение
 */

// включение отображения всех ошибок
error_reporting (E_ALL);
// подключаем конфиг c константами
include ('config.php');

// Соединяемся с БД
try {
    $dbObject = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


// подключаем ядро сайта
include (SITE_PATH . DS . 'application' . DS . "core". DS. 'core.php');

echo $_SERVER['SERVER_PORT'];


// Загружаем router
$router = new Router();

// задаем путь до папки контроллеров.
$router->setPath (SITE_PATH . '\application\controllers');
// запускаем маршрутизатор
$router->start();

