<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Manage Brand
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>evis_sale/add_brand">Add New Brand</a></li>
            <li class="active">Manage Brand</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_brand as $v_brand) {
                            ?>
                            <tr>
                                <td>
                                    <img src="<?php echo base_url() . $v_brand->brand_image; ?>" style="height:200px; width:600px;" />
                                </td>
                                <td>
                                    <a href="<?php echo base_url(); ?>evis_sale/delete_brand/<?php echo $v_brand->brand_id; ?>" class="btn btn-danger" data-toggle="tooltip" title="Delete Brand" onclick="return check_delete();"><i class="fa fa-trash"></i></a>
                                </td>
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