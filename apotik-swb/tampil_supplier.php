<h2>Tabel Supplier</h2>
<?php
include('crud_class.php');
$obj=new Crud("localhost","root","","apotik");
$obj->supplier();
?>
<table class="table table-bordered" border="1">
    <thead>
        <tr>
            <th>Id Supplier</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Perusahaan</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Action</th>
        </tr>
    </thead>
<?php
foreach($obj-> data as $val){
extract($val);
?>
<tbody>
    <tr>
        <td><?php echo $idSupplier; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $jenisKelamin; ?></td>
        <td><?php echo $perusahaan; ?></td>
        <td><?php echo $alamat; ?></td>
        <td><?php echo $telepon; ?></td>
        </tbody>
<?php
}
?>
</table>