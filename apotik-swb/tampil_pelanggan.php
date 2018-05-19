 <h2>Tabel Pelanggan</h2>
 <?php
include('crud_class.php');
$obj=new Crud("localhost","root","","apotik");
$obj->pelanggan();
?>
<table class="table table-bordered" border="1">
    <thead>
        <tr>
            <th>Id Pelanggan</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Keluhan</th>
            <th>Telepon</th>
        </tr>
    </thead>
<?php
foreach($obj-> data as $val){
extract($val);
?>
<tbody>
    <tr>
        <td><?php echo $idPelanggan; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $jenisKelamin; ?></td>
        <td><?php echo $alamat; ?></td>
        <td><?php echo $keluhan; ?></td>
        <td><?php echo $telepon; ?></td>
   </tbody>
<?php
}
?>
</table>