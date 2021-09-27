<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add Customer
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>evis_sale/manage_customer"> Manage Customer</a></li>
            <li class="active">Add Customer</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>evis_sale/save_customer" method="POST">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('save_customer');
                            if (isset($msg)) {
                                echo "<p style='margin-left:2%;'>$msg</p>";
                                $this->session->unset_userdata('save_customer');
                            }
                            ?>
                        </h3>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" name="fax" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address 1</label>
                                    <textarea name="address_1" class="textarea" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address 2</label>
                                    <textarea name="address_2" class="textarea" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Zip</label>
                                    <input type="text" name="zip" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" name="state" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Region</label>
                                    <input type="text" name="region" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Customer Status</label>
                                    <select name="customer_status" class="form-control select2" style="width: 100%;">
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>