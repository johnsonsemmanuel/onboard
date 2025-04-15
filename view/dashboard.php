<?php 
if ($_SESSION['role_id']==1) {
@include('dashboard/admin_dashboard.php');
}else if($_SESSION['role_id']==1){
@include('dashboard/rm_dashboard.php');
}else{
@include('dashboard/grower_dashboard.php');
}
?>