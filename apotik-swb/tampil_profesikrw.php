<h2>Tabel Profesi Karyawan</h2>
<?php
include('crud_class.php');
$obj=new Crud("localhost","root","","apotik");
$obj->profesi_krw();
?>
<table class="table table-bordered" border="1">
    <thead>
        <tr>
            <th>Id Profesi Karyawan</th>
            <th>Id Karyawan</th>
            <th>Nama</th>
            <th>Profesi</th>
        </tr>
    </thead>
<?php
foreach($obj-> data as $val){
extract($val);
?>
<tbody>
    <tr>
        <td><?php echo $idProfesikrw; ?></td>
        <td><?php echo $idKaryawan; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $profesi; ?></td>
         </tr>
</tbody>
<?php
}
?>
</table>