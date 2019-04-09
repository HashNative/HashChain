            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>View Final Goods</h5>
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

                        <div class="col text-right">
                                <?php 
                                     echo "Date : " . date("Y-m-d") . "<br>"; 
                                ?>
                            </div>

                            <br>
                            
                        <form method="POST">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Stock Target :</label> 
                                            <div class="col-lg-10">
                                                <select class="form-control m-b" name="stockTarget">
                                                    <option>Company</option>
                                                    <option>Agent</option>
                                                    <option>Warehouse</option>
                                                    <option>Retailers</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Barcode :</label> 
                                        <div class="col-sm-10">
                                            <input type="Text" name="Barcode" class="form-control">
                                            <span class="text-danger"><?php echo form_error("Barcode"); ?></span>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Item Name :</label>
                                        <div class="col-lg-10">
                                            <input type="text" disabled="" placeholder=" - " class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row"><label class="col-lg-2 col-form-label">Material Type :</label>
                                        <div class="col-lg-10" >
                                            <input type="text" disabled="" placeholder=" - " class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Quantity :</label> 
                                        <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <input type="number" name="quantity" class="form-control" value="0">
                                                <div class="input-group-append">
                                                    <span class="input-group-addon">units</span>
                                                </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Unit Price :</label>
                                        <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <div class="input-group-prepend">
                                                <span class="input-group-addon">Rs.</span>
                                            </div>
                                            <input type="number" name="unitPrice" class="form-control" value="0">
                                                <div class="input-group-append">
                                                    <span class="input-group-addon">/=</span>
                                                </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Total :</label>
                                        <div class="col-sm-10">
                                        <div class="input-group m-b">
                                            <div class="input-group-prepend">
                                                <span class="input-group-addon">Rs.</span>
                                            </div>
                                            <input type="number" name="total" class="form-control" value="0" >
                                                <div class="input-group-append">
                                                    <span class="input-group-addon">/=</span>
                                                </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col text-center">
                                        
                                            <button class="btn btn-primary btn-sm " type="submit"><strong>Save</strong></button>
                                            <button class="btn btn-sm btn-danger " type="reset"><strong>Clear</strong></button>
                                        
                                        </div>
                                    </div>
                            </form>

                            <br>
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
                            
                            <br>

                           
                        </div>
                                
                    </div>
                </div>
            </div>

 </div>

</div>