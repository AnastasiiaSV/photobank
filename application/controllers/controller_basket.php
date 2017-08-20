<?php
class Controller_Basket extends Controller
{
    public $layouts = "index";

    function action_index()
    {

        /*нажата кнопка удаления элемента из корзины*/
        if (isset($_POST['del_item_from_cart_button'])) {

            $idDeletedItem = (isset($_POST['deleted_item_id'])) ? (int)$_POST['deleted_item_id'] : false;

           // var_dump($idDeletedItem);

            if (isset($_COOKIE['User_basket'])) {

                foreach ($_COOKIE['User_basket'] as $name => $value) {
                    if($value==$idDeletedItem){
                        setcookie("User_basket[$name]", $idDeletedItem, strtotime( '-30 days' ) );
                    }
                }
            }

            header("Location: ../photobank/basket"); //перезагрузить страницу после удаления элемента
        }


       // var_dump($_COOKIE['User_basket']);
        $basket_items_arr = array();
        unset($basket_items_arr[0]);

        if (isset($_COOKIE['User_basket'])) {

            foreach ($_COOKIE['User_basket'] as $name => $value) {

                $select_basket_items = array(
                    'where' => "id = '" . $value . "'"
                );
                $model_words = new Model_Items($select_basket_items);
                $item = $model_words->getOneRow();


                /*размеры или длительность файла*/
                $size = getimagesize ($item['path']);
                if($size){ //true - image
                    $out_type = $size['mime'];
                    $out_size = $size[0]."x".$size[1];
                }
                else{//false - not image
                    $out_type="video"; //!!!
                    $out_size = 1;
                }
                $item['size'] = $out_size;


                //тип обьектта (фото, видео, вектор)
                $idType = $item['type_id'];
                $select_type = array(
                    'where' => "id = $idType", // условие
                );
                $model_types = new Model_Items_Types($select_type); // создаем объект модели
                $itemType = $model_types->getOneRow(); // получаем

                $item['type'] = $itemType['name'];


                $basket_items_arr[] = $item;
            }
        }

       // var_dump($basket_items_arr);


        $this->template->vars('basket_items_arr', $basket_items_arr);

        $this->template->view('basket');

    }
}