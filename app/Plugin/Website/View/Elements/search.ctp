<div class="search-section">
    <div class="container">
        <div class="row text-center">
            <form action="<?php echo $this->base; ?>/listings" method="post" name="property-search" id="property-search">			
                <div class="select-wrapper select-small ajust-center" id="select-ptype">
                    <p>Property type</p>
                    <select name='var_ptype' id='var_ptype' class='elselect' >
                        <option value=''>Any</option>
                        <option class="level-0" value="House" <?php if ($var_ptype == "House") {
    echo "selected";
} ?>>House</option>
                        <option class="level-0" value="Apartment" <?php if ($var_ptype == "Apartment") {
    echo "selected";
} ?>>Building</option>
                    </select>
                </div>
                <div class="select-wrapper select-small ajust-center" id="select-location">
                    <p>Locations</p>
                    <select name='var_location' id='var_location' class='elselect' >
                        <option value=''>Any</option>
                        <?php
                        foreach ($locations as $location) {
                            if ($var_location == $location['Location']['city']) {
                                echo "<option class='level-0' value='{$location['Location']['city']}' selected>{$location['Location']['city']}</option>";
                            } else {
                                echo "<option class='level-0' value='{$location['Location']['city']}'>{$location['Location']['city']}</option>";
                            }
                        }
                        ?>
                    </select>

                </div>

                <div class="select-wrapper select-small ajust-center" id="select-bathrooms">
                    <p>Bathrooms</p>
                    <select class="elselect" id="bathrooms" name="bathrooms">
                        <option value="">Any</option>
                        <option  value="1" <?php if ($bathrooms == "1") {
                            echo "selected";
                        } ?>>1</option>
                        <option  value="2" <?php if ($bathrooms == "2") {
                            echo "selected";
                        } ?>>2</option>
                        <option  value="3" <?php if ($bathrooms == "3") {
                            echo "selected";
                        } ?>>3</option>
                        <option  value="4" <?php if ($bathrooms == "4") {
                            echo "selected";
                        } ?>>4</option>
                        <option  value="5" <?php if ($bathrooms == "5") {
                            echo "selected";
                        } ?>>5</option>
                        <option  value="6" <?php if ($bathrooms == "6") {
                            echo "selected";
                        } ?>>6</option>
                        <option  value="7" <?php if ($bathrooms == "7") {
                            echo "selected";
                        } ?>>7</option>
                        <option  value="8" <?php if ($bathrooms == "8") {
                            echo "selected";
                        } ?>>8</option>
                        <option  value="9" <?php if ($bathrooms == "9") {
                            echo "selected";
                        } ?>>9</option>
                        <option  value="10" <?php if ($bathrooms == "10") {
                            echo "selected";
                        } ?>>10</option>
                    </select>
                </div>

                <div class="select-wrapper select-small ajust-center" id="select-bedrooms">
                    <p>Bedrooms</p>
                    <select class="elselect" id="bedrooms" name="bedrooms">
                        <option value="">Any</option>
                        <option  value="1" <?php if ($bedrooms == "1") {
                            echo "selected";
                        } ?>>1</option>
                        <option  value="2" <?php if ($bedrooms == "2") {
                            echo "selected";
                        } ?>>2</option>
                        <option  value="3" <?php if ($bedrooms == "3") {
                            echo "selected";
                        } ?>>3</option>
                        <option  value="4" <?php if ($bedrooms == "4") {
                            echo "selected";
                        } ?>>4</option>
                        <option  value="5" <?php if ($bedrooms == "5") {
                            echo "selected";
                        } ?>>5</option>
                        <option  value="6" <?php if ($bedrooms == "6") {
                            echo "selected";
                        } ?>>6</option>
                        <option  value="7" <?php if ($bedrooms == "7") {
                            echo "selected";
                        } ?>>7</option>
                        <option  value="8" <?php if ($bedrooms == "8") {
                            echo "selected";
                        } ?>>8</option>
                        <option  value="9" <?php if ($bedrooms == "9") {
                            echo "selected";
                        } ?>>9</option>
                        <option  value="10" <?php if ($bedrooms == "10") {
                            echo "selected";
                        } ?>>10</option>
                    </select>
                </div>

                <div class="select-wrapper select-small ajust-center" id="select-minprice">
                    <p>Min Price</p>
                    <select class="elselect" id="minprice" name="minprice">
                        <option value="">Any</option>

<?php
$loop = true;
$plus = 10;
while ($loop) {
    if ($plus == 5000) {
        $loop = false;
    }
    $three = "000";
    if ($minprice == "{$plus}{$three}") {
        echo "<option  value='{$plus}{$three}' selected>{$plus},{$three}</option>";
    } else {
        echo "<option  value='{$plus}{$three}'>{$plus},{$three}</option>";
    }
    $plus = ($plus + 10);
}
?>

                    </select>
                </div>

                <div class="select-wrapper select-small ajust-center" id="select-maxprice">
                    <p>Max Price</p>
                    <select class="elselect" id="maxprice" name="maxprice">
                        <option value="">Any</option>
<?php
$loop = true;
$plus = 10;
while ($loop) {
    if ($plus == 5000) {
        $loop = false;
    }
    $three = "000";
    if ($maxprice == "{$plus}{$three}") {
        echo "<option  value='{$plus}{$three}' selected>{$plus},{$three}</option>";
    } else {
        echo "<option  value='{$plus}{$three}'>{$plus},{$three}</option>";
    }
    $plus = ($plus + 10);
}
?>
                    </select>
                </div>
                <input type="submit" value="Search" class="yellow-btn">
                <input type="hidden" name="_method" value="POST">
            </form>
        </div>        
    </div>
</div>
<!--<style>
/*    .select-wrapper.select-small.ajust-center{
        clear: both;
    }
    .select-wrapper .select-small{
        display: inline-block;
    }*/
</style>-->