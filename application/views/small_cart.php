<?php
$contents = $this->cart->contents();
foreach ($contents as $v_contents) {
    ?>
    <div class="cart-img-details">
        <div class="cart-img-photo">
            <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_contents['id']; ?>"><img src="<?php echo base_url() . $v_contents['image']; ?>"></a>
        </div>
        <div class="cart-img-content">
            <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_contents['id']; ?>"><h4><?php echo $v_contents['name']; ?></h4></a>
            <span>
                <strong class="text-right">1 x</strong>
                <strong class="cart-price text-right">ريال <?php echo $v_contents['price']; ?></strong>
            </span>
        </div>
        <div class="pro-del">
            <a href="#"><i class="fa fa-times"></i></a>
        </div>
    </div>
    <div class="clear"></div>
    <?php
    }
        $subtotal = $this->cart->total();
        $total = $subtotal;
        $grand_total = $total;
        $sdata = array();
        $sdata['grand_total'] = $grand_total;
        $this->session->set_userdata($sdata);
    ?>
<div class="cart-inner-bottom">
    <span class="total">
        المجموع:
        <span class="amount">ريال <?php echo $grand_total ?></span>
    </span>
    <span class="cart-button-top">
        <a href="<?php echo base_url(); ?>cart/show_cart">عرض السلة</a>
        <a href="<?php echo base_url(); ?>checkout">الدفع</a>
    </span>
</div>