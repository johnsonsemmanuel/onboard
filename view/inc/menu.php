<?php 
if ($_SESSION['role_id']==1) {
@include('menus/admin.php');
}else if($_SESSION['role_id']==1){
@include('menus/rm.php');
}else{
@include('menus/grower.php');
}
?>