<?php
class Controller_Photobank extends Controller
{
    public $layouts = "index";
    function action_index()
    {

        // создаем запрос
        //выбираем и выводим новейшие
        $select_photo = array(
            'where' => 'type_id=1', // условие
            'group' => 'time_of_creation', // группируем
            'order' => 'id DESC', // сортируем по дате (сначала нужно вывести новейшие фото)
            'limit' => 6 // задаем лимит
        );
        $model = new Model_Items($select_photo); // создаем объект модели
        $photoArr = $model->getAllRows(); // получаем все строки результата запроса
        $this->template->vars('photoArr', $photoArr);

        $select_vectors = array(
            'where' => 'type_id=3', // условие
            'group' => 'time_of_creation', // группируем
            'order' => 'id DESC', // сортируем по дате (сначала нужно вывести новейшие фото)
            'limit' => 6 // задаем лимит
        );
        $model = new Model_Items($select_vectors); // создаем объект модели
        $vectorsArr = $model->getAllRows(); // получаем все строки результата запроса
        $this->template->vars('vectorsArr', $vectorsArr);


        $select_video = array(
            'where' => 'type_id=2', // условие
            'group' => 'time_of_creation', // группируем
            'order' => 'id DESC', // сортируем по дате (сначала нужно вывести новейшие фото)
            'limit' => 6 // задаем лимит
        );
        $model = new Model_Items($select_video); // создаем объект модели
        $videoArr = $model->getAllRows(); // получаем все строки результата запроса
        $this->template->vars('videoArr', $videoArr);


        $this->template->view('main_page');
    }
}
