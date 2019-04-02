<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <i class="fa fa-plus"></i>
                    <h5>Add New Section</h5>
                </div>
                <div class="ibox-content">
                    <form method="post" action="<?php echo base_url()?>Add/addsectionsvalidation">
                        <div class="form-group  row"><label class="col-sm-2 col-form-label">Section Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="section">
                            <span class="text-danger"><?php echo form_error("section"); ?></span>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group row">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-w-m btn-danger" type="submit">Clear</button>
                                <button class="btn btn-w-m btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 