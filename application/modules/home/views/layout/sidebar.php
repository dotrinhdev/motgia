<aside id="sidebar">
    <?php
    if(isset($same_product) && count($same_product))
    foreach ($same_product as $giongnhau) { 
        $imggiongnhau = json_decode($giongnhau->images);
        ?>
        <div class="box_item">
            <a href="<?php echo site_url("san-pham/$giongnhau->productsID"); ?>" class="img_box">
                <img src="<?php echo base_url() . $imggiongnhau[0]; ?>" alt="000"/>
            </a>
            <h6><a href="<?php echo site_url("san-pham/$giongnhau->productsID"); ?>"><?php echo $giongnhau->name ?></a></h6>
            <span class="price"><?php echo $giongnhau->price; ?></span>
        </div>

<?php } ?>
</aside><!--End #sidebar-->