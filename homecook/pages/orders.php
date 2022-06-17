<?php
show_sweet_alert('delivered_meal', 'Delivery man will arrive soon', 'Failed to confirm order', '', '', '');

$uid = $_SESSION['uid'];

$allOrders = getOrderPerUser($uid);

?>


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Orders</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- information summery -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Order information summery</h3>
        <div class="card-tools">
            <!-- Collapse Button -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fa fa-cogs"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Your Total Order</span>
                        <span class="info-box-number"><?= countBadgesPerUser('total_order', $uid) ?></span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-folder-open"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Processing</span>
                        <span class="info-box-number"><?= countBadgesPerUser('processing', $uid) ?></span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Delivered</span>
                        <span class="info-box-number"><?= countBadgesPerUser('delivered', $uid) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.information summery -->


<!-- order_table -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Order Details</h3>
        <div class="card-tools">
            <!-- Collapse Button -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body">
        <table id="example3" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>Ordered By</th>
                    <th>Meal Title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($allOrders as $item) {
                    $id = $item['id'];
                    if ($item['value'] == 'delivered') {
                        $class = 'disabled';
                    } else {
                        $class = '';
                    }
                ?>
                    <tr>
                        <td><?= $item['full_name'] ?></td>
                        <td><?= $item['title'] ?></td>
                        <td><?= $item['quantity'] ?></td>
                        <td><?= $item['price'] ?></td>
                        <td><?= $item['address'] ?></td>
                        <td><?= $item['phone_number'] ?></td>
                        <td><?= $item['value'] ?></td>
                        <td>
                            <a href="./pages/DB/deliver_meal.php?id=<?= $id ?>" class="btn btn-success <?= $class ?>">Deliver</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.order_table -->


<script>

</script>