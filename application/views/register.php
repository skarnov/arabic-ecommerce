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
                                    <form action="<?php echo base_url(); ?>evis_store/save_customer" method="POST">
                                        <h3 style="color:green">
                                            <div style="background-color:wheat;"><?php echo validation_errors(); ?></div>
                                            <?php
                                            $msg = $this->session->userdata('save_customer');
                                            if (isset($msg)) {
                                                echo "<p style='margin-left:2%;'>$msg</p>";
                                                $this->session->unset_userdata('save_customer');
                                            }
                                            ?>
                                        </h3>
                                        <div id="payment-address" class="collapse in">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-12">
                                                        <fieldset id="account">
                                                            <legend>البيانت الشخصية</legend>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>الاسم الاول</label>
                                                                <input type="text" name="first_name" required="" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>الاسم الاخير</label>
                                                                <input type="text" name="last_name" required="" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>البريد لالكترونى</label>
                                                                <input type="email" name="email" required="" placeholder="E-mail" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>الجوال</label>
                                                                <input type="text" name="phone" placeholder="Phone" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>الفاكس</label>
                                                                <input type="text" name="fax" placeholder="Fax" class="form-control" />
                                                            </div>
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="account-create-box">
                                                                <h2 class="box-info"><font><font>معلومات الدخول</font></font></h2>
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                                        <div class="single-create">
                                                                            <p><font><font>كلمة المرور  </font></font><sup><font><font>*</font></font></sup></p>
                                                                            <input type="password"  name="password" required="" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                                                        <div class="single-create">
                                                                            <p><font><font>تاكيد كلمة المرور  </font></font><sup><font><font>*</font></font></sup></p>
                                                                            <input type="password" name="confirm_password" required="" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset>
                                                            <legend>معلومات اضافية</legend>
                                                            <textarea class="form-control" name="more_info" rows="6"></textarea>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-xs-12">
                                                        <fieldset id="address">
                                                            <legend>لعنوان</legend>
                                                            <div class="form-group">
                                                                <label>لشركة</label>
                                                                <input type="text" name="company" placeholder="Company" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label><sup>*</sup>العنوان 1</label>
                                                                <input type="text" name="address_1" placeholder="Address 1" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>العنوان 2</label>
                                                                <input type="text" name="address_2" placeholder="Address 2"  class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>تاريخ الميلاد</label>
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <select name="day" class="form-control">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                            <option value="15">15</option>
                                                                            <option value="16">16</option>
                                                                            <option value="17">17</option>
                                                                            <option value="18">18</option>
                                                                            <option value="19">19</option>
                                                                            <option value="20">20</option>
                                                                            <option value="21">21</option>
                                                                            <option value="22">22</option>
                                                                            <option value="23">23</option>
                                                                            <option value="24">24</option>
                                                                            <option value="25">25</option>
                                                                            <option value="26">26</option>
                                                                            <option value="27">27</option>
                                                                            <option value="28">28</option>
                                                                            <option value="29">29</option>
                                                                            <option value="30">30</option>
                                                                            <option value="31">31</option>
                                                                        </select>                 
                                                                    </div>
                                                                    <div class="col-xs-3">
                                                                        <select name="month" class="form-control">
                                                                            <option value="January">January</option>
                                                                            <option value="February">February</option>
                                                                            <option value="March">March</option>
                                                                            <option value="April">April</option>
                                                                            <option value="May">May</option>
                                                                            <option value="June">June</option>
                                                                            <option value="July">July</option>
                                                                            <option value="August">August</option>
                                                                            <option value="September">September</option>
                                                                            <option value="October">October</option>
                                                                            <option value="October">November</option>
                                                                            <option value="December">December</option>
                                                                        </select>                 
                                                                    </div>
                                                                    <div class="col-xs-3">
                                                                        <select name="year" class="form-control">
                                                                            <option value="1990">1990</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2020">2020</option>
                                                                        </select>                 
                                                                    </div>
                                                                </div>          
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
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="newsletter" checked />
                                                                ارغب فى الاشتراك فى النشرة البريدية
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <div class="buttons clearfix">
                                                            <div class="pull-right">
                                                                قرات و موافق على 
                                                                <a href="#"><b>سياسة الخصوصية</b></a>
                                                                <input type="checkbox" name="agree" />
                                                            </div>
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