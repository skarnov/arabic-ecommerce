<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Customer
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>evis_sale/manage_customer"> Manage Customer</a></li>
            <li class="active">Edit Customer</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>evis_sale/update_customer" name="customer" method="POST">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('edit_customer');
                            if (isset($msg)) {
                                echo "<p style='margin-left:2%;'>$msg</p>";
                                $this->session->unset_userdata('edit_customer');
                            }
                            ?>
                        </h3>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="first_name" value="<?php echo $customer_info->first_name; ?>" class="form-control">
                                    <input type="hidden" name="customer_id" value="<?php echo $customer_info->customer_id; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" value="<?php echo $customer_info->last_name; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="<?php echo $customer_info->email; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="<?php echo $customer_info->phone; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Fax</label>
                                    <input type="text" name="fax" value="<?php echo $customer_info->fax; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" value="<?php echo $customer_info->company; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address 1</label>
                                    <textarea name="address_1" class="textarea" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $customer_info->address_1; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Address 2</label>
                                    <textarea name="address_2" class="textarea" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $customer_info->address_2; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name="city" value="<?php echo $customer_info->city; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Zip</label>
                                    <input type="text" name="zip" value="<?php echo $customer_info->zip; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" name="state" value="<?php echo $customer_info->state; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Region</label>
                                    <input type="text" name="region" value="<?php echo $customer_info->region; ?>" class="form-control">
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
                            <button type="submit" class="btn btn-info pull-right">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    document.forms['customer'].elements['customer_status'].value = '<?php echo $customer_info->customer_status; ?>';
</script>