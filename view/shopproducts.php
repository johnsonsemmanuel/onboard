<?php $dashboard_summaries = $context->central_dashboard();?>
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Product List</h4>
<h6>Manage your products list</h6>
</div>
<!-- <div class="page-btn">
<a href="index.php?page=addproduct" class="btn btn-added">
<img src="../assets/img/icons/plus.svg" alt="img" class="me-1">Add New Product</a>
</div> -->
</div>
<div class="row">
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget">
<div class="dash-widgetimg">
<span><img src="../assets/img/icons/dash1.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>
<span class="counters" data-count="<?php echo $dashboard_summaries['total_instocx']; ?>">
</span>
</h5>
<h6>Total Central Stock</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash1">
<div class="dash-widgetimg">
<span><img src="../assets/img/icons/dash2.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>GHC
<span class="counters" data-count="<?php echo $dashboard_summaries['total_monies']; ?>">
</span>
</h5>
<h6>Total Stock Amount</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash2">
<div class="dash-widgetimg">
<span><img src="../assets/img/icons/dash1.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent"> 
<h5>
<span class="counters" data-count="<?php echo $dashboard_summaries['total_categories']; ?>"></span>
</h5>
<h6>Stock items Categories</h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash3">
<div class="dash-widgetimg">
<span><img src="../assets/img/icons/dash1.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5>
<span class="counters" data-count="<?php echo $dashboard_summaries['total_intransit']; ?>">
</span></h5>
<h6>Stock In Transit</h6>
</div>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">
<div class="search-path">
<a class="btn btn-filter" id="filter_search">
<img src="../assets/img/icons/filter.svg" alt="img">
<span><img src="../assets/img/icons/closes.svg" alt="img"></span>
</a>
</div>
<div class="search-input">
<a class="btn btn-searchset"><img src="../assets/img/icons/search-white.svg" alt="img"></a>
</div>
</div>
<div class="wordset">
<ul>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="../assets/img/icons/pdf.svg" alt="img"></a>
</li>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="../assets/img/icons/excel.svg" alt="img"></a>
</li>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="../assets/img/icons/printer.svg" alt="img"></a>
</li>
</ul>
</div>
</div>
<div class="card mb-0" id="filter_inputs">
<div class="card-body pb-0">
<div class="row">
<div class="col-lg-12 col-sm-12">
<div class="row">
<div class="col-12">
<div class="form-group">
<input type="text" class="form-control" value="List of all product in stock as at today <?php echo date('d-M-Y'); ?>" readonly style="border-radius: 0px; border: 1px solid #ff9f43;">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php $rowbatchlist = $context->select_prolistx(); ?>
<div class="table-responsive">
<table class="table datanew table-bordered">
<thead>
<tr>
<th>
<label class="checkboxs">
<input type="checkbox" id="select-all">
<span class="checkmarks"></span>
</label>
</th>
<th>Product Name</th>
<th>Category </th>
<th>Brand</th>
<th>price</th>
<th>Qty</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php 
if (!empty($rowbatchlist)) {
foreach ($rowbatchlist as $data) { $id = $data['id']; $idcate = $data['brand_code'];?>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td><?php echo $data['product_name']; ?></td>
<td><?php echo $data['category_name']; ?></td>
<td><?php echo $context->unique_brandcode($idcate); ?></td>
<td><?php echo $data['basic_price']; ?></td>
<td><?php echo $data['quantity']; ?></td>
<td class="text-center">
<a class="action-set" href="#" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment<?php echo $id; ?>"><img src="../assets/img/icons/plus-circle.svg" class="me-2" alt="img">
Stock Shop
</a>
</li>
<li>
<a href="index.php?page=updateproduct&idcode=<?php echo $id ?>" class="dropdown-item"><img src="../assets/img/icons/edit-5.svg" class="me-2" alt="img">
Update Stock
</a>
</li>
<li>
<a href="#" id="deleteStock" data-id=<?php echo $id; ?> class="dropdown-item confirm-text"><img src="../assets/img/icons/delete1.svg" class="me-2">
Delete Stock
</a>
</li>
</ul>
</td>
</tr>
<div class="modal fade" id="createpayment<?php echo $id; ?>" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<form method="POST" action="../controller/shopStockController.php">	
<div class="modal-header">
<h5 class="modal-title">Stock To Shop Entry</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Product Name</label>
<input type="text" value="<?php echo strtoupper($data['product_name']); ?>" name="product_name" readonly style="background: #fafbfe; font-weight: bold;">
</div>
</div>
<div class="col-lg-3 col-sm-12 col-12">
<div class="form-group">
<label>Price</label>
<input type="text" value="<?php echo $data['basic_price']; ?>" name="product_price" readonly style="background: #fafbfe;font-weight: bold;">
</div>
</div>
<div class="col-lg-3 col-sm-12 col-12">
<div class="form-group">
<label>Quantity In Stock</label>
<input type="text" value="<?php echo $data['quantity']; ?>" name="stock_quantity" readonly style="background: #fafbfe;font-weight: bold;">
</div>
</div>
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Quantity To Shop</label>
<input type="number" class="form-control" min="0" max="<?php echo $data['quantity']; ?>" name="toShopStock" required oninput="restrict_inputs(this)" id="toShopStock">
</div>
</div>
<div class="col-lg-6 col-sm-12 col-12">
<div class="form-group">
<label>Select Shop</label>
<select class="form-control" name="shopttyps" required>
<?php 
$rowdata = $context->select_allshops(); 
foreach ($rowdata as $data) { ?>
<option value="<?php echo $data['shop_code']; ?>">
<?php echo ucwords($data['shop_name']); ?>
</option>
<?php } ?>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="form-group mb-0">
<label>Remarks / Comments</label>
<input type="hidden" name="hiddenProduct" value="<?php echo $id; ?>">
<textarea class="form-control" name="remarks"></textarea>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<input type="submit" name="submittedShopStock" class="btn btn-submit" value="Submit">
<button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Close</button>
</div>
</form>
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
</div>