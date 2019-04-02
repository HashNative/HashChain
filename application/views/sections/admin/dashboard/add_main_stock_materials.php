<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <i class="fa fa-plus"></i>
                    <h5>Add Main Stock Materials</h5>
                </div>
                <div class="ibox-content">

                    <form method="post" action="<?php echo base_url() ?>Add/addmainstockmaterialsvalidation">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Purchase Order No</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="orderno">
                                <span class="text-danger"><?php echo form_error("orderno"); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Barcode</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="barcode">
                                <span class="text-danger"><?php echo form_error("barcode"); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Material Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name">
                                <span class="text-danger"><?php echo form_error("name"); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Material Type</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="type">
                                <span class="text-danger"><?php echo form_error("type"); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="quantity">
                                <span class="text-danger"><?php echo form_error("quantity"); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unit Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="unitprice">
                                <span class="text-danger"><?php echo form_error("unitprice"); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="total">
                                <span class="text-danger"><?php echo form_error("total"); ?></span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button class="btn btn-danger" type="submit">Clear</button>
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-info" type="submit">View</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div> 