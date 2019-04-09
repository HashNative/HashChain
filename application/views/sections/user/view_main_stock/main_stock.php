            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>View Main Stock</h5>
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
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Barcode</th>
                                            <th>Purchase Order No</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Total</th>
                                            <th>Options</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($main_stock as $mainstock){
                                                echo"
                                                    <tr>
                                                        <td> {$mainstock['Barcode']}</td>
                                                        <td> {$mainstock['Purchase_order_no']}</td>
                                                        <td> {$mainstock['Name']}</td>
                                                        <td> {$mainstock['Type']}</td>
                                                        <td> {$mainstock['Quantity']}</td>
                                                        <td> {$mainstock['Unit Price']}</td>
                                                        <td> {$mainstock['Total']}</td>
                                                        <td>
                                                            <button class='btn btn-info btn-md' type='button' class='text-center'>Print</button>
                                                            <button class='btn btn-primary btn-md' type='submit' class='text-center'>Update</button>
                                                            <button class='btn btn-danger btn-md' type='reset'>Delete</button>
                                                        </td>
                                                    </tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>         
                            </div>
                    
                        </div>
                                
                    </div>
                </div>
            </div>

 </div>

</div>