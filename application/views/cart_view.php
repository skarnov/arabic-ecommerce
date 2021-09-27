<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="page-menu">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="active"><a href="<?php echo base_url(); ?>cart/show_cart">Shopping Cart</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <!-- CATEGORY-MENU-LIST START -->
                <div class="left-category-menu hidden-sm hidden-xs">
                    <div class="left-product-cat">
                        <div class="category-heading">
                            <h2>الموديلات</h2>
                        </div>
                        <div class="category-menu-list">
                            <ul>
                                <?php
                                foreach ($all_category as $v_category) {
                                    ?>        
                                    <li>
                                        <a href="<?php echo base_url(); ?>evis_store/product_listing/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END CATEGORY-MENU-LIST -->
            </div>
            <div class="col-md-9">
                <!-- Start Shopping-Cart -->
                <div class="shopping-cart">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-title">
                                <h2 class="entry-title">Shopping Cart</h2>
                            </div>
                            <!-- Start Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td class="text-center">Image</td>
                                            <td class="text-left">Product Name</td>
                                            <td class="text-left">Quantity</td>
                                            <td class="text-right">Unit Price</td>
                                            <td class="text-right">Total</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $contents = $this->cart->contents();
                                        foreach ($contents as $v_contents) {
                                            ?>
                                            <tr>
                                                <td class="text-center">
                                                    <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_contents['id']; ?>"><img class="img-thumbnail" src="<?php echo base_url() . $v_contents['image']; ?>" style="height: 80px; width: 60px;" /></a>
                                                </td>
                                                <td class="text-left"><?php echo $v_contents['name'] . '<br>(' . $v_contents['options']['colour'] . ')'; ?></td>
                                                <td class="text-left">
                                                    <div class="btn-block cart-put">
                                                        <form action="<?php echo base_url(); ?>cart/update_cart" method="POST">
                                                            <input type="hidden"  value="<?php echo $v_contents['rowid']; ?>" name="rowid"/>
                                                            <input type="number" name="product_quantity" value="<?php echo $v_contents['qty']; ?>" class="form-control" />
                                                            <div class="input-group-btn cart-buttons">
                                                                <button type="submit" class="btn btn-primary" data-toggle="tooltip" title="Update">
                                                                    <i class="fa fa-refresh"></i>
                                                                </button>
                                                                <a href="<?php echo base_url(); ?>cart/remove/<?php echo $v_contents['rowid']; ?>" class="btn btn-danger" data-toggle="tooltip" title="Remove">
                                                                    <i class="fa fa-times-circle"></i>
                                                                </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="text-right"><?php echo $v_contents['price']; ?></td>
                                                <td class="text-right"><?php echo $v_contents['subtotal']; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
                    $subtotal = $this->cart->total();
                    $total = $subtotal;
                    $grand_total = $total;
                    $sdata = array();
                    $sdata['grand_total'] = $grand_total;
                    $this->session->set_userdata($sdata);
                    ?>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-8">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="text-right">
                                            <strong>Total:</strong>
                                        </td>
                                        <td class="text-right"><?php echo $grand_total; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="shopping-checkout">
                        <a href="javascript:history.go(-1)" class="btn btn-default pull-left">Continue Shopping</a>
                        <a href="<?php echo base_url(); ?>checkout" class="btn btn-primary pull-right">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
