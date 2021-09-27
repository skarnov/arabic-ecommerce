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
                                    <form action="<?php echo base_url(); ?>checkout/save_shipping_form" method="POST">
                                        <div id="payment-address" class="collapse in">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12">
                                                        <fieldset id="address">
                                                            <legend>لعنوان</legend>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>العنوان 1</label>
                                                                <input type="text" name="address" placeholder="Address" class="form-control" />
                                                                <input type="hidden" name="customer_id" value="<?php echo $this->session->userdata('customer_id');?>" />
                                                            </div>	
                                                            <div class="form-group">
                                                                <label><sup>*</sup>المدينة</label>
                                                                <input type="text" name="city" placeholder="City" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>الرمز البريديى</label>
                                                                <input type="text" name="zip" placeholder="Zip" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>الدولة</label>
                                                                <select name="state" class="form-control">
                                                                    <option value=""> اختر</option>
                                                                    <option value=" مصر "> مصر </option>
                                                                    <option value=" السعودية "> السعودية </option>
                                                                    <option value=" اليمن "> اليمن </option>
                                                                    <option value=" الكويت "> الكويت </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>المنطقة</label>
                                                                <select name="region" class="form-control">
                                                                    <option value=""> اختر </option>
                                                                    <option value=" جدة "> جدة </option>
                                                                    <option value=" الرياض "> الرياض </option>
                                                                </select>
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