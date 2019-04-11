<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Main Stock Report</h5>
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
                                <th>Target</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mainStocks as $mainStock) { ?>
                                <tr>
                                    <td><?php echo $mainStock['purchase_order_no']; ?></td>
                                    <td><?php echo $mainStock['barcode']; ?></td>
                                    <td><?php echo $mainStock['name']; ?></td>
                                    <td><?php echo $mainStock['type']; ?></td>
                                    <td><?php echo $mainStock['quantity']; ?></td>
                                    <td><?php echo $mainStock['unit_price']; ?></td>
                                    <td><?php echo $mainStock['total']; ?></td>
                                    <td><?php echo $mainStock['target']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php
                    $sum = 0;
                    foreach ($mainStocks as $mainStock) {
                            $sum = $sum + $mainStock['total'];
                        }
                    ?>
                    <h1>Total = <?php echo $sum; ?></h1>
                    <button onclick="printFunction()" class='btn btn-info'>Print</button>
                </div>
            </div>
        </div>
    </div>
</div>