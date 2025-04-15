<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<?php @include('inc/nav.php'); 
$xcod = $_GET['idcode'];
$selected_todaysales = $context->central_thisyearlist($xcod);
?>
<div class="container-fluid py-4">
<div class="row">
<div class="col-12 mb-2">
<a href="index.php?page=registeredgrowers" id="aduanefie" class="btn btn-outline-primary btn-sm mb-0 me-3">
<img src="../assets/images/svg/plus.svg" alt="img" class="me-1">
Return to list
</a>
</div>
</div>
<div class="row">
<div class="card mb-4">
<div class="card-header pb-0">
<h6>Registered Growers List</h6>
</div>
<div class="card-body px-0 pt-0 pb-2">
<div class="table-responsive">
<table class="table datanew">
<thead>
<tr>
<th>Date</th>
<th>Grower Name</th>
<th>Farm Location</th>
<th>Farm Size</th>
<th>Crop</th>
</tr>
</thead>
<tbody>
<?php 
if (!empty($selected_todaysales)) {
foreach ($selected_todaysales as $data) { $id = $data['farmer_id'];?>
<tr>
<td><?php echo $data['date_time']; ?></td>
<td><?php echo ucwords(strtolower($context->fetch_farmer($id))); ?></td>
<td><?php echo ucwords(strtolower($data['location'])); ?></td>
<td align="right"><?php echo number_format($data['farm_size'],2); ?></td>
<td><?php echo ucwords(strtolower($data['crop'])); ?></td>
</tr>
<?php 
$total += $data['farm_size'];
}
}
?>
<tfoot>
<tr>
<td colspan="2"></td>
<td style="background: #f5f5f5; border: 2px solid green; color: green; font-weight: bold;">
<b>TOTAL FARM SIZE THIS YEAR</b>
</td>
<td align="right" style="background: #f5f5f5; border: 2px solid green; color: green; font-weight: bold;">
ACRES <?php echo number_format($total,2); ?></td>
</tr>
</tfoot>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<?php @include('inc/foot.php'); ?>
</div>
</main>