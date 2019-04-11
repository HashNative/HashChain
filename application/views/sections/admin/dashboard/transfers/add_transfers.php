<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <i class="fa fa-plus"></i>
                    <h5>Transfer Materials</h5>
                </div>
                <div class="ibox-content">
                    <?php echo form_open('Transfers/addTransfers'); ?>
                    <div class="form-group row" id="data_1">
                        <label class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" value="<?php echo date("d/m/Y"); ?>" name="date">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Barcode</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="barcode">
                            <span class="text-danger"><?php echo form_error("barcode"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Material Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" disabled>
                            <span class="text-danger"><?php echo form_error("name"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Material Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="type" disabled>
                            <span class="text-danger"><?php echo form_error("type"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Available Stock</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="stock" disabled>
                            <span class="text-danger"><?php echo form_error("stock"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Unit Price</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="unitPrice">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                            </select>
                            <?php echo form_error("unitPrice"); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Section</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="section">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                            </select>
                            <?php echo form_error("section"); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Quantity(Units)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="quantity">
                            <span class="text-danger"><?php echo form_error("quantity"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Cost</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cost" disabled>
                            <span class="text-danger"><?php echo form_error("cost"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-w-m btn-danger" type="clear">Clear</button>
                            <button class="btn btn-w-m btn-primary" type="submit">Transfer Materials</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>