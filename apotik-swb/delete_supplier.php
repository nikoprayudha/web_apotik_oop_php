<?php 
include('cek_login.php');
?>
<?php 
 include('crud_class.php');
 	$obj= new Crud("localhost","root","","apotik");
 	if(isset($_REQUEST['idSupplier'])){
 	$obj->delete_supplier($_REQUEST['idSupplier']);
 	}
?>
