<div class="page">

    <div class="item_block">

            <?php if($item):
                $size = getimagesize ($item['path']);
                if($size){ //true - image
                    $out_type = $size['mime'];
                    $out_size = $size[0]."x".$size[1];

                    //вывод изображения
                    echo "<img src =".$item['path']." alt = ".$item['name'].">";
                }
                else{//false - not image
                    $out_type="video"; //!!!!!!!!!!!!!!!!!!!
                    $out_size = 1;

                    //вывод видео
                    echo "<video class = \"video_item\" src =".$item['path']." controls ".">";
                }
           ?>

            <?php else: ?>
                <h2><?php print no_items; ?></h2>
            <?php endif; ?>

        <div class="item_bloc_icon">
            <img src="images/icons/site_icon.png">
        </div>
    </div>

    <div class="item_info_block">
        <?php if($item): ?>

            <p>
                <?=$itemType['name'];?><img src="images/icons/line_icon.png">
                <?=$item['name'];?><img src="images/icons/line_icon.png">
                <?=$out_type;?>
            </p>
            <p><img src="images/icons/price_icon.png" alt=<?php print price; ?> title=<?php print price; ?>> <?=$item['price'];?> $ </p>
            <p><img src="images/icons/dimensions_icon.png" alt=<?php print dimensions; ?> title=<?php print dimensions; ?>>
                <?=$out_size?>
            </p>

            <p><img src="images/icons/downloads_icon.png" alt=<?php print downloads_count; ?> title=<?php print downloads_count; ?>>
                <?=$item['downloads_count'];?></p>

            <p class="info_tag">

                <?php if($keywords): ?>
                    <?php foreach($keywords as $word): ?>
                        <img  src="images/icons/tag_icon.png" alt="tag">
                        <?php echo $word["name"];?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h2><?php print no_items; ?></h2>
                <?php endif; ?>

            </p>

            <p><img src="images/icons/user_icon.png" alt=<?php print seller; ?> title=<?php print seller; ?>>
                    <?= $itemSeller['name'];?>  <?= $itemSeller['surname'];?> </p>
            <p><img src="images/icons/mail_icon.png" alt=<?php print seller; ?> title=<?php print seller; ?>>
                <a href=<?= "mailto:".$itemSeller['email'];?>> <?= $itemSeller['email'];?> </a> </p>

        <?php else: ?>
            <h2><?php print no_items; ?></h2>
        <?php endif; ?>



            <form id = "open_item_<?= $item['id'];?>" action="item" method="post">
                <input type="hidden" name="id" value="<?= $item['id'];?>">
                <button name="add_to_cart_button" class="button button-block"/><?php print add_to_cart; ?></button>
            </form>

            <a href="item" onclick="document.getElementById('open_item_<?= $item['id'];?>').submit(); return false;">
            </a>


    </div>

    <div class="item_extra_info_block">
        <h3> <?php print otherPopular; ?> (<?=$itemCategory['name'];?>) </h3>
        <?php if($sliderItemsArr): ?>
            <?php foreach($sliderItemsArr as $item): ?>
                <div class="item_bottom_slider">
                    <a href="item?id=<?= $item['id'];?>">
                        <?php if($size){ //true - image
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
            <?php endforeach; ?>
        <?php else: ?>
            <h2><?php print no_items; ?></h2>
        <?php endif; ?>

    </div>
</div>