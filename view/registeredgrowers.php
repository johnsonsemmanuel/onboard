<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<?php @include('inc/nav.php'); 
$summaries_count=0;
$summaries_size=0; 
$selected_todaysales = $context->myregistered_farmers($email);
$selected_summaries2 = $context->sum_count_summaries($email);
if (!empty($selected_todaysales)) {
$grower_counts = count($selected_todaysales);
} 

if (!empty($selected_summaries2)) {
foreach ($selected_summaries2 as $cdatax) {
$summaries_count = $cdatax['idcount'];
$summaries_size = $cdatax['sumacres'];
}
}
?>
<div class="container-fluid py-4">
<div class="row">
<div class="col-12 mb-2">
<a href="index.php?page=newgroweronboard" id="aduanefie" class="btn btn-outline-primary btn-sm mb-0 me-3">
<img src="../assets/images/svg/plus.svg" alt="img" class="me-1">
Add Grower
</a>
</div>
</div>
<div class="row">
<div class="card mb-4">
<div class="card-header pb-0">
<h6>Registered Growers List</h6>
</div>
<div class="card-body px-0 pt-0 pb-2">
<div class="table-responsive p-0">
<table class="table align-items-center mb-0 datanew">
<thead>
<tr>
<th>Registration Date</th>
<th>Grower Image/Photo</th>
<th>Registered Grower's Name</th>
<th>Land Size - <?php echo date('Y'); ?></th>
<th class="text-center">Action</th>
</tr>
</thead>
<tbody>
<?php 
if (!empty($selected_todaysales)) {
foreach ($selected_todaysales as $data) { $id = $data['id'];
$land_size = $context->farmer_thisyearsize($id)
?>
<tr>
<td><?php echo $data['date_time']; ?></td>
<td>
<center><img width="35px" class="img-control" style="border-radius: 10px; border: 2px solid green" src="../controller/images/<?php echo $data['pix'] ?>"></center>
</td>
<td><?php echo ucwords(strtolower($data['first_name'].' '.$data['other_names'].' '.$data['surname'])); ?></td>
<td align="right"><?php echo number_format($land_size); ?></td>
<td class="text-center">


<a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#quantitymodal<?php echo $id ?>"><img src="../assets/images/svg/plus-circle.svg" class="me-2" alt="img">Capture</a>
<a href="index.php?page=thisyeardetails&idcode=<?php echo $id; ?>" class="btn btn-sm btn-info">
<img src="../assets/images/svg/dollar-square.svg" class="me-2" alt="img">
Details
</a>
</td>
</tr>

<div class="modal fade" id="quantitymodal<?php echo $id ?>" tabindex="-1" aria-labelledby="quantitymodal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
<div class="modal-dialog modal-md modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title justify-content-center"><center>Enter Farmer Details For This Year</center></h5>
</div>
<div class="modal-body">
<form method="POST" action="../controller/addcentralController.php">
<input type="hidden" name="trans_code" value="<?php echo $id; ?>">
<div class="row">
<div class="col-12">
<center>
<img src="../controller/images/<?php echo $data['pix'] ?>" width="40%" class="img-control" style="border-radius: 20px; border: 2px solid green; height: 200px"> <hr>
<h3><?php echo ucwords(strtoupper($data['first_name'].' '.$data['other_names'].' '.$data['surname'])); ?></h3>
</center><hr>
</div>
<div class="col-12">
<div class="form-group"><label>Enter Location Of Farm</label>
<input type="text" class="form-control" name="flocation" style="font-weight: bold; color: green;">
</div>
</div>
<div class="col-12">
<div class="form-group"><label>
Crop Growing For Aduanefie Marketplace
</label>
<select class="form-control" name="crop">
<option value="">SELECT</option>
<?php 
$rowdata = $context->select_allcrops(); 
foreach ($rowdata as $data) { ?>
<option value="<?php echo $data['crop_name']; ?>">
<?php echo ucwords($data['crop_name']); ?>
</option>
<?php } ?>
</select>
</div>
</div>
<div class="col-12">
<div class="form-group"><label>Enter Land Size (Acres)</label>
<input type="number"  class="form-control" max="100" name="landsize" id="landsize" required style="font-weight: bold; color: green;text-align: right;" autofocus>
</div>
</div>
</div>
<div class="col-lg-12">
<button class="btn btn-submit btn-success col-12 me-2" type="submit" name="masterSalesSubmitted">Submit
</button>
<a class="btn btn-cancel btn-danger col-12" data-bs-dismiss="modal">Cancel</a>
</div>
</form>
</div>
</div>
</div>
</div>
<?php 
}
}
?>

</tbody>
</table>
</div>
</div>
</div>
</div>
<?php @include('inc/foot.php'); ?>
</div>
</main>