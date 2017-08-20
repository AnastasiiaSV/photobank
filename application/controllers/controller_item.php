<?php
class Controller_Item extends Controller
{
    public $layouts = "index";

    function action_index()
    {
        $idItem = (isset($_POST['id'])) ? (int)$_POST['id'] : false;

        //главный обьект
        $select_item = array(
            'where' => "id = $idItem", // условие
        );
        $model_items = new Model_Items($select_item); // создаем объект модели
        $item = $model_items->getOneRow(); // получаем
        $this->template->vars('item', $item);


        //тип обьектта (фото, видео, вектор)
        $idType = $item['type_id'];
        $select_type = array(
            'where' => "id = $idType", // условие
        );
        $model_types = new Model_Items_Types($select_type); // создаем объект модели
        $itemType = $model_types->getOneRow(); // получаем
        $this->template->vars('itemType', $itemType);

        //категория обьекта
        $idCategory = $item['category_id'];
        $select_category = array(
            'where' => "id = $idCategory", // условие
        );
        $model_categories = new Model_Items_Categories($select_category); // создаем объект модели
        $itemCategory = $model_categories->getOneRow(); // получаем
        $this->template->vars('itemCategory', $itemCategory);

        //продавец обьектта
        $idUser = $item['user_seller_id'];
        //var_dump($idUser);
        $select_seller = array(
            'where' => "id = $idUser", // условие
        );
        $model_users = new Model_Users($select_seller); // создаем объект модели
        $itemSeller = $model_users->getOneRow(); // получаем
        $this->template->vars('itemSeller', $itemSeller);


        //ключенвые слова
        $keywords[] = array("name" => $itemType['name']);
        /*получить id слов из таблицы многие ко многим*/
        $select_item_keywords_id = array(
            'where' => "item_id = $idItem"
        );
        $model_words_m_m = new Model_Keywords_To_Item($select_item_keywords_id);
        $keywords_id = $model_words_m_m->getAllRows();
        if($keywords_id){
            foreach ($keywords_id as $word_id) {
                $select_item_keywords = array(
                    'where' => "id = '" . $word_id['keyword_id'] . "'"
                );
                $model_words = new Model_Items_Keywords($select_item_keywords);
                $keyword = $model_words->getOneRow();
                array_push($keywords, $keyword);
            }
        }
        //var_dump($keywords);
        $this->template->vars('keywords', $keywords);


        ////////запрос для нижнего слайдера
        $select_to_slider = array(
            'where' => "category_id = $idCategory AND type_id = $idType", // условие
            'order' => 'downloads_count DESC',
            'limit' => 20 // задаем лимит
        );

        $model = new Model_Items($select_to_slider); // создаем объект модели
        $sliderItemsArr = $model->getAllRows(); // получаем все строки
        $this->template->vars('sliderItemsArr', $sliderItemsArr);



        /*
         * добавление в корзину
         */
        $existing_flag=false;

        if (isset($_POST['add_to_cart_button'])) {

            $counter = 1;

            // Массив Cookie содержит id товаров в корзине:
            if (isset($_COOKIE['User_basket'])) {

                //проверка, есть ли уже такой товар в корзине
                foreach ($_COOKIE['User_basket'] as $name => $value) {
                    if($value==$idItem){
                        $existing_flag=true;
                    }
                    if($name!=$counter){ //если в массиве куки есть пустое место
                        $position = $name;
                    }
                    $counter++;
                }

                if(!$existing_flag){
                    if (!isset($position)){$position = count($_COOKIE['User_basket'])+1;}
                    setcookie("User_basket[$position]", $idItem, strtotime( '+30 days' ) );
                }
            }
            else{
                setcookie("User_basket[1]", $idItem, strtotime( '+30 days' ) );
            }
        }
        unset($position);



        $this->template->view('item');
    }
}