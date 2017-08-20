<?php
Class Model_Users Extends Model {

    // создаем свойства с такими же именами, как и имена столбцов в таблице
    public $id;
    public $email;
    public $password;
    public $account_type_id;
    public $name;
    public $surname;
    public $phone;
    public $date_of_birth;

    //создаем метод, при обращении к которому возвращается массив с именами всех полей таблицы
    //Имена полей таблицы нам необходимы при выполнении методов в классе Model_Base – при обращении к базе данных.
    public function fieldsTable(){
        return array(
            'id' => 'id',
            'email' => 'email',
            'password' => 'password',
            'account_type_id' => 'account_type_id',
            'name' => 'name',
            'surname' => 'surname',
            'phone' => 'phone',
            'date_of_birth' => 'date_of_birth'
        );
    }
}