<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Transfers Report</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Barcode</th>
                                <th>Material Name</th>
                                <th>Material Type</th>
                                <th>Unit Price</th>
                                <th>Transfered Section</th>
                                <th>Quantity</th>
                                <th>Cost</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($transfers as $transfer) { ?>
                                <tr>
                                    <td><?php echo $transfer['date']; ?></td>
                                    <td><?php echo $transfer['barcode']; ?></td>
                                    <td><?php echo $transfer['material_name']; ?></td>
                                    <td><?php echo $transfer['material_type']; ?></td>
                                    <td><?php echo $transfer['unit_price']; ?></td>
                                    <td><?php echo $transfer['transfered_section']; ?></td>
                                    <td><?php echo $transfer['quantity']; ?></td>
                                    <td><?php echo $transfer['cost']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>Transfers/editTransfers/<?php echo $transfer['id']; ?>" class='btn btn-primary' type='submit'>Update</a>
                                        <a href="<?php echo base_url(); ?>Transfers/deleteTransfers/<?php echo $transfer['id']; ?>" class='btn btn-danger' type='submit'>Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <button onclick="printFunction()" class='btn btn-info'>Print</button>
                </div>
            </div>
        </div>
    </div>
</div>