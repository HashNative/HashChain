<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Company Stock Report</h5>
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
                            <?php foreach ($companyStocks as $companyStock) { ?>
                                <tr>
                                    <td><?php echo $companyStock['purchase_order_no']; ?></td>
                                    <td><?php echo $companyStock['barcode']; ?></td>
                                    <td><?php echo $companyStock['name']; ?></td>
                                    <td><?php echo $companyStock['type']; ?></td>
                                    <td><?php echo $companyStock['quantity']; ?></td>
                                    <td><?php echo $companyStock['unit_price']; ?></td>
                                    <td><?php echo $companyStock['total']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php
                    $sum = 0;
                    foreach ($companyStocks as $companyStock) {
                            $sum = $sum + $companyStock['total'];
                        }
                    ?>
                    <h1>Total = <?php echo $sum; ?></h1>
                    <button onclick="printFunction()" class='btn btn-info'>Print</button>
                </div>
            </div>
        </div>
    </div>
</div>