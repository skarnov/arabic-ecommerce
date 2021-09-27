<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add New Product
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>evis_inventory/manage_product"> Manage Product</a></li>
            <li class="active">Add New Product</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <form action="<?php echo base_url(); ?>evis_inventory/save_product" method="POST" name="product" enctype="multipart/form-data">
                        <h3 style="color:green">
                            <?php
                            $msg = $this->session->userdata('save_product');
                            if (isset($msg)) {
                                echo "<p style='margin-left:2%;'>$msg</p>";
                                $this->session->unset_userdata('save_product');
                            }
                            ?>
                        </h3>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Select Category</label>
                                        <select name="category_id" class="form-control select2" style="width: 100%;">
                                            <?php
                                            foreach ($all_category as $v_category) {
                                                ?>
                                                <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="product_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product Tag</label>
                                    <input type="text" name="product_tag" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product Main Image </label>
                                    <input type="file" name="product_image_0" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product Additional Image - 1</label>
                                    <input type="file" name="product_image_1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product Additional Image - 2</label>
                                    <input type="file" name="product_image_2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product Additional Image - 3</label>
                                    <input type="file" name="product_image_3" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product Additional Image - 4</label>
                                    <input type="file" name="product_image_4" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="radio" name="product_discount_type" value="1"> Discount Product
                                    </label>
                                    <label>
                                        <input type="radio" name="product_discount_type" value="2"> Most Discount Product
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Available Color</label>
                                    <input type="text" name="product_color" class="form-control" placeholder="Do Not Use Space. Example: Red,Green,Blue">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="number" name="product_quantity" id="product_quantity" onmouseout="startCalc();" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Discount End Time</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="discount_end_time" placeholder="<?php echo date("Y/m/d"); ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Product Current Price</label>
                                    <input type="text" name="product_price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product Old Price</label>
                                    <input type="text" name="product_old_price" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Product Summery</label>
                                    <textarea name="product_summery" class="textarea" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea name="product_description" class="textarea" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Product Status</label>
                                        <select name="product_status" class="form-control select2" style="width: 100%;">
                                            <option value="">Select Status</option>
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                    </div>
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