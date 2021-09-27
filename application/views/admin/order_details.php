<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Order Details
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>evis_sale/manage_order"> Manage Order</a></li>
            <li class="active">Order Details</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Sales Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($order_info as $v_order) {
                            ?>
                            <tr>
                                <td><?php echo $v_order->product_name; ?></td>
                                <td><?php echo $v_order->product_price; ?></td>
                                <td><?php echo $v_order->product_sales_quantity; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>