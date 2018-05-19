<h2>Tabel Obat</h2>
<?php
include('crud_class.php');
$obj=new Crud("localhost","root","","apotik");
$obj->obat();
?>
<table class="table table-bordered" border="1">
    <thead>
        <tr>
            <th>Id Obat</th>
            <th>Nama</th>
            <th>Tipe Obat</th>
            <th>Kategori Obat</th>
            <th>Tanggal Expired</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
        </tr>
    </thead>
<?php
foreach($obj-> data as $val){
extract($val);
?>
<tbody>
    <tr>
        <td><?php echo $idObat; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $tipe; ?></td>
        <td><?php echo $kategori; ?></td>
        <td><?php echo $tglExp; ?></td>
        <td><?php echo $hargaBeli; ?></td>
        <td><?php echo $hargaJual; ?></td>
        <td><?php echo $stok; ?></td>
        </tbody>
<?php
}
?>
</table>