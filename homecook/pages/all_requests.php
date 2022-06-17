<?php
show_sweet_alert('response_to_request', 'Response Under Review', 'Failed to response', '', '', '');
$uid = $_SESSION['uid'];
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1 class="m-0">Requests </h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- information summery -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Request information summery</h3>
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
                        <span class="info-box-text">Total requests</span>
                        <span class="info-box-number"><?= countBadges('all_requests') ?></span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Active requests</span>
                        <span class="info-box-number"><?= countBadges('active_requests') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.information summery -->

<!-- request_table -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Request Details</h3>
        <div class="card-tools">
            <!-- Collapse Button -->
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        </div>
    </div>
    <div class="card-body">
        <table id="example4" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>Requested By</th>
                    <th>Meal Title</th>
                    <th>Quantity</th>
                    <th>Spice</th>
                    <th>Oil</th>
                    <th>Sugar</th>
                    <th>Salt</th>
                    <th>Add Ons</th>
                    <th>Allergic Item</th>
                    <th>Delivery At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $all_data = getAllRequests();
                while ($row = mysqli_fetch_array($all_data)) {
                ?>
                    <tr>
                        <td><?= $row['full_name'] ?></td>
                        <td><?= $row['meal_title'] ?></td>
                        <td><?= $row['quantity'] ?></td>
                        <td><?= $row['spice_level'] ?></td>
                        <td><?= $row['oil_level'] ?></td>
                        <td><?= $row['sugar_level'] ?></td>
                        <td><?= $row['salt_level'] ?></td>
                        <td><?= $row['add_ons'] ?></td>
                        <td><?= $row['is_allergy'] ?></td>
                        <td><?= date_format(date_create($row['delivery_date']), "jS M") ?></td>
                        <td>
                            <button class="btn btn-success" onclick="response(<?= $row['id'] ?>)" title="respond">Response</button>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.request_table -->

<script>
    async function response(id) {
        const {
            value: email
        } = await Swal.fire({
            title: 'Offer a price',
            input: 'text',
            inputLabel: 'Consumer may choose your offer upon price',
            inputPlaceholder: 'BDT'
        })

        if (email) {
            await Swal.fire(`You can see your response now on Response tab`)
            window.location.href = './pages/DB/add_response.php?id=' + id + '&price=' + email
        }
    }
</script>