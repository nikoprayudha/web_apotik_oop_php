<?php
include('crud_class.php');
$obj=new Crud("localhost","root","","apotik");
$obj->penjualan_details();
?>
<h2>Tabel Penjualan Details</h2>
<table class="table table-bordered" border="1">
    <thead>
        <tr>

            <th>Id Penjualan Details</th>
            <th>Id Penjualan</th>
            <th>Id Obat</th>
            <th>Nama Obat</th>
            <th>Jumlah</th>
            <th>Harga Jual</th>
            <th>Grand Total</th>
            <th>Bayar</th>
            <th>Kembalian</th>
          
        </tr>
    </thead>
<?php
foreach($obj-> data as $val){
extract($val);
?>
<tbody>
    <tr>
        <td><?php echo $idPenjualandetails; ?></td>
        <td><?php echo $idPenjualan; ?></td>
        <td><?php echo $idObat; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $jumlah; ?></td>
        <td><?php echo $hargaJual; ?></td>
        <td><?php echo $grandTotal; ?></td>
        <td><?php echo $bayar; ?></td>
        <td><?php echo $kembalian; ?></td>
        <td>
       
    </tr>
</tbody>
<?php
}
?>
</table>