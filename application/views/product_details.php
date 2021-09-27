<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="page-menu">
                    <li><a href="<?php echo base_url(); ?>">الرئيسية</a></li>
                    <li class="active"><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $product_info->product_id; ?>">Product Details</a></li>
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
            <div class="col-md-9 col-sm-12 col-xs-12">
                <!-- Start Toch-Prond-Area -->
                <div class="toch-prond-area">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="clear"></div>
                            <div class="tab-content">
                                <!-- Product = display-1-1 -->
                                <div role="tabpanel" class="tab-pane fade in active" id="display-1">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="toch-photo">
                                                <a href="#"><img src="<?php echo base_url() . $product_info->product_image_0; ?>" data-imagezoom="true" alt="#" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-1-1 -->
                                <!-- Start Product = display-1-2 -->
                                <div role="tabpanel" class="tab-pane fade" id="display-2">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="toch-photo">
                                                <a href="#"><img src="<?php echo base_url() . $product_info->product_image_1; ?>" data-imagezoom="true" alt="#" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-1-2 -->
                                <!-- Start Product = di3play-1-3 -->
                                <div role="tabpanel" class="tab-pane fade" id="display-3">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="toch-photo">
                                                <a href="#"><img src="<?php echo base_url() . $product_info->product_image_2; ?>" data-imagezoom="true" alt="#" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-1-3 -->
                                <!-- Start Product = di3play-1-4 -->
                                <div role="tabpanel" class="tab-pane fade" id="display-4">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="toch-photo">
                                                <a href="#"><img src="<?php echo base_url() . $product_info->product_image_3; ?>" data-imagezoom="true" alt="#" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-1-4 -->
                                <!-- Start Product = di3play-1-5 -->
                                <div role="tabpanel" class="tab-pane fade" id="display-5">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="toch-photo">
                                                <a href="#"><img src="<?php echo base_url() . $product_info->product_image_4; ?>" data-imagezoom="true" alt="#" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product = display-1-4 -->
                            </div>
                            <!-- Start Toch-prond-Menu -->
                            <div class="toch-prond-menu">
                                <ul role="tablist">
                                    <?php 
                                        if($product_info->product_image_1 !=NULL)
                                        {
                                    ?>
                                    <li role="presentation"><a href="#display-2" role="tab" data-toggle="tab"><img src="<?php echo base_url() . $product_info->product_image_1; ?>" alt="#" /></a></li>
                                    <?php
                                        }
                                    ?>
                                    <?php 
                                        if($product_info->product_image_2 !=NULL)
                                        {
                                    ?>
                                    <li role="presentation"><a href="#display-3"  role="tab" data-toggle="tab"><img src="<?php echo base_url() . $product_info->product_image_2; ?>" alt="#" /></a></li>
                                    <?php
                                        }
                                    ?>
                                    <?php 
                                        if($product_info->product_image_3 !=NULL)
                                        {
                                    ?>
                                    <li role="presentation"><a href="#display-4"  role="tab" data-toggle="tab"><img src="<?php echo base_url() . $product_info->product_image_3; ?>" alt="#" /></a></li>
                                    <?php
                                        }
                                    ?>
                                    <?php 
                                        if($product_info->product_image_4 !=NULL)
                                        {
                                    ?>
                                    <li role="presentation"><a href="#display-5"  role="tab" data-toggle="tab"><img src="<?php echo base_url() . $product_info->product_image_4; ?>" alt="#" /></a></li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                            <!-- End Toch-prond-Menu -->
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <h2 class="title-product"> <?php echo $product_info->product_name; ?></h2>
                            <div class="about-toch-prond">
                                <p class="short-description"><font><?php echo $product_info->product_summery; ?></font></p>
                                <hr>
                                <span class="current-price"><font> <?php echo $product_info->product_price; ?> ريال</font></span>
                                <span class="item-stock"><font>المتاح: </font><span class="text-stock"><font><font><?php echo $product_info->product_quantity; ?> قطع</font></font></span></span>
                            </div>
                            <form id="form" name="form">
                                <div class="about-product">
                                    <div class="product-select product-color">
                                        <label><sup><font><font>*</font></font></sup><font><font> الون</font></font></label>
                                        <select id="color" class="form-control">
                                            <?php
                                            $product_color = explode(",", $product_info->product_color);
                                            foreach ($product_color as $v_color) {
                                                echo "<option value='$v_color'>" . $v_color . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="product-quantity">
                                    <span><font><font>الكمية</font></font></span>
                                    <input type="number" id="qty" value="1">
                                    <input type="hidden" id="product_id" value="<?php echo $product_info->product_id; ?>">
                                    <?php
                                    $customer_id = $this->session->userdata('customer_id');
                                    if ($customer_id == NULL) {
                                        ?>
                                        <a href="<?php echo base_url(); ?>login" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 144px;"><i class="fa fa-shopping-cart"></i> اضف الى السلة</a>
                                        <?php
                                    } else {
                                        ?>   
                                        <a data-toggle="modal" data-target="#smallModal" onclick="formSubmission();" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 144px;"><i class="fa fa-shopping-cart"></i> اضف الى السلة</a>    
                                        <?php
                                    }
                                    ?>
                                    <hr>
                                </div>
                            </form>
                            <?php
                            if ($customer_id == NULL) {
                                ?>
                                <a href="<?php echo base_url(); ?>login" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 144px;"><i class="fa fa-heart-o"></i> اضف الى الرغبات</a>
                                <?php
                            } else {
                                ?>
                                <button data-toggle="modal" data-target="#Wishlist" onclick="addToWishlist(<?php echo $product_info->product_id; ?>);" style="background: #2f96bf none repeat scroll 0 0; border: 0 none; box-shadow: none; color: #fff; display: block; font-weight: 700; line-height: 30px; margin: 0 0 5px; padding: 5px; text-transform: uppercase; transition: all 0.5s ease 0s; width: 144px;"><i class="fa fa-heart-o"></i> اضف الى الرغبات</button>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="toch-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- Start Toch-Menu -->
                                <div class="toch-menu">
                                    <ul role="tablist">
                                        <li role="presentation" class="active"><a href="#description" role="tab" data-toggle="tab" aria-expanded="true"><font><font class="">التفاصيل</font></font></a></li>
                                        <li role="presentation" class=""><a href="#reviews" role="tab" data-toggle="tab" aria-expanded="false"><font><font>Comments</font></font></a></li>
                                    </ul>
                                </div>
                                <!-- End Toch-Menu -->
                                <div class="tab-content toch-description-review">
                                    <!-- Start display-description -->
                                    <div role="tabpanel" class="tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="toch-description">
                                                    <p><?php echo $product_info->product_description; ?></p>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End display-description -->
                                    <!-- Start display-reviews -->
                                    <div role="tabpanel" class="tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="toch-reviews">
                                                    <div class="toch-table">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product = display-reviews -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-AREA -->
            </div>
            <!-- End Toch-Prond-Area -->
        </div>
    </div>
</section>