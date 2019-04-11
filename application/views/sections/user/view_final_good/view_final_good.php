            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Final Goods</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="ibox-content">

                        <?php echo form_open('Goods/addFinalGoods'); ?>
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
                                <label class="col-sm-2 col-form-label">Select Section</label>
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
                                <label class="col-sm-2 col-form-label">Barcode</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="barcode">
                                    <span class="text-danger"><?php echo form_error("barcode"); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name">
                                    <span class="text-danger"><?php echo form_error("name"); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Quantity</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="quantity">
                                    <span class="text-danger"><?php echo form_error("quantity"); ?></span>
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

                            <!-- <br>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Barcode</th>
                                            <th>Product Name</th>
                                            <th>Section</th>
                                            <th>Quantity</th>
                                            <th>Options </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                            foreach ($final_good as $finalgood){
                                                echo"
                                                    <tr>
                                                        <td> {$finalgood['Date']}</td>
                                                        <td> {$finalgood['Barcode']}</td>
                                                        <td> {$finalgood['Product_name']}</td>
                                                        <td> {$finalgood['Section']}</td>
                                                        <td> {$finalgood['Quantity']}</td>
                                                        <td>
                                                            <button class='btn btn-primary btn-md' type='submit' class='text-center'>Update</button>
                                                            <button class='btn btn-danger btn-md' type='reset'>Delete</button> 
                                                        </td>
                                                        
                                                    </tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>         
                            </div>
                            
                            <br> -->

                           
                        </div>
                                
                    </div>
                </div>
            </div>

 </div>

</div>