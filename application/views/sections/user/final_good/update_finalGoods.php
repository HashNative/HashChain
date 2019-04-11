<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <i class="fa fa-plus"></i>
                    <h5>Add Final Goods</h5>
                </div>
                <div class="ibox-content">
                    <?php echo form_open('Goods/updateFinalGoods'); ?>
                    <input type="hidden" name="id" value="<?php echo $finalGood['id']; ?>">
                    <div class="form-group row" id="data_1">
                        <label class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" name="date" value=" <?php echo $finalGood['date']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select Section</label>
                        <div class="col-sm-10">
                            <select class="form-control m-b" name="section" value="<?php echo $finalGood['section']; ?>">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Barcode</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="barcode" value="<?php echo $finalGood['barcode']; ?>">
                            <span class="text-danger"><?php echo form_error("barcode"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="<?php echo $finalGood['product_name']; ?>">
                            <span class="text-danger"><?php echo form_error("name"); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="quantity" value="<?php echo $finalGood['quantity']; ?>">
                            <span class="text-danger"><?php echo form_error("quantity"); ?></span>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-w-m btn-danger" type="submit">Clear</button>
                            <button class="btn btn-w-m btn-primary" type="submit">Update</button>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Final Goods</h5>
                </div>
                <div class="ibox-content">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Section</th>
                                <th>Barcode</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($finalGoods as $finalGood) { ?>
                                <tr>
                                    <td><?php echo $finalGood['date']; ?></td>
                                    <td><?php echo $finalGood['section']; ?></td>
                                    <td><?php echo $finalGood['barcode']; ?></td>
                                    <td><?php echo $finalGood['product_name']; ?></td>
                                    <td><?php echo $finalGood['quantity']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</div>