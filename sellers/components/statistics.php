<?php $orders = selectAll('orders');
$revenue = 0;
$grand = 0;
?>

<div class="dashboard_wrap" id="dashboard">


    <div id="msg"></div>
    <!--Dashboard Nav-->
    <div class="dashboard_nav container">
        <div class="dashboard_header">
            <div class="dashboard_header_review">
                <h2>
                    DASHBOARD: <span style="margin-left: 1%">Overview</span>
                </h2>
            </div>

            <div class="dashboard_alerts">
                <i class="fa fa-bell"></i>
                <i class="fa fa-envelope"></i>
            </div>
        </div>
    </div>
    <!--end Nav-->
    <!--header box-->
    <div class="container box">
        <h5>Statistics</h5>
        <div class="row">
            <div class="col-xl-3 col-md-3 col-sm-3">
                <div class="statistics">
                    <h6>Total orders</h6>
                    <h5><?php echo count($orders) ?></h5>
                    <div class="progress">
                        <progress value="<?php echo count($orders) ?>" max="<?php echo count($orders) ?>"
                            class="w-100 py-2" />
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-3">
                <div class="statistics">
                    <h6>Delivered orders</h6>
                    <h5><?php echo count(selectAll('orders', ['Status' => 'Delivered'])) ?></h5>
                    <div class="progress">
                        <progress value="<?php echo count(selectAll('orders', ['Status' => 'Delivered'])) ?>"
                            max="<?php echo count($orders) ?>" class="w-100 py-2" />
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-3">
                <div class="statistics">
                    <h6>Pending orders</h6>
                    <h5><?php echo count(selectAll('orders', ['Status' => 'Pending'])) ?></h5>
                    <div class="progress">
                        <progress value="<?php echo count(selectAll('orders', ['Status' => 'Pending'])) ?>"
                            max="<?php echo count($orders) ?>" class="w-100 py-2" />
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-3">
                <div class="statistics">
                    <h6>Total paid revenue</h6>
                    <h5><?php 
                    $resp = selectAll('orders');
                    $res= selectAll('orders', ['Status' => 'Delivered']);
                    foreach($res as $re){
                        $revenue += $re['Total_price']; 
                    }
                    foreach($resp as $res){
                        $grand += $res['Total_price']; 
                    }

                    echo number_format($revenue) ;
                    
                    ?> <span class="small">/USD</span></h5>
                    <div class="progress">
                        <progress value="<?php  echo $revenue  ?>" max="<?php  echo $grand  ?>" class="w-100 py-2" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--header box-->



</div>