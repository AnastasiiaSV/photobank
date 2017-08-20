<div class="page">

    <a href="photo"><h1><?php print photo; ?></h1></a>
	<hr/>

			<div class="items_container_main_large">

                <?php if($photoArr): ?>
                    <?php foreach($photoArr as $item): ?>
                        <div class="item_container_main_single">

                                <form id = "open_item_<?= $item['id'];?>" action="item" method="post">
                                    <input type="hidden" name="id" value="<?= $item['id'];?>">
                                </form>

                                <a href="item" onclick="document.getElementById('open_item_<?= $item['id'];?>').submit(); return false;">
                                    <img src = <?=$item['path'];?> alt = <?=$item['name'];?>>
                                </a>
                        </div>

                    <?php endforeach; ?>
                <?php else: ?>
                    <h2><?php print no_items; ?></h2>
                <?php endif; ?>

            </div>


    <a href="vectors"><h1><?php print vectors; ?></h1></a>
	<hr/>

    <div class="items_container_main_large">

        <?php if($vectorsArr): ?>
            <?php foreach($vectorsArr as $item): ?>
                <div class="item_container_main_single">

                    <form id = "open_item_<?= $item['id'];?>" action="item" method="post">
                        <input type="hidden" name="id" value="<?= $item['id'];?>">
                    </form>

                    <a href="item" onclick="document.getElementById('open_item_<?= $item['id'];?>').submit(); return false;">
                        <img src = <?=$item['path'];?> alt = <?=$item['name'];?>>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <h2><?php print no_items; ?></h2>
        <?php endif; ?>

    </div>


    <a href="video"><h1><?php print video; ?></h1></a>
	<hr/>

    <div class="items_container_main_large">

        <?php if($videoArr): ?>
            <?php foreach($videoArr as $item): ?>

                <div class="item_container_main_single">

                    <form id = "open_item_<?= $item['id'];?>" action="item" method="post">
                        <input type="hidden" name="id" value="<?= $item['id'];?>">
                    </form>

                    <a href="item" onclick="document.getElementById('open_item_<?= $item['id'];?>').submit(); return false;">
                        <video class="video">
                            <source src = <?=$item['path'];?> >
                        </video>
                    </a>
                </div>

            <?php endforeach; ?>
        <?php else: ?>
            <h2><?php print no_items; ?></h2>
        <?php endif; ?>

    </div>

</div>
