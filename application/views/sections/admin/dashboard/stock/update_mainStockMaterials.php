<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <i class="fa fa-plus"></i>
                    <h5>Update Main Stock Materials</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <?php echo form_open('MainStockMaterials/updateMainStockMaterials'); ?>
                    <input type="hidden" name="id" value="<?php echo $mainStockMaterial['id']; ?>">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Purchase Order No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="orderno" value="<?php echo $mainStockMaterial['purchase_order_no']; ?>">
                            <span class="text-danger"><?php echo form_error("orderno"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Barcode</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="barcode" value="<?php echo $mainStockMaterial['barcode']; ?>">
                            <span class="text-danger"><?php echo form_error("barcode"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Material Name</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="name" value="<?php echo $mainStockMaterial['name']; ?>">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                            </select>
                            <?php echo form_error("name"); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Material Type</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="type" value="<?php echo $mainStockMaterial['type']; ?>">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                            </select>
                            <?php echo form_error("type"); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Quantity(Units)</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="quantity" value="<?php echo $mainStockMaterial['quantity']; ?>">
                            <span class="text-danger"><?php echo form_error("quantity"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Unit Price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="unitprice" value="<?php echo $mainStockMaterial['unit_price']; ?>">
                            <span class="text-danger"><?php echo form_error("unitprice"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="total" value="<?php echo $mainStockMaterial['total']; ?>">
                            <span class="text-danger"><?php echo form_error("total"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Stock Target</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="target" value="<?php echo $mainStockMaterial['target']; ?>">
                                <option>Company</option>
                                <option>Cash</option>
                            </select>
                            <?php echo form_error("target"); ?>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button class="btn btn-danger" type="submit">Clear</button>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>