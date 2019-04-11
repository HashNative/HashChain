<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <i class="fa fa-plus"></i>
                    <h5>Create Main Stock Materials</h5>
                </div>
                <div class="ibox-content">
                    <?php echo form_open('MainStockMaterials/addMainStockMaterials'); ?>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Purchase Order No</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="orderNo">
                            <span class="text-danger"><?php echo form_error("orderNo"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Barcode</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="barcode" id="barcode">
                            <span class="text-danger"><?php echo form_error("barcode"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Material Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name">
                            <span class="text-danger"><?php echo form_error("name"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Material Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="type" id="type">
                            <span class="text-danger"><?php echo form_error("type"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Quantity(Units)</label>
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
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Stock Target</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="target">
                                <option>Company</option>
                                <option>Cash</option>
                            </select>
                            <?php echo form_error("target"); ?>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button class="btn btn-danger" type="clear">Clear</button>
                            <button class="btn btn-primary" type="submit">Create Material</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(async function() {
        $("#barcode").on('input', function() {
            var barcode = $("#barcode").val();

            $.ajax({
                type: "get",
                url: "<?php echo base_url(); ?>MainStockMaterials/getMaterialNameByBarcode",
                data: {
                    barcode: barcode
                },
                success: function(response) {
                    console.log('response');
                    $("#barcode").html(response);
                }
                error: function() {
                    alert("Invalide!");
                }
            });
        });
    });
</script>