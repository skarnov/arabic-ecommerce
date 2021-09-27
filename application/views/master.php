<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">		
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>asset/public/img/favicon.ico">
        <!-- Google Fonts -->		
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <!-- Bootstrap CSS -->		
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/bootstrap-rtl.css">
        <!-- Font awesome CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/font-awesome.min.css">
        <!-- owl.carousel CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/owl.transitions.css">
        <!-- Nivo slider CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/lib/css/nivo-slider.css" type="text/css" />
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/meanmenu.min.css">
        <!-- Jquery UI CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/jquery-ui.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/animate.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/main.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/public/css/responsive.css">
    </head>

    <body>
        <!-- HEADER-AREA START -->
        <header class="header-area">
            <!-- HEADER-TOP START -->
            <div class="header-top hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="top-menu">
                                <p class="welcome-msg">مرحبا بك فى متجر 2016</p>
                            </div>
                            <!-- Start Top-Link -->
                            <div class="top-link">
                                <ul class="link">
                                    <?php
                                    $customer_id = $this->session->userdata('customer_id');
                                    if ($customer_id == NULL) {
                                        ?>
                                        <li><a href="<?php echo base_url(); ?>evis_customer"><i class="fa fa-unlock-alt"></i> تسجيل الدخول</a></li>
                                        <li><a href="<?php echo base_url(); ?>evis_store/register"><i class="fa fa-user"></i> Register</a></li>
                                        <li><a href="<?php echo base_url(); ?>login"><i class="fa fa-heart"></i> قائمة الرغبات</a></li>
                                        <?php
                                    } else {
                                        ?>
                                        <li><a href="<?php echo base_url(); ?>"><i class="fa fa-unlock-alt"></i> Welcome! <?php echo $this->session->userdata('first_name'); ?> </a></li>
                                        <li><a href="<?php echo base_url(); ?>evis_store/logout"><i class="fa fa-user"></i> Logout</a></li>
                                        <li><a href="<?php echo base_url(); ?>wishlist/show_wishlist/<?php echo $this->session->userdata('customer_id'); ?>"><i class="fa fa-heart"></i> قائمة الرغبات</a></li>
                                        <?php
                                    }
                                    ?>
                                    <li><a href="<?php echo base_url(); ?>checkout"><i class="fa fa-share"></i> الدفع</a></li>
                                </ul>
                            </div>
                            <!-- End Top-Link -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- HEADER-TOP END -->
            <!-- HEADER-MIDDLE START -->
            <div class="header-middle">
                <div class="container">
                    <!-- Start Support-Client -->
                    <div class="support-client hidden-xs">
                        <div class="row">
                            <!-- Start Single-Support -->
                            <div class="col-md-3 hidden-sm">
                                <div class="single-support">
                                    <div class="support-content">
                                        <i class="fa fa-clock-o"></i>
                                        <div class="support-text">
                                            <h1 class="zero gfont-1">ساعات العمل</h1>
                                            <p>يوميا على مدار لاسبوع</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-Support -->
                            <!-- Start Single-Support -->
                            <div class="col-md-3 col-sm-4">
                                <div class="single-support">
                                    <i class="fa fa-truck"></i>
                                    <div class="support-text">
                                        <h1 class="zero gfont-1">التوصيل مجانا</h1>
                                        <p>على المنتجات الاكتر من 2000 ريال</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-Support -->
                            <!-- Start Single-Support -->
                            <div class="col-md-3 col-sm-4">
                                <div class="single-support">
                                    <i class="fa fa-money"></i>
                                    <div class="support-text">
                                        <h1 class="zero gfont-1">استرجاع المال كامل 100%</h1>
                                        <p>خلال 30 يوم من الاستلام</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-Support -->
                            <!-- Start Single-Support -->
                            <div class="col-md-3 col-sm-4">
                                <div class="single-support">
                                    <i class="fa fa-phone-square"></i>
                                    <div class="support-text">
                                        <h1 class="zero gfont-1">الهاتف: 0123456789</h1>
                                        <p>اطلبنا الان</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-Support -->
                        </div>
                    </div>
                    <!-- End Support-Client -->
                    <!-- Start logo & Search Box -->
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="logo">
                                <a href="<?php echo base_url(); ?>" title="Malias"><img src="<?php echo base_url(); ?>asset/public/img/logo.jpg" alt="Malias"></a>
                            </div>
                        </div>
                        <h3 style="color:red">
                            <?php
                            $msg = $this->session->userdata('save_newsletter');
                            if (isset($msg)) {
                                echo $msg;
                                $this->session->unset_userdata('save_newsletter');
                            }
                            ?>
                        </h3>
                        <div class="col-md-9 col-sm-12">
                            <div class="quick-access">
                                <div class="search-by-category">
                                    <form action="<?php echo base_url(); ?>evis_store/search_product" method="POST">
                                        <div class="search-container">
                                            <select name="category_id">
                                                <optgroup  class="cate-item-head" label="كل التصنيفات">
                                                    <?php
                                                    foreach ($all_category as $v_category) {
                                                        ?>
                                                        <option class="cate-item-title" value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="header-search">
                                            <input type="text" name="product_name" placeholder="ماذا تبحث عن ؟">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="top-cart">
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url(); ?>cart/show_cart">
                                                <span class="cart-icon"><i class="fa fa-shopping-cart"></i></span>
                                                <span class="cart-total">
                                                    <span class="cart-item">يوجد <?php echo $rows = count($this->cart->contents()); ?> منتج</span>
                                                    <span class="top-cart-price">ريال <?php echo $this->cart->total(); ?></span>
                                                </span>
                                            </a>
                                            <div class="mini-cart-content" id="small_cart">
                                                <?php
                                                $contents = $this->cart->contents();
                                                foreach ($contents as $v_contents) {
                                                    ?>
                                                    <div class="cart-img-details">
                                                        <div class="cart-img-photo">
                                                            <a href="<?php echo base_url(); ?>evis_store/product_details/<?php echo $v_contents['id']; ?>"><img src="<?php echo base_url() . $v_contents['image']; ?>" alt="#"></a>
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
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End logo & Search Box -->
                </div> 
            </div>
            <!-- HEADER-MIDDLE END -->
            <!-- START MAINMENU-AREA -->
            <div class="mainmenu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mainmenu hidden-sm hidden-xs">
                                <nav>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>">الرئيسية</a></li>
                                        <li><a href="<?php echo base_url(); ?>evis_store/about">عن المتجر</a></li>
                                        <li class="hot"><a href="<?php echo base_url(); ?>evis_store/best_selling">المنتجات الاكثر مبيعا</a></li>
                                        <li class="new"><a href="<?php echo base_url(); ?>evis_store/latest_product">أحدث المنتجات</a></li>
                                        <li><a href="<?php echo base_url(); ?>evis_store/special_offer">العروض الخاصة</a></li>
                                        <li><a href="<?php echo base_url(); ?>evis_store/register">التسجيل</a></li>
                                        <li><a href="<?php echo base_url(); ?>evis_store/contact">اتصل بنا</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN-MENU-AREA -->
            <!-- Start Mobile-menu -->
            <div class="mobile-menu-area hidden-md hidden-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>">الرئيسية</a></li>
                                    <li><a href="<?php echo base_url(); ?>evis_store/about">عن المتجر</a></li>
                                    <li class="hot"><a href="<?php echo base_url(); ?>evis_store/best_selling">المنتجات الاكثر مبيعا</a></li>
                                    <li class="new"><a href="<?php echo base_url(); ?>evis_store/latest_product">أحدث المنتجات</a></li>
                                    <li><a href="<?php echo base_url(); ?>evis_store/special_offer">العروض الخاصة</a></li>
                                    <li><a href="<?php echo base_url(); ?>evis_store/register">التسجيل</a></li>
                                    <li><a href="<?php echo base_url(); ?>evis_store/contact">اتصل بنا</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mobile-menu -->
        </header>
        <!-- HEADER AREA END -->
        <?php echo $home; ?>
        <!-- START BRAND-LOGO-AREA -->
        <div class="brand-logo-area carosel-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-title">
                            <h3 class="title-group border-red gfont-1">اشهر الماركات</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="active-brand-logo">
                        <?php
                        foreach ($all_brand as $v_brand) {
                            ?>
                            <div class="col-md-2">
                                <div class="single-brand-logo">
                                    <a href="#"><img src="<?php echo base_url() . $v_brand->brand_image; ?>" alt=""></a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END BRAND-LOGO-AREA -->
        <!-- START SUBSCRIBE-AREA -->
        <div class="subscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-7 col-xs-12">
                        <label class="hidden-sm hidden-xs">اشترك فى نشرتنا البريدية:</label>
                        <div class="subscribe">
                            <form action="<?php echo base_url(); ?>evis_store/save_newsletter" method="POST">
                                <input type="text" name="subscription_email" required="" placeholder="ادخل ايميلك">
                                <button type="submit">اشترك</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <div class="social-media">
                            <a href="#"><i class="fa fa-facebook fb"></i></a>
                            <a href="#"><i class="fa fa-google-plus gp"></i></a>
                            <a href="#"><i class="fa fa-twitter tt"></i></a>
                            <a href="#"><i class="fa fa-youtube yt"></i></a>
                            <a href="#"><i class="fa fa-linkedin li"></i></a>
                            <a href="#"><i class="fa fa-rss rs"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
        <!-- END SUBSCRIBE-AREA -->
    </section>
    <!-- END HOME-PAGE-CONTENT -->
    <!-- FOOTER-AREA START -->
    <footer class="footer-area">
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="footer-title">
                            <h5>حسابى</h5>
                        </div>
                        <nav>
                            <ul class="footer-content">
                                <li><a href="my-account.html">حسابى</a></li>
                                <li><a href="#">تاريخ الطلبات</a></li>
                                <li><a href="wishlist">قائمة الرغبات</a></li>
                                <li><a href="#">مصطلحات البحث</a></li>
                                <li><a href="#">المسترجع</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="footer-title">
                            <h5>خدمة العملاء</h5>
                        </div>
                        <nav>
                            <ul class="footer-content">
                                <li><a href="">اتصل بنا</a></li>
                                <li><a href="about.html">عن المتجر</a></li>
                                <li><a href="#">معلومات التوصيل</a></li>
                                <li><a href="#">سياسة الخصوصية</a></li>
                                <li><a href="#">البنود و الشروط</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 hidden-sm col-md-3">
                        <div class="footer-title">
                            <h5>الدفع و التوصيل</h5>
                        </div>
                        <nav>
                            <ul class="footer-content">
                                <li><a href="#">الموديلات</a></li>
                                <li><a href="#">قسائم الهدايا</a></li>
                                <li><a href="#">الشركات التابعة</a></li>
                                <li><a href="shop-list.html">المنتجات الممية</a></li>
                                <li><a href="#">مصطلحات البحث</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="footer-title">
                            <h5>التواصل معنا</h5>
                        </div>
                        <nav>
                            <ul class="footer-content box-information">
                                <li>
                                    <i class="fa fa-home"></i><span>المملكة العربية السعودية . جدة</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o"></i><p><a href="contact.html">admin@store.com</a></p>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>01234-56789</span> <br> <span> 01234-56789</span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>				
        </div>
        <!-- Footer End -->
        <!-- Copyright-area Start -->
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright &copy; <a href="#" target="_blank"> Store</a> All rights reserved.</p>
                            <div class="payment">
                                <a href="#"><img src="<?php echo base_url(); ?>asset/public/img/payment.png" alt="Payment"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright-area End -->
    </footer>
    <!-- FOOTER-AREA END -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="#" src="<?php echo base_url(); ?>asset/public/img/gold.jpg"/>
                                </div>
                            </div><!-- .product-images -->
                            <div class="product-info">
                                <h1>iphone 6s GOLD</h1>
                                <div class="price-box-3">
                                    <hr />
                                    <div class="s-price-box">
                                        <span class="new-price">ريال 2000</span>
                                        <span class="old-price">ريال 2500</span>
                                    </div>
                                    <hr />
                                </div>
                                <a href="shop.html" class="see-all">عرض كل المميزات</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="3">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">اضافة الى السلة</button>
                                    </form>
                                </div>
                                <div class="quick-desc">
                                    هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ 
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">شارك هذا المنتجمع اصدقائك</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                            <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
        <!--SHOPPING CART MODAL-->
        <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Add To Cart</h4>
                    </div>
                    <div class="modal-body">
                        <h3>Success</h3>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" type="button" class="btn btn-primary">Continue Shopping</button>
                    </div>
                </div>
            </div>
        </div>
        <!--END OF SHOPPING CART MODAL-->
        <!-- WISHLIST-->
        <div class="modal fade" id="Wishlist" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Wishlist</h4>
                    </div>
                    <div class="modal-body">
                        <h3>Success!</h3>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" type="button" class="btn btn-primary">Continue Shopping</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF WISHLIST-->
    </div>
    <!-- END QUICKVIEW PRODUCT -->
    <!-- jquery-->		
    <script src="<?php echo base_url(); ?>asset/public/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS-->		
    <script src="<?php echo base_url(); ?>asset/public/js/bootstrap.min.js"></script>
    <!-- wow JS -->		
    <script src="<?php echo base_url(); ?>asset/public/js/wow.min.js"></script>
    <!-- meanmenu JS -->		
    <script src="<?php echo base_url(); ?>asset/public/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS -->		
    <script src="<?php echo base_url(); ?>asset/public/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS -->		
    <script src="<?php echo base_url(); ?>asset/public/js/jquery.scrollUp.min.js"></script>
    <!-- countdon.min JS -->		
    <script src="<?php echo base_url(); ?>asset/public/js/countdon.min.js"></script>
    <!-- jquery-price-slider js --> 
    <script src="<?php echo base_url(); ?>asset/public/js/jquery-price-slider.js"></script>
    <!-- Nivo slider js --> 		
    <script src="<?php echo base_url(); ?>asset/public/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <!-- plugins JS -->		
    <script src="<?php echo base_url(); ?>asset/public/js/plugins.js"></script>
    <!-- main JS -->		
    <script src="<?php echo base_url(); ?>asset/public/js/main.js"></script>
    <script type="text/javascript">
        var xmlhttp = false;
        try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (E) {
                xmlhttp = false;
            }
        }
        if (!xmlhttp && typeof XMLHttpRequest !== 'undefined') {
            xmlhttp = new XMLHttpRequest();
        }
        function addToCart(productId)
        {
            if (productId) {
                serverPage = '<?php echo base_url(); ?>cart/add_to_cart/' + productId + '/';
                xmlhttp.open("GET", serverPage);
                xmlhttp.onreadystatechange = function ()
                {
                    document.getElementById('small_cart').innerHTML = xmlhttp.responseText;
                };
                xmlhttp.send(null);
            }
        }
        function formSubmission()
        {					
            var product_id = document.getElementById("product_id").value;
            var qty = document.getElementById("qty").value;
            var color = document.getElementById("color").value;

            serverPage = '<?php echo base_url().'cart/add_cart/'; ?>' + product_id + '/' + qty + '/' + color + '/';
            var xmlhttp1 = xmlhttp;	
            xmlhttp1.open("GET", serverPage);
            xmlhttp1.onreadystatechange = function (){
                document.getElementById('small_cart').innerHTML = xmlhttp1.responseText;
            };xmlhttp1.send(null);
        }
        function addToWishlist(productId)
        {
            if (productId) {
                serverPage = '<?php echo base_url(); ?>wishlist/add_to_wishlist/' + productId + '/';
                xmlhttp.open("GET", serverPage);
                xmlhttp.send(null);
            }
        }
    </script>
    </body>
</html>