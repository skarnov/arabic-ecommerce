<!-- START PAGE-CONTENT -->
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="page-menu">
                    <li><a href="<?php echo base_url();?>">الرئيسية</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- entry-header-area start -->
                <div class="entry-header-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="entry-header">
                                <h2 class="entry-title">حسابى</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- entry-header-area end -->
                <!-- Start checkout-area -->
                <div class="checkout-area">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Accordion start -->
                            <div class="panel-group" id="accordion">
                                <!-- Start My-First-Address -->
                                <div class="panel panel_default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-trigger" data-toggle="collapse" data-parent="#accordion" href="#payment-address">البيانات الشخصية <i class="fa fa-caret-down"></i> </a>
                                        </h4>
                                    </div>
                                    <form action="<?php echo base_url(); ?>checkout/save_payment_form" method="POST">
                                        <div id="payment-address" class="collapse in">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12">
                                                        <fieldset id="address">
                                                            <legend>Payment Method</legend>
                                                            <div class="form-group">
                                                                <label>
                                                                    <input type="radio" name="payment_type" value="Cash on delivery" checked=""> Cash on Delivery
                                                                </label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="buttons clearfix">
                                                            <div class="col-xs-12">
                                                                <button type="submit" class="btn btn-primary pull-right"/>حفظ</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End My-First-Address -->
                                <!-- Start Order History And Details -->
                            </div>
                            <!-- Accordion end -->
                        </div>
                    </div>
                </div>
                <!-- End Shopping-Cart -->
            </div>
        </div>
    </div>
</section>