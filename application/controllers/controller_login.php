<?php
class Controller_Login extends Controller
{
    public $layouts = "index";

    function action_index()
    {
        $model = new Model_Users();

        $this->template->view('login');


            /*
            $model=new Application_Models_Auth;
            $resultValid=$model->ValidData($_REQUEST['login'],$_REQUEST['pass']);
            //полученный результат проверки записываем в переменные для вывода в публичной части сайта
            $this->unVisibleForm=$resultValid['unVisibleForm'];
            $this->userName=$resultValid['login'];
            $this->msg=$resultValid['msg'];
            $this->login=$resultValid['login'];
            $this->pass=$resultValid['pass'];

            if($_REQUEST['location']) header('Location: '.$_REQUEST['location']);

        }
        else
            if($_SESSION["Auth"])$this->unVisibleForm=true;	//Если пользователь уже авторизован, не будем выводить ему форму авторизации


        //если пользователь послал запрос о выходе из кабинета, сбрасываем флаги авторизации
        if($_REQUEST['out']=="1"){
            $_SESSION["Auth"]=false;
            $_SESSION["User"]="";
            $_SESSION["role"]="";
            $this->unVisibleForm=false;
        }
*/
        }
}