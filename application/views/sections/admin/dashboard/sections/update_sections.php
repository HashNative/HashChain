<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <i class="fa fa-plus"></i>
                    <h5>Add New Section</h5>
                </div>
                <div class="ibox-content">
                    <?php echo form_open('Sections/updateSections'); ?>
                    <input type="hidden" name="id" value="<?php echo $section['id']; ?>">
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Section Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" value="<?php echo $section['name']; ?>">
                            <span class="text-danger"><?php echo form_error("name"); ?></span>
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
                    <h5>All Sections</h5>
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sections as $section) { ?>
                                <tr>
                                    <td><?php echo $section['name']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>