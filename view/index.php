<?php @session_start(); ?>
<?php 
@include('../model/classController.php'); 
$context = new crudOperation();
$email=$_SESSION['username'];
$aduanefie=$_SESSION['name'];
$code=$_SESSION['aduanefie'];
$update=$_SESSION['update'];
$delete=$_SESSION['delete'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="../assets/img/favicon.png">
<title>ONBOARD | ADUANEFIE</title>
<link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
<!-- Nucleo Icons -->
<link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
<link rel="stylesheet" href="../assets/js/datatable/dataTables.bootstrap4.min.css">
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100"
<?php 
if (isset($_SESSION['main_response'])) {
if ($_SESSION['main_response']==1) {
echo 'onload="productsetup_success();"';
}else if ($_SESSION['main_response']==2) {
echo 'onload="productbatch_success();"';
}else if ($_SESSION['main_response']==3) {
echo 'onload="cstock_suc();"';
}else if ($_SESSION['main_response']==4) {
echo 'onload="cstock_failed();"';
}else if ($_SESSION['main_response']==5) {
echo 'onload="main_stockupdated();"';
}else if ($_SESSION['main_response']==6) {
echo 'onload="failed_stockupdated();"';
}else if ($_SESSION['main_response']==7) {
echo 'onload="credit_repayments();"';
}else if ($_SESSION['main_response']==8) {
echo 'onload="expenses_success();"';
}else if ($_SESSION['main_response']==9) {
echo 'onload="expenses_updated();"';
}else if ($_SESSION['main_response']==10) {
echo 'onload="customer_regsuccess();"';
}else if ($_SESSION['main_response']==11) {
echo 'onload="customer_updatesuccess();"';
}else if ($_SESSION['main_response']==12) {
echo 'onload="expenses_typesuccess();"';
}else if ($_SESSION['main_response']==13) {
echo 'onload="users_success();"';
}else if ($_SESSION['main_response']==14) {
echo 'onload="users_updated();"';
}



unset($_SESSION['main_response']);
}
?>>


<?php 

$page = @$_GET['page']; 
$page_error = 'error';
$file_exist = file_exists($page.'.php');
if ($file_exist==1) {
@include('inc/menu.php');
@include $page.'.php';
}else{
@include $page_error.'.php';
}
?>




<div class="fixed-plugin">
<a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
<i class="fa fa-cog py-2"> </i>
</a>
<div class="card shadow-lg ">
<div class="card-header pb-0 pt-3 ">
<div class="float-start">
<h5 class="mt-3 mb-0">Soft UI Configurator</h5>
<p>See our dashboard options.</p>
</div>
<div class="float-end mt-4">
<button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
<i class="fa fa-close"></i>
</button>
</div>
<!-- End Toggle Button -->
</div>
<hr class="horizontal dark my-1">
<div class="card-body pt-sm-3 pt-0">
<!-- Sidebar Backgrounds -->
<div>
<h6 class="mb-0">Sidebar Colors</h6>
</div>

<!-- Sidenav Type -->
<div class="mt-3">
<h6 class="mb-0">Sidenav Type</h6>
<p class="text-sm">Choose between 2 different sidenav types.</p>
</div>
<div class="d-flex">
<button class="btn btn-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
<button class="btn btn-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
</div>
<p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
<!-- Navbar Fixed -->
<div class="mt-3">
<h6 class="mb-0">Navbar Fixed</h6>
</div>
<div class="form-check form-switch ps-0">
<input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
</div>
<hr class="horizontal dark my-sm-4">
<a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
<a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
<div class="w-100 text-center">
<a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
<h6 class="mt-3">Thank you for sharing!</h6>
<a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
<i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
</a>
<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
<i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
</a>
</div>
</div>
</div>
</div>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="../assets/js/datatable/script.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="../assets/js/plugins/chartjs.min.js"></script>
<script>
var ctx = document.getElementById("chart-bars").getContext("2d");

new Chart(ctx, {
type: "bar",
data: {
labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
datasets: [{
label: "Sales",
tension: 0.4,
borderWidth: 0,
borderRadius: 4,
borderSkipped: false,
backgroundColor: "#fff",
data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
maxBarThickness: 6
}, ],
},
options: {
responsive: true,
maintainAspectRatio: false,
plugins: {
legend: {
display: false,
}
},
interaction: {
intersect: false,
mode: 'index',
},
scales: {
y: {
grid: {
drawBorder: false,
display: false,
drawOnChartArea: false,
drawTicks: false,
},
ticks: {
suggestedMin: 0,
suggestedMax: 500,
beginAtZero: true,
padding: 15,
font: {
size: 14,
family: "Inter",
style: 'normal',
lineHeight: 2
},
color: "#fff"
},
},
x: {
grid: {
drawBorder: false,
display: false,
drawOnChartArea: false,
drawTicks: false
},
ticks: {
display: false
},
},
},
},
});


var ctx2 = document.getElementById("chart-line").getContext("2d");

var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

new Chart(ctx2, {
type: "line",
data: {
labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
datasets: [{
label: "Mobile apps",
tension: 0.4,
borderWidth: 0,
pointRadius: 0,
borderColor: "#cb0c9f",
borderWidth: 3,
backgroundColor: gradientStroke1,
fill: true,
data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
maxBarThickness: 6

},
{
label: "Websites",
tension: 0.4,
borderWidth: 0,
pointRadius: 0,
borderColor: "#3A416F",
borderWidth: 3,
backgroundColor: gradientStroke2,
fill: true,
data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
maxBarThickness: 6
},
],
},
options: {
responsive: true,
maintainAspectRatio: false,
plugins: {
legend: {
display: false,
}
},
interaction: {
intersect: false,
mode: 'index',
},
scales: {
y: {
grid: {
drawBorder: false,
display: true,
drawOnChartArea: true,
drawTicks: false,
borderDash: [5, 5]
},
ticks: {
display: true,
padding: 10,
color: '#b2b9bf',
font: {
size: 11,
family: "Inter",
style: 'normal',
lineHeight: 2
},
}
},
x: {
grid: {
drawBorder: false,
display: false,
drawOnChartArea: false,
drawTicks: false,
borderDash: [5, 5]
},
ticks: {
display: true,
color: '#b2b9bf',
padding: 20,
font: {
size: 11,
family: "Inter",
style: 'normal',
lineHeight: 2
},
}
},
},
},
});
</script>
<script>
var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
var options = {
damping: '0.5'
}
Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
</body>

</html>