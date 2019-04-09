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
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Barcode</th>
                                            <th>Item</th>
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
                                                        <td> {$finalgood['Item']}</td>
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