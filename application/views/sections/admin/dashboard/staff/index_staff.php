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
                    <?php echo form_open('Staff/addStaff'); ?>
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
                            <select class="form-control m-b" name="employeeType">
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
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="basicSalary">
                            <span class="text-danger"><?php echo form_error("basicSalary"); ?></span>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-w-m btn-danger" type="clear">Clear</button>
                            <button class="btn btn-w-m btn-primary" type="submit">Save</button>
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
                    <i class="fa fa-plus"></i>
                    <h5>Staff view</h5>
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
                                <th>Name</th>
                                <th>Type</th>
                                <th>Section</th>
                                <th>Basic Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($staff as $employee) { ?>
                                <tr>
                                    <td><?php echo $employee['name']; ?></td>
                                    <td><?php echo $employee['type']; ?></td>
                                    <td><?php echo $employee['section']; ?></td>
                                    <td><?php echo $employee['salary']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>Staff/editStaff/<?php echo $employee['id']; ?>" class='btn btn-primary' type='submit'>Update</a>
                                        <a href="<?php echo base_url(); ?>Staff/deleteStaff/<?php echo $employee['id']; ?>" class='btn btn-danger' type='submit'>Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>