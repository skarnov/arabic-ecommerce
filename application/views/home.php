<!-- Category slider area start -->
<div class="category-slider-area">
    <div class="container">
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
                <!-- slider -->
                <div class="slider-area">
                    <div class="bend niceties preview-1">
                        <div id="ensign-nivoslider" class="slides" style="height: 384px;">
                            <?php
                            foreach ($all_slide as $v_slide) {
                                ?>
                                <img src="<?php echo base_url() . $v_slide->slide_image; ?>"/>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- slider end-->
            </div>
        </div>
    </div>
</div>
<!-- Category slider area End -->		
<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <!-- START HOT-DEALS-AREA -->
                <div class="hot-deals-area carosel-circle">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="area-title">
                                <h3 class="title-group border-red gfont-1">عروض مميزة</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="active-hot-deals">
                            <!-- Start Single-hot-deals -->
                            <?php
                            foreach ($discount_time as $v_discount_time) {
                                ?>
                                <div class="col-xs-12">
                                    <div class="single-hot-deals">
                                        <div class="hot-deals-photo">
                                            <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_discount_time->product_id; ?>"><img src="<?php echo base_url() . $v_discount_time->product_image_0; ?>" alt="Product" style="height:200px;"></a>
                                        </div>
                                        <div class="count-down">
                                            <div class="timer">
                                                <div data-countdown="<?php echo $v_discount_time->discount_end_time; ?>"></div>
                                            </div> 
                                        </div>
                                        <div class="hot-deals-text">
                                            <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_discount_time->product_id; ?>" class="name-group">جوال <?php echo $v_discount_time->product_quantity; ?></a></h5>
                                            <div class="price-box">
                                                <span class="price gfont-2"><?php echo $v_discount_time->product_price; ?> ريال</span>
                                                <?php 
                                                    if($v_discount_time->product_old_price !=0.00)
                                                    {
                                                ?>
                                                <span class="old-price gfont-2"><?php echo $v_discount_time->product_old_price; ?> ريال</span>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <!-- End Single-hot-deals -->
                        </div>
                    </div>
                </div>
                <!-- END HOT-DEALS-AREA -->
                <!-- START SMALL-PRODUCT-AREA -->
                <div class="small-product-area carosel-navigation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="area-title">
                                <h3 class="title-group gfont-1">الاكثر مبيعا</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="active-bestseller sidebar">
                            <div class="col-xs-12">
                                <?php
                                foreach ($best_selling as $v_best_selling) {
                                    ?>
                                    <!-- Start Single-Product -->
                                    <div class="single-product small-product">
                                        <div class="product-img">
                                            <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_best_selling->product_id; ?>">
                                                <img class="primary-img" src="<?php echo base_url() . $v_best_selling->product_image_0; ?>" alt="Product" style="height:200px;">
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_best_selling->product_id; ?>">جوال <?php echo $v_best_selling->product_quantity; ?></a></h5>
                                            <div class="price-box">
                                                <span class="price">ريال <?php echo $v_best_selling->product_price; ?></span>
                                                <span class="old-price">ريال <?php echo $v_best_selling->product_old_price; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single-Product -->
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SMALL-PRODUCT-AREA -->
            </div>
            <div class="col-md-9 col-sm-9">
                <!-- START PRODUCT-BANNER -->
                <div class="product-banner home1-banner">
                    <div class="row">
                        <div class="col-md-7 banner-box1">
                            <div class="single-product-banner">
                                <?php
                                foreach ($all_banner as $v_banner) {
                                    if ($v_banner->banner_position == 1) {
                                        ?>
                                        <a href="#"><img src="<?php echo base_url() . $v_banner->banner_image; ?>" alt="Product Banner"></a>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-5 banner-box2">
                            <div class="single-product-banner">
                                <?php
                                foreach ($all_banner as $v_banner) {
                                    if ($v_banner->banner_position == 2) {
                                        ?>
                                        <a href="#"><img src="<?php echo base_url() . $v_banner->banner_image; ?>" alt="Product Banner"></a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-BANNER -->
                <!-- START PRODUCT-AREA -->
                <?php
                foreach ($display_category as $v_display_category) {
                    ?>
                    <div class="product-area">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <!-- Start Product-Menu -->
                                <div class="product-menu">
                                    <div class="product-title">
                                        <h3 class = "title-group-2 gfont-1"><?php echo $v_display_category->category_name ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product-Menu -->
                        <div class="clear"></div>
                        <!-- Start Product -->
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="product carosel-navigation">
                                    <div class="tab-content">
                                        <!-- Product = display-1-1 -->
                                        <div role="tabpanel" class="tab-pane fade in active" id="display-1-1">
                                            <div class="row">
                                                <div class="active-product-carosel">
                                                    <!-- Start Single-Product -->
                                                    <?php
                                                    foreach ($category_product[$v_display_category->category_id] as $v_product) {
                                                        $product_tag = $v_product->product_tag;
                                                        if ($product_tag == NULL) {
                                                            ?>
                                                            <div class="col-xs-12">
                                                                <div class="single-product">
                                                                    <div class="product-img">
                                                                        <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_product->product_id; ?>">
                                                                            <img class="primary-img" src="<?php echo base_url() . $v_product->product_image_0; ?>" alt="Product" style="height:200px;">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_product->product_id; ?>">جوال  <?php echo $v_product->product_quantity; ?></a></h5>
                                                                        <div class="price-box">
                                                                            <span class="price">ريال <?php echo $v_product->product_price; ?></span>
                                                                            <?php 
                                                                                if($v_product->product_old_price !=0.00)
                                                                                {
                                                                            ?>
                                                                            <span class="old-price">ريال<?php echo $v_product->product_old_price; ?></span>
                                                                            <?php
                                                                                }
                                                                            ?>
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
                                                                                <button data-toggle="modal" data-target="#smallModal" onclick="addToCart(<?php echo $v_product->product_id; ?>);"><i class="fa fa-shopping-cart"></i> اضف الى السلة</button>
                                                                                <button data-toggle="modal" data-target="#Wishlist" onclick="addToWishlist(<?php echo $v_product->product_id; ?>);"><i class="fa fa-heart-o"></i>القائمة المفضلة </button>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </div>												
                                                                </div>
                                                            </div>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <div class="col-xs-12">
                                                                <div class="single-product">
                                                                    <div class="label_new">
                                                                        <span class="new"><?php echo $v_product->product_tag; ?></span>
                                                                    </div>
                                                                    <div class="product-img">
                                                                        <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_product->product_id; ?>">
                                                                            <img class="primary-img" src="<?php echo base_url() . $v_product->product_image_0; ?>" alt="Product" style="height:200px;">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_product->product_id; ?>">جوال  <?php echo $v_product->product_quantity; ?></a></h5>
                                                                        <div class="price-box">
                                                                            <span class="price">ريال <?php echo $v_product->product_price; ?></span>
                                                                            <?php 
                                                                                if($v_product->product_old_price !=0.00)
                                                                                {
                                                                            ?>
                                                                            <span class="old-price">ريال<?php echo $v_product->product_old_price; ?></span>
                                                                            <?php
                                                                                }
                                                                            ?>
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
                                                                                <button data-toggle="modal" data-target="#smallModal" onclick="addToCart(<?php echo $v_product->product_id; ?>);"><i class="fa fa-shopping-cart"></i> اضف الى السلة</button>
                                                                                <button data-toggle="modal" data-target="#Wishlist" onclick="addToWishlist(<?php echo $v_product->product_id; ?>);"><i class="fa fa-heart-o"></i>القائمة المفضلة </button>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </div>												
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Product = display-1-1 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product -->
                    </div>
                    <!-- END PRODUCT-AREA -->
                    <?php
                }
                ?>
                <!-- END PRODUCT-AREA -->
                <!-- START PRODUCT-BANNER -->
                <div class="product-banner">
                    <div class="row">
                        <div class="col-md-7 banner-box1">
                            <div class="single-product-banner">
                                <?php
                                foreach ($all_banner as $v_banner) {
                                    if ($v_banner->banner_position == 3) {
                                        ?>
                                        <a href="#"><img src="<?php echo base_url() . $v_banner->banner_image; ?>" alt="Product Banner"></a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-md-5 banner-box2">
                            <div class="single-product-banner">
                                <?php
                                foreach ($all_banner as $v_banner) {
                                    if ($v_banner->banner_position == 4) {
                                        ?>
                                        <a href="#"><img src="<?php echo base_url() . $v_banner->banner_image; ?>" alt="Product Banner"></a>

                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-BANNER -->
                <!-- START -->
                <!-- START SMALL-PRODUCT-AREA -->
                <div class="small-product-area">
                    <!-- Start Product-Menu -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product-menu">
                                <ul role="tablist">
                                    <li role="presentation" class=" active"><a href="#display-4-1" role="tab" data-toggle="tab">اخر لعروض</a></li>
                                    <li role="presentation"><a href="#display-4-2" role="tab" data-toggle="tab">التخفيضات</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Product-Menu -->
                    <!-- Start Product -->
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="product carosel-navigation">
                                <div class="tab-content">
                                    <!-- Product = display-4-1 -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="display-4-1">
                                        <div class="row">
                                            <div class="active-small-product">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <?php
                                                    foreach ($discount_product as $v_discount_product) {
                                                        ?>
                                                        <div class="single-product small-product">
                                                            <div class="product-img ">
                                                                <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_discount_product->product_id; ?>">
                                                                    <img class="primary-img" src="<?php echo base_url() . $v_discount_product->product_image_0; ?>" alt="Product" style="height:200px;">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_discount_product->product_id; ?>">جوال <?php echo $v_discount_product->product_quantity; ?></a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">ريال<?php echo $v_discount_product->product_price; ?></span>
                                                                    <?php 
                                                                        if($v_discount_product->product_old_price !=0.00)
                                                                        {
                                                                    ?>
                                                                    <span class="old-price">ريال<?php echo $v_discount_product->product_old_price; ?></span>
                                                                    <?php
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <div class="product-action">
                                                                    <?php
                                                                    $customer_id = $this->session->userdata('customer_id');
                                                                    if ($customer_id == NULL) {
                                                                        ?>
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <a href="<?php echo base_url(); ?>login" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 33px;"><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="<?php echo base_url(); ?>login" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 33px;"><i class="fa fa-heart-o"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <div class="product-button">
                                                                            <button data-toggle="modal" data-target="#smallModal" onclick="addToCart(<?php echo $v_discount_product->product_id; ?>);"><i class="fa fa-shopping-cart"></i></button>
                                                                            <button data-toggle="modal" data-target="#Wishlist" onclick="addToWishlist(<?php echo $v_discount_product->product_id; ?>);"><i class="fa fa-heart-o"></i></button>
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
                                                </div>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-4-1 -->
                                    <!-- Start Product = display-4-2 -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-4-2">
                                        <div class="row">
                                            <div class="active-small-product">
                                                <!-- Start Single-Product -->
                                                <div class="col-xs-12">
                                                    <?php
                                                    foreach ($most_discount_product as $v_most_discount_product) {
                                                        ?>
                                                        <div class="single-product small-product">
                                                            <div class="product-img ">
                                                                <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_most_discount_product->product_id; ?>">
                                                                    <img class="primary-img" src="<?php echo base_url() . $v_most_discount_product->product_image_0; ?>" alt="Product" style="height:200px;">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">
                                                                <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_most_discount_product->product_id; ?>">جوال <?php echo $v_most_discount_product->product_quantity; ?></a></h5>
                                                                <div class="price-box">
                                                                    <span class="price">ريال<?php echo $v_most_discount_product->product_price; ?></span>
                                                                    <?php 
                                                                        if($v_most_discount_product->product_old_price !=0.00)
                                                                        {
                                                                    ?>
                                                                    <span class="old-price">ريال<?php echo $v_most_discount_product->product_old_price; ?></span>
                                                                    <?php
                                                                        }
                                                                    ?>
                                                                </div>
                                                                <div class="product-action">
                                                                    <?php
                                                                    $customer_id = $this->session->userdata('customer_id');
                                                                    if ($customer_id == NULL) {
                                                                        ?>
                                                                        <div class="button-group">
                                                                            <div class="product-button">
                                                                                <a href="<?php echo base_url(); ?>login" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 33px;"><i class="fa fa-shopping-cart"></i></a>
                                                                                <a href="<?php echo base_url(); ?>login" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 33px;"><i class="fa fa-heart-o"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                    } else {
                                                                        ?>
                                                                        <div class="product-button">
                                                                            <button data-toggle="modal" data-target="#smallModal" onclick="addToCart(<?php echo $v_most_discount_product->product_id; ?>);"><i class="fa fa-shopping-cart"></i></button>
                                                                            <button data-toggle="modal" data-target="#Wishlist" onclick="addToWishlist(<?php echo $v_most_discount_product->product_id; ?>);"><i class="fa fa-heart-o"></i></button>
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
                                        </div>
                                        <!-- End Product = display-4-2 -->
                                    </div>
                                </div>									
                            </div>
                        </div>
                        <!-- End Product -->
                    </div>
                    <!-- END SMALL-PRODUCT-AREA -->
                </div>
            </div>
        </div>
    </div>
</section>