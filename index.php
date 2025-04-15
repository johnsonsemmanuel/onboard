<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="assets/img/favicon.png">
<title>ONBOARD | ADUANEFIE</title>
<link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
<link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet"/>
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
<body <?php 
if (isset($_SESSION['log_response'])) {
if ($_SESSION['log_response']==1) {
echo 'onload="sms_success();"';
}else if ($_SESSION['log_response']==2) {
echo 'onload="sms_nophone();"';
}else if ($_SESSION['log_response']==3) {
echo 'onload="sms_noexistence();"';
}else if ($_SESSION['log_response']==4) {
echo 'onload="sms_wrongcode();"';
}else if ($_SESSION['log_response']==9) {
echo 'onload="success_regalready();"';
}else if ($_SESSION['log_response']==10) {
echo 'onload="success_reg();"';
}
unset($_SESSION['log_response']);
}
?>>
<?php 
$page = @$_GET['page']; 
$page_error = 'error';
$file_exist = file_exists($page.'.php');
if ($file_exist==1) {
@include $page.'.php';
}else{
@include $page_error.'.php';
}
?>



<footer class="footer py-5">
<div class="container">
<div class="row">
<div class="col-lg-8 mb-4 mx-auto text-center">
<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
Company
</a>
<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
About Us
</a>
<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
Team
</a>
<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
Products
</a>
<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
Blog
</a>
<a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
Pricing
</a>
</div>
<div class="col-lg-8 mx-auto text-center mb-4 mt-2">
<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
<span class="text-lg fab fa-dribbble"></span>
</a>
<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
<span class="text-lg fab fa-twitter"></span>
</a>
<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
<span class="text-lg fab fa-instagram"></span>
</a>
<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
<span class="text-lg fab fa-pinterest"></span>
</a>
<a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
<span class="text-lg fab fa-github"></span>
</a>
</div>
</div>
<div class="row">
<div class="col-8 mx-auto text-center mt-1">
<p class="mb-0 text-secondary">
Copyright © <script>
document.write(new Date().getFullYear())
</script> Aduanefie Market Place.
</p>
</div>
</div>
</div>
</footer>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
</body>
</html>