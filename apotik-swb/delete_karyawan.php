<?php 
include('cek_login.php');
?>
<?php 
 include('crud_class.php');
 	$obj= new Crud("mysql.idhostinger.com","u132483739_aptk","apotikswb","u132483739_aptk");
 	if(isset($_REQUEST['idKaryawan'])){
 	$obj->delete_karyawan($_REQUEST['idKaryawan']);
 	}
?>
