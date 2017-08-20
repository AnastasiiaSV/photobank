<?php
Class Model_Items Extends Model {

    // создаем свойства с такими же именами, как и имена столбцов в таблице
    public $id;
    public $name;
    public $path;
    public $price;
    public $type_id;
    public $category_id;
    public $seller_id;
    public $time_of_creation;
    public $downloads_count;

    //создаем метод, при обращении к которому возвращается массив с именами всех полей таблицы
    //Имена полей таблицы нам необходимы при выполнении методов в классе Model_Base – при обращении к базе данных.
    public function fieldsTable(){
        return array(
            'id' => 'id',
            'name' => 'name',
            'path' => 'path',
            'price' => 'price',
            'type_id' => 'type_id',
            'category_id' => 'category_id',
            'seller_id' => 'seller_id',
            'time_of_creation' => 'time_of_creation',
            'downloads_count' => 'downloads_count'
        );
    }
}