<?php 
include('cek_login.php');
?>
<?php 
 include('crud_class.php');
 	$obj= new Crud("localhost","root","","apotik");
 	if(isset($_REQUEST['idProfesikrw'])){
 	$obj->delete_profesikrw($_REQUEST['idProfesikrw']);
 	}
?>
