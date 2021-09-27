<!-- START PAGE-CONTENT -->
<section class="page-content">
    <!-- Start Account-Create-Area -->
    <div class="account-create-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="page-menu">
                        <li><a href="<?php echo base_url(); ?>">الرئيسية</a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>evis_customer">انشاء حساب</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="area-title">
                        <h3 class="title-group gfont-1">انشاء حساب</h3>
                        <h3 style="color:red; font-size: 16px; padding-top: 1%">
                            <?php
                            $exc = $this->session->userdata('exception');
                            if (isset($exc)) {
                                echo $exc;
                                $this->session->unset_userdata('exception');
                            }
                            ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="account-create">
                <form action="<?php echo base_url(); ?>evis_customer/customer_login_check" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="account-create-box">
                                <h2 class="box-info">معلومات الدخول</h2>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="single-create">
                                            <p><font><font>البريد الالكترونى  </font></font><sup><font><font>*</font></font></sup></p>
                                            <input class="form-control" type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-create">
                                            <p>تاكيد كلمة المرور <sup>*</sup></p>
                                            <input class="form-control" type="password" name="password"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-area">
                                <p class="required text-right">* هذه الحقول يجب ان لا تكون فارغة</p>
                                <button type="submit" class="btn btn-primary floatright">تسجيل</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Account-Create-Area -->
</section>