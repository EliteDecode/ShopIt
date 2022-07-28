<?php  
    $orders =selectAll('orders');
    ?>

<div class="orders" id="orders">
    <!--Dashboard Nav-->
    <div class="dashboard_nav">
        <div class="dashboard_header">
            <div class="dashboard_header_review">
                <h2>ORDERS</h2>
            </div>

            <div class="dashboard_alerts">
                <div class="d-flex">
                    <i class="fa fa-bell"></i>
                    <sup class="green bold " style="margin-left:-15%;"><?php echo count($orders) ?></sup>
                </div>
                <i class="fa fa-envelope"></i>
            </div>
        </div>
    </div>

    <!--end Nav-->
    <!-- <div class="orders_form">
        <div class="">
            <label class="bold dark-green" for="sort">Sort by:</label>
            <select name="" id="" class="form-control" class="w-100">
                <option value="Name" selected disabled>select</option>
                <option value="Name">Name</option>
                <option value="Name">Date</option>
                <option value="Name">product</option>
            </select>
        </div>
        &nbsp
        <div class="">
            <label class="bold dark-green" for="sort">Search</label>
            <input type="search" placeholder="Search order" class="form-control" />
        </div>
    </div> -->
    <!--End form -->
    <!--orders-->

    <div class="orders py-3 mt-5 border" style="height:1300px; overflow:scroll ">
        <div class="order_container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Order Number</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Purchase Date</th>
                        <th scope="col">Items</th>
                        <th scope="col">Amount ($)</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($orders): ?>
                    <?php foreach($orders as $key => $order): ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td>#<?php echo $order['Order_Number'] ?></td>
                        <td><?php echo $order['Fullname'] ?></td>
                        <td><?php echo $order['Phone'] ?></td>
                        <td><?php echo date('F j, Y', strtotime($order['DateReg'])) ?></td>
                        <td><?php echo $order['Items'] ?></td>
                        <td><?php echo number_format($order['Total_price']) ?></td>

                        <?php if ($order['Status'] == 'Pending'): ?>
                        <td><button class='btn btn-info' onclick='status(this)'
                                id="<?php  echo $order['id'] ?>">Pending</button></td>
                        <?php else :?>
                        <td><button class='btn btn-success' id="<?php  echo $order['id'] ?>"
                                onclick='status(this)'>Delivered</button></td>
                        <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="7">No Orders Placed Currently</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>



    <!--end-->
</div>