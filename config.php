<?php
// Задаем константы:
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__).DS);
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта

$contentPath = "content";
define ('CONTENT_PATH', $contentPath); // путь к корневой папке сайта

// для подключения к бд
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'photobank');

define('language', 'Language');
//строки для вывода на вьюхах

if (!empty($_COOKIE['language']) && $_COOKIE['language']=='ru') {
    define('photo', 'Фото');
    define('video', 'Видео');
    define('vectors', 'Векторы');

    define('contacts', 'Контакты');
    define('basket', 'Корзина');
    define('feedback', 'Отзывы');
    define('search', 'Поиск');
    define('sort','сортировка');
    define('date','Дата');
    define('biggest_first','сначала больше');
    define('lower_first','сначала меньше');

    define('login', 'Вход');
    define('sign_up', 'Регистрация');
    define('password', 'Пароль');

    define('start', 'Начать');
    define('name', 'Имя');
    define('surname', 'Фамилия');
    define('phone', 'Телефон');
    define('date_of_birth', 'Дата рождения');
    define('city', 'Город');
    define('country', 'Страна');

    define('forgot', 'Забыли пароль?');
    define('email', 'Email адресс');

    define('search_criteria', 'критерий поиска');
    define('accept', 'Принять');
    define('top', 'Топ 10');
    define('add_to_cart', 'Добавить в корзину');

    define('no_items', 'Здесь нет элементов');
    define('category', 'Категория');
    define('price', 'Цена');
    define('dimensions', 'Размены');
    define('downloads_count', 'Количство загрузок');
    define('buyer', 'Покупатель');
    define('seller', 'Продавец');
    define('type', 'Тип');
    define('words', 'Слова');

    define('popular', 'Популярное');
    define('otherPopular', 'Другие популярные элементы этой категории');

    define('type_your', 'Введите');

    define('salary', 'Заработок');

    define('buy', 'Купить');
    define('edit', 'Редактировать');
    define('new_item', 'Добавить новый элемент');
    define('del', 'Удалить');

    define('account', 'Аккаунт');
    define('account_info', 'Информация аккаунта');


    define('get_seller_account', 'Получить аккаунт продавца');
    define('get_admin_account', 'Получить аккаунт администратора');
    define('admin_key', 'Key');

    define('settings', 'Настройки');

    define('bought_items', 'Галлерея купленых элементов');
    define('user_items', 'Галлерея моих элементов');

    define('card', 'Оплатить картой');
    define('bill', 'Оплатить с личного счета');
    define('price_to_pay', 'Сумма к оплате');
    define('pay', 'Оплатить');

    define('card_number', 'Номер банковской карты');
    define('card_key', 'Ключ-пароль карты');

    define('total', 'Сумма к оплате');
    define('dollar', '$');

    define('current_salary', 'Текущее количество средств');

    define('add', 'Добавить');
    define('adding', 'Добавление нового элемента');

    define('choose', 'Выбрать файл');

}else{
    define('photo', 'Photo');
    define('video', 'Video');
    define('vectors', 'Vectors');

    define('contacts', 'Contacts');
    define('basket', 'Basket');
    define('feedback', 'Feedback');
    define('search', 'Search');
    define('sort','sort');
    define('date','Date');
    define('biggest_first','biggest first');
    define('lower_first','lower first');

    define('login', 'Login');
    define('sign_up', 'Sign up');
    define('password', 'Password');

    define('start', 'Start');
    define('name', 'Name');
    define('surname', 'Surname');
    define('phone', 'Phone');
    define('date_of_birth', 'Date of birth');
    define('city', 'City');
    define('country', 'Country');

    define('forgot', 'Forgot password?');
    define('email', 'Email address');

    define('search_criteria', 'search criteria');
    define('accept', 'Accept');
    define('top', 'Top 10');
    define('add_to_cart', 'Add to cart');

    define('no_items', 'No items there');
    define('category', 'Category');
    define('price', 'Price');
    define('dimensions', 'Dimensions');
    define('downloads_count', 'Downloads count');
    define('buyer', 'Buyer');
    define('seller', 'Seller');
    define('type', 'Type');
    define('words', 'Words');

    define('popular', 'Popular');
    define('otherPopular', 'Other popular items from this category');

    define('type_your', 'Type your');

    define('salary', 'Salary');

    define('buy', 'BUY');
    define('edit', 'Edit');
    define('new_item', 'Add new item');
    define('del', 'Delete');

    define('account', 'Account');
    define('account_info', 'Account information');


    define('get_seller_account', 'Get seller account');
    define('get_admin_account', 'Get administrator account');
    define('admin_key', 'Key');

    define('settings', 'Settings');

    define('bought_items', 'Bought items gallery');
    define('user_items', 'My items gallery');


    define('card', 'Pay by card');
    define('bill', 'Pay from my salary');
    define('price_to_pay', 'Money to pay');
    define('pay', 'Pay');

    define('card_number', 'Card number');
    define('card_key', 'Card key');

    define('total', 'Total price');
    define('dollar', '$');

    define('current_salary', 'Current salary');

    define('add', 'Add');
    define('adding', 'New item adding');

    define('item_name', 'Item name');
    define('choose', 'Choose file');
    define('choose_type', 'Choose item type');
    define('choose_category', 'Choose item category');
    define('check_words', 'Check some keywords for new item');
    define('choose_visibility', 'Choose visibility type');

    define('visible', 'Make item visible (It will appear in general gallery)');
    define('not_visible', 'Make item non-visible');
}






