<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="page-menu">
                    <li><a href="<?php echo base_url() ?>">الرئيسية</a></li>
                    <li class="active"><a href="<?php echo base_url() ?>evis_store/contact">اتصل بنا</a></li>
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
                <!-- Start Contact-Message -->
                <div class="contact-message">
                    <h3 style="color:green">
                        <?php
                        $msg = $this->session->userdata('send_email');
                        if (isset($msg)) {
                            echo $msg;
                            $this->session->unset_userdata('send_email');
                        }
                        ?>
                    </h3>
                    <fieldset>
                        <form action="<?php echo base_url(); ?>evis_store/send_email" method="POST">
                            <legend>تواصل معنا</legend>
                            <div class="form-group form-horizontal">
                                <div class="row">
                                    <label class="col-sm-2 control-label"><sup>*</sup>الاسم</label>
                                    <div class="col-sm-10">
                                        <input type="text" required="" name="name" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-horizontal">
                                <div class="row">
                                    <label class="col-sm-2 control-label"><sup>*</sup>البريد الالكترونى</label>
                                    <div class="col-sm-10">
                                        <input type="email" required="" name="email" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-horizontal">
                                <div class="row">
                                    <label class="col-sm-2 control-label"><sup>*</sup>الرسالة</label>
                                    <div class="col-sm-10">
                                        <textarea name="message" required="" class="form-control" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons pull-right">
                                <input class="btn btn-primary" type="submit" value="ارسال" name="submit"/>
                            </div>
                        </form>
                    </fieldset>
                </div>
                <!-- End Contact-Message -->
            </div>
        </div>
    </div>
</section>