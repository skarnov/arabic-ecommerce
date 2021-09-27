<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="page-menu">
                    <li><a href="<?php echo base_url(); ?>">الرئيسية</a></li>
                    <li class="active"><a href="#">Product Search</a></li>
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
            <div class="col-md-9 col-xs-12">
                <!-- START PRODUCT-AREA -->
                <div class="product-area">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Start Product-Menu -->
                            <div class="product-menu">
                                <div class="product-title">
                                    <h3 class="title-group-3 gfont-1">Product Search</h3>
                                </div>
                            </div>
                            <div class="product-filter">
                                <ul role="tablist">
                                    <li role="presentation" class="list">
                                        <a href="#display-1-1" role="tab" data-toggle="tab"></a>
                                    </li>
                                    <li role="presentation"  class="grid active">
                                        <a href="#display-1-2" role="tab" data-toggle="tab"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Product-Menu -->
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <?php
                            if ($product_search == !NULL) {
                                ?>
                                <!-- Start Product -->
                                <div class="product">
                                    <div class="tab-content">
                                        <!-- Product -->
                                        <div role="tabpanel" class="tab-pane fade" id="display-1-1">
                                            <div class="row">
                                                <div class="listview">
                                                    <?php
                                                    foreach ($product_search as $v_search) {
                                                        ?>
                                                        <!-- Start Single-Product -->
                                                        <div class="single-product">
                                                            <div class="col-md-3 col-sm-4 col-xs-12">
                                                                <div class="label_new">
                                                                    <span class="new"><?php echo $v_search->product_tag; ?></span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_search->product_id; ?>">
                                                                        <img class="primary-img" src="<?php echo base_url() . $v_search->product_image_0; ?>" alt="Product">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 col-sm-8 col-xs-12">	
                                                                <div class="product-description">
                                                                    <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_search->product_id; ?>"><?php echo $v_search->product_name ?></a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price"><?php echo $v_search->product_price; ?> ريال</span>
                                                                        <span class="old-price"><?php echo $v_search->product_old_price; ?> ريال</span>
                                                                    </div>
                                                                    <p class="description"><?php echo $v_search->product_description; ?></p>
                                                                    <div class="product-action">
                                                                        <?php
                                                                        $customer_id = $this->session->userdata('customer_id');
                                                                        if ($customer_id == NULL) {
                                                                            ?>
                                                                            <div class="button-group">
                                                                                <div class="product-button">
                                                                                    <a href="<?php echo base_url(); ?>login" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 144px;"><i class="fa fa-shopping-cart"></i> اضف الى السلة</a>
                                                                                    <a href="<?php echo base_url(); ?>login" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 144px;"><i class="fa fa-heart-o"></i>القائمة المفضلة </a>
                                                                                </div>
                                                                            </div>
                                                                            <?php
                                                                        } else {
                                                                            ?>
                                                                            <div class="product-button">
                                                                                <button data-toggle="modal" data-target="#smallModal" onclick="addToCart(<?php echo $v_search->product_id; ?>);"><i class="fa fa-shopping-cart"></i> اضف الى السلة</button>
                                                                                <button data-toggle="modal" data-target="#Wishlist" onclick="addToWishlist(<?php echo $v_search->product_id; ?>);"><i class="fa fa-heart-o"></i>القائمة المفضلة </button>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Single-Product -->
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product -->
                                        <!-- Start Product-->
                                        <div role="tabpanel" class="tab-pane fade in  active" id="display-1-2">
                                            <div class="row">
                                                <!-- Start Single-Product -->
                                                <?php
                                                foreach ($product_search as $v_search) {
                                                    ?>
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new"><?php echo $v_search->product_tag; ?></span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_search->product_id; ?>">
                                                                    <img class="primary-img" src="<?php echo base_url() . $v_search->product_image_0; ?>" alt="Product" style="height:200px;">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">                                                          
                                                                <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_search->product_id; ?>"><?php echo $v_search->product_name ?></a></h5>
                                                                <div class="price-box">
                                                                    <span class="price"><?php echo $v_search->product_price; ?> ريال</span>
                                                                    <span class="old-price"><?php echo $v_search->product_old_price; ?> ريال</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-action">
                                                                <?php
                                                                $customer_id = $this->session->userdata('customer_id');
                                                                if ($customer_id == NULL) {
                                                                    ?>
                                                                    <div class="button-group">
                                                                        <div class="product-button">
                                                                            <a href="<?php echo base_url(); ?>login" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 144px;"><i class="fa fa-shopping-cart"></i> اضف الى السلة</a>
                                                                            <a href="<?php echo base_url(); ?>login" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 144px;"><i class="fa fa-heart-o"></i>القائمة المفضلة </a>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <div class="product-button">
                                                                        <button data-toggle="modal" data-target="#smallModal" onclick="addToCart(<?php echo $v_search->product_id; ?>);"><i class="fa fa-shopping-cart"></i> اضف الى السلة</button>
                                                                        <button data-toggle="modal" data-target="#Wishlist" onclick="addToWishlist(<?php echo $v_search->product_id; ?>);"><i class="fa fa-heart-o"></i>القائمة المفضلة </button>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div>												
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                        <!-- End Product -->
                                    </div>
                                </div>
                                <!-- End Product -->
                                <?php
                            } else {
                                ?>
                                <h3 style="color:red">Not Found Any Product</h3>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-AREA -->
            </div>
        </div>
    </div>
</section>