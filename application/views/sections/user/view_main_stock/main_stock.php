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
                                            foreach ($main_stock as $mainstock){ ?>
                                                
                                                    <tr>
                                                        <td><?php echo $mainstock['Barcode']; ?></td>
                                                        <td><?php echo $mainstock['Purchase_order_no']; ?></td>
                                                        <td><?php echo $mainstock['Name']; ?></td>
                                                        <td><?php echo $mainstock['Type']; ?></td>
                                                        <td><?php echo $mainstock['Quantity']; ?></td>
                                                        <td><?php echo $mainstock['Unit Price']; ?></td>
                                                        <td><?php echo $mainstock['Total']; ?></td>
                                                        <td>
                                                            <button class='btn btn-info btn-md' type='button' class='text-center'>Print</button>
                                                            <button class='btn btn-primary btn-md' type='submit' class='text-center'>Update</button>
                                                            
                                                            <a href='<?php echo base_url(); ?>Stock/deleteMainStock/<?php echo $mainstock['id']; ?>'  
                                                            class='btn btn-danger btn-md' type='submit'  onClick="return doconfirm();">
                                                            Delete</a>
                                                        </td>
                                                    </tr>
                                          <?php  } ?>
                                    </tbody>
                                </table>         
                            </div>
                    
                        </div>
                                
                    </div>
                </div>
            </div>

 </div>

</div>


<!-- dialog box confirmation for delete record -->
<script>
    function doconfirm()
    {
        job=confirm("Are you sure to delete the record permanently?");
        if(job!=true)
        {
            return false;
        }
    }
</script>