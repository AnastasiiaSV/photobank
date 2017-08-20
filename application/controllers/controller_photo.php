<?php
class Controller_Photo extends Controller
{
    public $layouts = "index";

    function action_index()
    {
        // создаем запрос для основного вывода
        //выбираем и выводим новейшие
        $select = array(
            'where' => "name = '"."photo"."'",
            'limit' => 1
        );
        $model = new Model_Items_Types($select); // создаем объект модели
        $itemType = $model->getOneRow(); // получаем все строки результата запроса

       // создаем запрос для основного вывода
        //выбираем и выводим новейшие
        $select = array(
            'where' => "type_id=".$itemType['id'], // условие (type of photo == 1)
            'order' => 'time_of_creation DESC', // сортируем по дате (сначала нужно вывести новейшие фото)
            'limit' => 15 // задаем лимит
        );

        $model = new Model_Items($select); // создаем объект модели
        $itemsArr = $model->getAllRows(); // получаем все строки результата запроса
        //var_dump($itemsArr);
        $this->template->vars('itemsArr', $itemsArr);

//////// создаем запрос для бокового слайдера
        $select_to_slider = array(
            'where' => "type_id=".$itemType['id'], // условие
            'order' => 'downloads_count DESC',
            'limit' => 10 // задаем лимит
        );

        $model = new Model_Items($select_to_slider); // создаем объект модели
        $sliderItemsArr = $model->getAllRows(); // получаем все строки
        $this->template->vars('sliderItemsArr', $sliderItemsArr);

        $this->template->view('photo');
    }
}