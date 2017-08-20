<div class="page">

    <div class="basket_block">

    <?php if($basket_items_arr): ?>
         <?php foreach($basket_items_arr as $item): ?>


                <div class="basket_part_of_item basket_color_block_1" >
                    <form id = "open_item_<?= $item['id'];?>" action="item" method="post">
                        <input type="hidden" name="id" value="<?= $item['id'];?>">
                    </form>

                    <a href="item" onclick="document.getElementById('open_item_<?= $item['id'];?>').submit(); return false;">
                        <?php if(getimagesize ($item['path'])){ //true - image
                            //вывод изображения
                            echo "<img src =".$item['path']." alt = ".$item['name'].">";
                        }
                        else{//false - not image
                            //вывод видео
                            echo "<video class = \"video_item\" src =".$item['path'].">";
                        }
                        ?>
                    </a>

                </div>
                <div class="basket_part_of_item basket_item_info basket_color_block_2">
                    <p><?=$item['type'];?></p>
                    <p><?=$item['name'];?></p>
                    <p><?=$item['size'];?></p>


                </div>
                <div class="basket_part_of_item basket_color_block_3">
                    <p>
                        <?=$item['price'];?> $
                    </p>

                </div>
                <div class="basket_part_of_item basket_color_block_4">
                    <p>
                         <form action="basket" method="post">
                            <input type="hidden" name="deleted_item_id" value="<?= $item['id'];?>" >
                            <button type="submit" name="del_item_from_cart_button" value="delete" class="button button-block"/><?php print del; ?></button>
                         </form>

                    <form action="payment" method="post">
                        <input type="hidden" name="payed_item_id" value="<?= $item['id'];?>" >
                        <button type="submit" name="buy_button" value="<?php print buy; ?>" class="button button-block"/><?php print buy; ?></button>
                    </form>

                    </p>
                </div>

        <?php endforeach; ?>
    <?php else: ?>
        <h2><?php print no_items;?></h2>
    <?php endif; ?>

    </div>
    <script src="js/login.js"></script>

</div>
