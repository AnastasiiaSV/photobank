<?php
class Controller_Account extends Controller
{
    public $layouts = "index";

    function action_index()
    {
        //если пользователь входит в существующий аккаунт
        if (isset($_POST['login_button'])){
            if($_REQUEST['email_login'] && $_REQUEST['password_login']) {
                $loginUser=$_POST['email_login'];
                $select_user = array(
                    'where' => "email = '".$loginUser."'"
                );
                $model_users = new Model_Users($select_user); // создаем объект модели
                $user = $model_users->getOneRow(); // получаем
                $this->template->vars('user', $user);
            }

        }

        //если пользователь регистрируется
        elseif (isset($_POST['signup_button'])){

            if($_REQUEST['email_signup'] && $_REQUEST['password_signup']) {
                $model_users = new Model_Users(); // создаем объект модели
                $model_users->email = $_POST['email_signup'];
                $model_users->password = $_POST['password_signup'];
                $model_users->name = $_POST['name'];
                $model_users->surname = $_POST['surname'];
                $model_users->account_type_id = "1"; //изначальная регистрация - как простого пользователя (не продавца)
                $model_users->phone = $_POST['phone'];
                $model_users->date_of_birth = $_POST['date_of_birth'];;

                $model_users->save();
            }
        }


///////////////////////////////
        // создаем запрос для основного вывода
        //выбираем и выводим новейшие
        $select = array(
            'where' => "name = '"."vector"."'",
            'limit' => 1
        );
        $model = new Model_Items_Types($select); // создаем объект модели
        $itemType = $model->getOneRow(); // получаем все строки результата запроса
        // создаем запрос для основного вывода
        //выбираем и выводим новейшие
        $select = array(
            'where' => "type_id=".$itemType['id'], // условие
            'order' => 'time_of_creation DESC', // сортируем по дате (сначала нужно вывести новейшие фото)
            'limit' => 15 // задаем лимит
        );

        $model = new Model_Items($select); // создаем объект модели
        $itemsArr = $model->getAllRows(); // получаем все строки результата запроса
        //var_dump($itemsArr);
        $this->template->vars('itemsArr', $itemsArr);


        $this->template->view('account');
    }
}