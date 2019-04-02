<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Staff view</h5>
                </div>
                <div class="ibox-content">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Section</th>
                                <th>Basic Salary</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($staffArray as $key => $value) {
                                echo 
                                "<tr><td>" . $value['Name']. "</td>
                                <td>" . $value['Type']. "</td>
                                <td>" . $value['Section']. "</td>
                                <td>" . $value['Basic Salary']."</td>
                                <td><button class='btn btn-primary type='submit>Update</button>
                                <button class='btn btn-danger type='submit>Delete</button></td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div> 