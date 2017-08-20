<div class="page">
    <div class="account_page">

        <div class="account_page_menu">


            <ul class="tab-group_account">
                <p>
                <li class="tab active">
                    <a href="#account_info">
                        <div class="account_page_menu_item">
                            <img src="images/icons/user_icon.png" alt=<?php print account; ?>>
                        </div>
                    </a>
                </li>
                </p>
                <li class="tab">
                    <a href="#account_bought_gallery">
                        <div class="account_page_menu_item">
                            <img src="images/icons/photo_galery.png" alt=<?php print account; ?>>
                        </div>
                    </a>
                </li>

                <li class="tab">
                    <a href="#user_gallery">
                        <div class="account_page_menu_item">
                            <img src="images/icons/photo_galery2.png" alt=<?php print account; ?>>
                        </div>
                    </a>
                </li>

                <li class="tab">
                    <a href="#user_settings">
                        <div class="account_page_menu_item">
                            <img src="images/icons/settings.png" alt=<?php print account; ?>>
                        </div>
                    </a>
                </li>

            </ul>

        </div>


        <div class="account_page_content tab-content_account">

            <div id="account_info">
                <h2><?= account_info; ?></h2>

                <form>

                    <div class="field-wrap_account">
                        <p> <label> <?php print email; ?> </label>
                        <input type="email" name="email_edit" disabled="true" placeholder='<?php  if($user) echo $user['email']; ?>'  autocomplete="on" required /></p>
                    </div>

                    <div class="field-wrap_account">
                        <p> <label> <?php print password; ?> </label>
                            <input type="text" name="password_edit" placeholder='<?php  if($user) echo $user['password']; ?>'  autocomplete="on" required /></p>
                    </div>

                    <div class="field-wrap_account">
                        <p> <label> <?php print name; ?> </label>
                            <input type="text" name="name_edit" placeholder='<?php  if($user) echo $user['name']; ?>'  autocomplete="on" required /></p>
                    </div>

                    <div class="field-wrap_account">
                        <p> <label> <?php print surname; ?> </label>
                            <input type="text" name="surname_edit" placeholder='<?php  if($user) echo $user['surname']; ?>'  autocomplete="on" required /></p>
                    </div>

                    <div class="field-wrap_account">
                        <p> <label> <?php print phone; ?> </label>
                            <input type="tel" name="phone_edit" placeholder='<?php  if($user) echo $user['phone']; ?>'  autocomplete="on" required /></p>
                    </div>

                    <div class="field-wrap_account">
                        <p> <label> <?php print date_of_birth; ?> </label>
                            <input type="date" name="date_of_birth_edit" placeholder='<?php  if($user) echo $user['date_of_birth']; ?>'  autocomplete="on" required /></p>
                    </div>



                    <div class="field-wrap_account">
                        <p>
                            <button type="submit" name="edit_account_button" value="<?php print edit; ?>" class="button button-block account_page_button"/><?php print edit; ?></button>
                        </p>
                    </div>


                </form>
            </div>

            <div id="account_bought_gallery">
                <h2><?= bought_items; ?></h2>

                <div class="item_container_primary">

                    <?php if($itemsArr): ?>
                        <?php foreach($itemsArr as $item): ?>
                            <div class="item_container">

                                <form id = "open_item_<?= $item['id'];?>" action="item" method="post">
                                    <input type="hidden" name="id" value="<?= $item['id'];?>">
                                </form>

                                <a href="item" onclick="document.getElementById('open_item_<?= $item['id'];?>').submit(); return false;">
                                    <img src = <?=$item['path'];?> alt = <?=$item['name'];?>>
                                </a>

                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h2><?php print no_items;?></h2>
                    <?php endif; ?>

                </div>

            </div>

            <div id="user_gallery">
                <h2><?= user_items; ?></h2>

                <div class="item_container_primary">

                    <?php if($itemsArr): ?>
                        <?php foreach($itemsArr as $item): ?>
                            <div class="item_container">

                                <form id = "open_item_<?= $item['id'];?>" action="item" method="post">
                                    <input type="hidden" name="id" value="<?= $item['id'];?>">
                                </form>

                                <a href="item" onclick="document.getElementById('open_item_<?= $item['id'];?>').submit(); return false;">
                                    <img src = <?=$item['path'];?> alt = <?=$item['name'];?>>
                                </a>

                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h2><?php print no_items;?></h2>
                    <?php endif; ?>

                    <form name="add_new_item" method="post" action="new_item">
                    <div id="download_new_item">
                        <div class="field-wrap_account">
                                <button type="submit" name="add_new_item_button" value="<?php print edit; ?>" class="button button-block account_page_button"/><?php print new_item; ?></button>
                        </div>
                    </div>
                    </form>

                </div>

            </div>

            <div id="user_settings">
                <h2><?= settings; ?></h2>


                <form>
                <div id="download_new_item">
                    <div class="field-wrap_account">
                        <button type="submit" name="add_new_item_button" value="<?php print get_admin_account; ?>" class="button button-block account_page_button"/><?php print get_seller_account; ?></button>
                    </div>
                </div>


                <div class="field-wrap_account">
                    <p> <label> <?php print city; ?> </label>
                        <input type="text" name="city_edit" placeholder='Chernihiv'  autocomplete="on"  /></p>
                </div>

                <div class="field-wrap_account">
                    <p> <label> <?php print country; ?> </label>
                        <input type="date" name="country_edit" placeholder='Ukraine'  autocomplete="on" /></p>
                </div>

                <div class="field-wrap_account">
                    <p> <label> <?php print card_number; ?> </label>
                        <input type="password" name="card_number_edit" placeholder='5555 5555 5555 555'  autocomplete="off"/></p>
                </div>

                <p><?php print salary; ?>: <?php  if($user) echo $user['password']; ?> $ </p>

                </form>


                <form>
                <div id="download_new_item">
                    <div class="field-wrap_account">
                        <button type="submit" name="add_new_item_button" value="<?php print get_admin_account; ?>" class="button button-block account_page_button"/><?php print get_admin_account; ?></button>
                    </div>
                </div>

                <div class="field-wrap_account">
                    <p> <label> <?php print admin_key; ?> </label>
                        <input type="date" name="admin_key_edit" placeholder=''  autocomplete="on" required /></p>
                </div>
                </form>

            </div>

        </div>

    </div>


    <script src="js/login.js"></script>

</div>