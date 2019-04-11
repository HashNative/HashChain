<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <i class="fa fa-plus"></i>
                    <h5>Add Final Goods</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" action="<?php echo base_url() ?>Add/addmaterialsvalidation">
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
                                <input type="text" class="form-control" name="name">
                                <span class="text-danger"><?php echo form_error("name"); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Material Type</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="type">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Preffered Unit</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="unit">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <a href="" class="btn btn-w-m btn-danger" type="submit">Clear</button>
                                <a href="" class="btn btn-w-m btn-primary" type="submit">Save</button>
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
                    <h5>All Materials</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Barcode</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Unit</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($materials as $material){ ?>
                                <tr>
                                    <td><?php echo $material['barcode']; ?></td>
                                    <td><?php echo $material['name']; ?></td>
                                    <td><?php echo $material['type']; ?></td>
                                    <td><?php echo $material['unit']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>Materials/editMaterials/<?php echo $materials['id']; ?>" class='btn btn-primary' type='submit'>Update</a>
                                        <a href="<?php echo base_url(); ?>Materials/deleteMaterials/<?php echo $materials['id']; ?>" class='btn btn-danger' type='submit'>Delete</a>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>

                </div>
            </div>
        </div>
    </div>
</div> 