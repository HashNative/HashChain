<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Cash Stock Report</h5>
                </div>
                <div class="ibox-content">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Purchase Order No</th>
                                <th>Barcode</th>
                                <th>Material Name</th>
                                <th>Material Type</th>
                                <th>Quantity</th>
                                <th>Unit price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cashStocks as $cashStock) { ?>
                                <tr>
                                    <td><?php echo $cashStock['purchase_order_no']; ?></td>
                                    <td><?php echo $cashStock['barcode']; ?></td>
                                    <td><?php echo $cashStock['name']; ?></td>
                                    <td><?php echo $cashStock['type']; ?></td>
                                    <td><?php echo $cashStock['quantity']; ?></td>
                                    <td><?php echo $cashStock['unit_price']; ?></td>
                                    <td><?php echo $cashStock['total']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php
                        $sum = 0; 
                        foreach ($cashStocks as $cashStock) 
                        { $sum = $sum + $cashStock['total']; }
                    ?>
                    <h1>Total = <?php echo $sum; ?></h1>
                    <button onclick="printFunction()" class='btn btn-info'>Print</button>
                </div>
            </div>
        </div>
    </div>
</div>