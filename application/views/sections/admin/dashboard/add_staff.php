<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <i class="fa fa-plus"></i>
                    <h5>Add Staff</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form action('') method="POST" action="<?php echo base_url() ?>Add/addworkersvalidation">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                            <span class="text-danger"><?php echo form_error("name"); ?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Employee Type</label>
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
                            <label class="col-sm-2 col-form-label">Section</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="section">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Basic Salary</label>
                            <div class="col-sm-10"><input type="number" class="form-control"></div>
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