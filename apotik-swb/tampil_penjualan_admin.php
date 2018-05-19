                    <h2>Tabel Penjualan</h2>
                    
                    <br>
<?php
include('crud_class.php');
$obj=new Crud("localhost","root","","apotik");
$obj->penjualan();
?>
<table class="table table-bordered" border="1">
    <thead>
        <tr>
            <th>Id Penjualan</th>
            <th>Id Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Id Profesi Karyawan</th>
            <th>Id Karyawan</th>
            <th>Profesi</th>
            <th>Tanggal Penjualan</th>
         
        </tr>
    </thead>
<?php
foreach($obj-> data as $val){
extract($val);
?>
<tbody>
    <tr>
        <td><?php echo $idPenjualan; ?></td>
        <td><?php echo $idPelanggan; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $idProfesikrw; ?></td>
        <td><?php echo $idKaryawan; ?></td>
        <td><?php echo $profesi; ?></td>
        <td><?php echo $tglPenjualan; ?></td>
    
    </tr>
</tbody>
<?php
}
?>
</table>