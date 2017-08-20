<div class="page">

    <div class="basket_block">

        <h3>
            <?= adding; ?>
        </h3>

        <form enctype="multipart/form-data" method="post" id="new_item">

        <div class="new_item_block basket_color_block_1" >
            <div class="field-wrap">
                <label>
                    <?php print item_name; ?><span class="req">*</span>
                </label>
                <input type="text" name="item_name" placeholder='<?php print item_name; ?>' />

                <label>
                    <?php print choose; ?><span class="req">*</span>
                </label>
                <input type="file" name="file" placeholder='<?php print choose; ?>' multiple accept="image/*,video/*" class="new_item_input">
            </div>
        </div>

        <div class="new_item_block basket_color_block_2">
            <label>
                <?php print choose_type; ?><span class="req">*</span>
            </label>
            <br><br>

            <div class="new_item_radio"
                <p><input name="type" type="radio" value="photo" checked class="new_item_radio"><?php print photo; ?></p>
            </div>

            <div class="new_item_radio"
                 <p><input name="type" type="radio" value="video" class="new_item_radio"><?php print video; ?></p>
           </div>

            <div class="new_item_radio"
                 <p><input name="type" type="radio" value="vector"  class="new_item_radio"><?php print vectors; ?></p>
            </div>

        </div>
        <div class="new_item_block basket_color_block_6 ">
            <label>
                <?php print choose_category; ?><span class="req">*</span>
            </label>
            <br>
            <select name="new_item_category" size="1" multiple form="new_item" class="new_item_select">
                <option label="Landscape" value="1" >Landscape</option>
                <option>Food</option>
            </select>
            <br>
        </div>

        <div class="new_item_block basket_color_block_4">
            <label>
                <?php print check_words; ?>
            </label>
            <br><br>

            <div class="new_item_check"
            <p><input name="visibility" type="checkbox" value="">Food</p>
             </div>
            <div class="new_item_check"
                <p><input name="visibility" type="checkbox" value="">Nature</p>
            </div>
            <div class="new_item_check"
                <p><input name="visibility" type="checkbox" value="">Animals</p>
            </div>
            <div class="new_item_check"
             <p><input name="visibility" type="checkbox" value="">People</p>
            </div>
            <div class="new_item_check"
                <p><input name="visibility" type="checkbox" value="">Cartoon</p>
            </div>

        </div>

        <div class="new_item_block basket_color_block_5">
            <label>
                <?php print choose_visibility; ?><span class="req">*</span>
            </label>
            <br><br>

            <div class="new_item_radio2"
            <p><input name="visibility" type="radio" value="vis" class="new_item_radio"><?php print visible; ?></p>
        </div>

            <div class="new_item_radio2"
            <p><input name="visibility" type="radio" value="not_vis"  class="new_item_radio"><?php print not_visible; ?> </p>
            </div>

        </div>

            <button type="submit" name="signup_button" class="button button-block"/><?php print add; ?></button>

        </form>

    </div>


</div>
