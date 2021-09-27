<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="page-menu">
                    <li><a href="<?php echo base_url(); ?>">الرئيسية</a></li>
                    <li class="active"><a href="#">Product Listing</a></li>
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
                                    <h3 class="title-group-3 gfont-1">Product Listing</h3>
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
                            <!-- Start Product -->
                            <div class="product">
                                <div class="tab-content">
                                    <!-- Product -->
                                    <div role="tabpanel" class="tab-pane fade" id="display-1-1">
                                        <div class="row">
                                            <div class="listview">
                                                <!-- Start Single-Product -->
                                                <?php
                                                foreach ($category_product as $v_category_product) {
                                                    $product_tag = $v_category_product->product_tag;
                                                    if ($product_tag == NULL) {
                                                        ?>
                                                        <div class="single-product">
                                                            <div class="col-md-3 col-sm-4 col-xs-12">

                                                                <div class="product-img">
                                                                    <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_category_product->product_id; ?>">
                                                                        <img class="primary-img" src="<?php echo base_url() . $v_category_product->product_image_0; ?>" alt="Product">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 col-sm-8 col-xs-12">	
                                                                <div class="product-description">
                                                                    <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_category_product->product_id; ?>"><?php echo $v_category_product->product_name ?></a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price"><?php echo $v_category_product->product_price; ?> ريال</span>
                                                                        <span class="old-price"><?php echo $v_category_product->product_old_price; ?> ريال</span>
                                                                    </div>
                                                                    <p class="description"><?php echo $v_category_product->product_description; ?></p>
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
                                                                                <button data-toggle="modal" data-target="#smallModal" onclick="addToCart(<?php echo $v_category_product->product_id; ?>);"><i class="fa fa-shopping-cart"></i> اضف الى السلة</button>
                                                                                <button data-toggle="modal" data-target="#Wishlist" onclick="addToWishlist(<?php echo $v_category_product->product_id; ?>);"><i class="fa fa-heart-o"></i>القائمة المفضلة </button>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <div class="single-product">
                                                            <div class="col-md-3 col-sm-4 col-xs-12">
                                                                <div class="label_new">
                                                                    <span class="new"><?php echo $v_category_product->product_tag; ?></span>
                                                                </div>
                                                                <div class="product-img">
                                                                    <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_category_product->product_id; ?>">
                                                                        <img class="primary-img" src="<?php echo base_url() . $v_category_product->product_image_0; ?>" alt="Product">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-9 col-sm-8 col-xs-12">	
                                                                <div class="product-description">
                                                                    <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_category_product->product_id; ?>"><?php echo $v_category_product->product_name ?></a></h5>
                                                                    <div class="price-box">
                                                                        <span class="price"><?php echo $v_category_product->product_price; ?> ريال</span>
                                                                        <span class="old-price"><?php echo $v_category_product->product_old_price; ?> ريال</span>
                                                                    </div>
                                                                    <p class="description"><?php echo $v_category_product->product_description; ?></p>
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
                                                                                <button data-toggle="modal" data-target="#smallModal" onclick="addToCart(<?php echo $v_category_product->product_id; ?>);"><i class="fa fa-shopping-cart"></i> اضف الى السلة</button>
                                                                                <button data-toggle="modal" data-target="#Wishlist" onclick="addToWishlist(<?php echo $v_category_product->product_id; ?>);"><i class="fa fa-heart-o"></i>القائمة المفضلة </button>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                <!-- End Single-Product -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Product -->
                                    <!-- Start Product-->
                                    <div role="tabpanel" class="tab-pane fade in  active" id="display-1-2">
                                        <div class="row">
                                            <!-- Start Single-Product -->
                                            <?php
                                            foreach ($category_product as $v_category_product) {
                                                $product_tag = $v_category_product->product_tag;
                                                if ($product_tag == NULL) {
                                                    ?>
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <div class="single-product">
                                                            <div class="product-img">
                                                                <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_category_product->product_id; ?>">
                                                                    <img class="primary-img" src="<?php echo base_url() . $v_category_product->product_image_0; ?>" alt="Product" style="height:200px;">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">                                                          
                                                                <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_category_product->product_id; ?>"><?php echo $v_category_product->product_name ?></a></h5>
                                                                <div class="price-box">
                                                                    <span class="price"><?php echo $v_category_product->product_price; ?> ريال</span>
                                                                    <span class="old-price"><?php echo $v_category_product->product_old_price; ?> ريال</span>
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
                                                                        <button data-toggle="modal" data-target="#smallModal" onclick="addToCart(<?php echo $v_category_product->product_id; ?>);"><i class="fa fa-shopping-cart"></i> اضف الى السلة</button>
                                                                        <button data-toggle="modal" data-target="#Wishlist" onclick="addToWishlist(<?php echo $v_category_product->product_id; ?>);"><i class="fa fa-heart-o"></i>القائمة المفضلة </button>
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
                                                    <div class="col-md-3 col-sm-4 col-xs-12">
                                                        <div class="single-product">
                                                            <div class="label_new">
                                                                <span class="new"><?php echo $v_category_product->product_tag; ?></span>
                                                            </div>
                                                            <div class="product-img">
                                                                <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_category_product->product_id; ?>">
                                                                    <img class="primary-img" src="<?php echo base_url() . $v_category_product->product_image_0; ?>" alt="Product" style="height:200px;">
                                                                </a>
                                                            </div>
                                                            <div class="product-description">                                                          
                                                                <h5><a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_category_product->product_id; ?>"><?php echo $v_category_product->product_name ?></a></h5>
                                                                <div class="price-box">
                                                                    <span class="price"><?php echo $v_category_product->product_price; ?> ريال</span>
                                                                    <span class="old-price"><?php echo $v_category_product->product_old_price; ?> ريال</span>
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
                                                                        <button data-toggle="modal" data-target="#smallModal" onclick="addToCart(<?php echo $v_category_product->product_id; ?>);"><i class="fa fa-shopping-cart"></i> اضف الى السلة</button>
                                                                        <button data-toggle="modal" data-target="#Wishlist" onclick="addToWishlist(<?php echo $v_category_product->product_id; ?>);"><i class="fa fa-heart-o"></i>القائمة المفضلة </button>
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
                                            <!-- End Single-Product -->
                                        </div>
                                        <!-- Start Pagination Area -->
                                        <!-- Start Pagination -->
                                        <div class="col-lg-12 col-md-12 col-sm-12" >
                                            <hr>
                                            <form name="pagination">
                                                <?php
                                                $number_of_pages = ceil($total_product / $limit);
                                                ?>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <?php if (($start - $limit) >= 0) { ?>
                                                        <a href="<?php echo base_url(); ?>evis_store/<?php echo $this->uri->segment(2) . '/' . $this->uri->segment(3); ?>" class='btn btn-sm btn-success'>First</a>
                                                        <a href="<?php echo base_url(); ?>evis_store/<?php echo $this->uri->segment(2) . '/' . $this->uri->segment(3) . '/' . ($start - $limit); ?>" class='btn btn-sm bt'>Prev</a>
                                                    <?php } ?>
                                                </div>
                                                <div class='col-lg-5 col-md-5 col-sm-5'>
                                                    <?php for ($i = 0; $i < $number_of_pages;) { ?>
                                                        <a href="<?php echo base_url(); ?>evis_store/<?php echo $this->uri->segment(2) . '/' . $this->uri->segment(3) . '/' . ($i * $limit); ?>" class='btn btn-sm btn-warning <?php
                                                        if ($start == ($i * $limit)) {
                                                            echo "button_style";
                                                        }
                                                        ?>'><?php echo ++$i; ?> </a>
                                                       <?php } ?>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2">
                                                    <?php if ($start + $limit < $total_product) { ?>
                                                        <a href="<?php echo base_url(); ?>evis_store/<?php echo $this->uri->segment(2) . '/' . $this->uri->segment(3) . '/' . ($start + $limit); ?>" class='btn btn-sm btn-default'>Next</a>
                                                        <a href="<?php echo base_url(); ?>evis_store/<?php echo $this->uri->segment(2) . '/' . $this->uri->segment(3) . '/' . (($number_of_pages - 1) * $limit); ?>" class='btn btn-sm btn-success'>Last</a>
                                                    <?php } ?>
                                                </div>
                                                <script type="text/javascript">
                                                    document.forms['pagination'].elements['per_page'].value = '<?php echo $limit ?>';
                                                </script>
                                            </form>
                                            <br>
                                            <hr>
                                        </div>
                                        <!-- End Pagination -->
                                    </div>
                                    <!-- End Product -->
                                </div>
                            </div>
                            <!-- End Product -->
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT-AREA -->
            </div>
        </div>
    </div>
</section>