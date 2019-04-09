
        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">

                        <div class="ibox-title">
                            <h2 class="m-t-none m-b" font-style="BOLD">Transfer</h2>
                                
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

                            <!-- <form method="POST"> -->
                           <?php echo form_open('transfer/createTransfer'); ?>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Barcode :</label> 
                                            <div class="col-sm-10">
                                                <input type="Text" placeholder="" class="form-control" name="Barcode">
                                                <span class="text-danger"><?php echo form_error("Barcode"); ?></span> 
                                            </div>      
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Unit Cost :</label> 
                                            <div class="col-lg-10">
                                                <div class="input-group m-b">
                                                    <select class="form-control m-b" name="unitCost">
                                                        <option>Item 1</option>
                                                        <option>Item 2</option>
                                                        <option>Item 3</option>
                                                        <option>Item 4</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <span class="input-group-addon">type</span>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        <span class="text-danger"><?php echo form_error("unitCost"); ?></span>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Transfer to section :</label> 
                                            <div class="col-lg-10">
                                                <select class="form-control m-b" name="sections">
                                                    <option>Department 1</option>
                                                    <option>Department 2</option>
                                                    <option>Department 3</option>
                                                    <option>Department 4</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Quantity :</label> 
                                            <div class="col-sm-10">
                                                <div class="input-group m-b">
                                                    <input type="number" class="form-control" value="0" name="quantity">
                                                        <div class="input-group-append">
                                                            <span class="input-group-addon">units</span>
                                                        </div>
                                                        
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Cost :</label>
                                            <div class="col-sm-10">
                                                <div class="input-group m-b">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-addon">Rs.</span>
                                                    </div>
                                                    <input type="number" class="form-control" name="cost" value="0">
                                                        <div class="input-group-append">
                                                            <span class="input-group-addon">/=</span>
                                                        </div> 
                                                </div>
                                            </div>
                                        
                                    </div>

                                    <div class="form-group row">

                                        <div class="col text-center">
                                            <button class="btn btn-success btn-sm" type="submit" name="transfer"><strong>Transfer</strong></button>
                                            <button class="btn btn-sm btn-danger " type="reset" name="clear"><strong>Clear</strong></button>
                                        </div>
                                        
                                    </div>
                            </form>

                            <br>
                            <br>
                            <br>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Barcode</th>
                                            <th>Unit Cost</th>
                                            <th>Transfer to section</th>
                                            <th>Quantity</th>
                                            <th>Cost</th>
                                            <th>Options</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($transfer_data as $transferData){ ?>
                                               
                                            <tr>
                                                <td><?php echo $transferData['Barcode']; ?></td>
                                                <td><?php echo $transferData['Unit_Cost']; ?></td>
                                                <td><?php echo $transferData['Transfer_to_section']; ?></td>
                                                <td><?php echo $transferData['Quantity']; ?></td>
                                                <td><?php echo $transferData['Cost']; ?></td>
                                                
                                                <td>

                                                    <a href='<?php echo base_url(); ?>transfer/editTransfer/<?php echo $transferData['id']; ?>'  
                                                    class='btn btn-primary btn-md' type='submit'>
                                                    Update</a>
                                                    
                                                    <a href='<?php echo base_url(); ?>transfer/deleteTransfer/<?php echo $transferData['id']; ?>'  
                                                    class='btn btn-danger btn-md' type='submit'>
                                                    Delete</a>
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

    </div>

</div>

<!-- <script>
    $(document).ready(function(){
        $('.delete_data').click(function(){
            var id = $(this).attr("id");
                if(confirm("Are you sure you want to delete this record ?"))
                {
                    window.location="<?php echo base_url(); ?>transfer/deleteTransfer/<?php echo $transferData['id']; ?>";
                }
                else
                {
                    return false;
                }
        });
    });
</script> -->



    
