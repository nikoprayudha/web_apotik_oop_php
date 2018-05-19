<?php

include('crud_class.php');
 $obj=new Crud("localhost","root","","apotik");
if(isset($_REQUEST['idPenjualandetails'])){
    $idPenjualandetails=$_REQUEST['idPenjualandetails'];
    $result=$obj->mysqli->query("SELECT c.idPenjualandetails, a.idPenjualan, b.idObat, b.nama, c.jumlah, c.hargaJual, 
		c.grandTotal, c.bayar, c.kembalian from penjualandetails as c inner join penjualan as a on a.idPenjualan=c.idPenjualan 
		inner join obat as b on b.idObat=c.idObat where idPenjualandetails='$idPenjualandetails'");
    $rows=$result->fetch_assoc();
    extract($rows);
}
?>

<html>
<head><title>Sistem Aplikasi Apotik Sumber Waras</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />

        <link href="css/lines.css" rel='stylesheet' type='text/css' />
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- jQuery -->
        <link href="css/custom.css" rel="stylesheet">

<body align="center" onload="window.print()">
	


    <div class="bs-example4" data-example-id="simple-responsive-table">
   <h1>Data Penjualan</h1> 
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <!-- form action -->
                <table align="center" height="50%" width="40%">

            <th>Id Penjualan Details</th>
            <td>:</td>
            <td><?php echo $idPenjualandetails; ?></td>
            <tr>
            <th>Id Penjualan</th>
            <td>:</td>
            <td><?php echo $idPenjualan; ?></td>
            <tr>
            <th>Id Obat</th>
            <td>:</td>
            <td><?php echo $idObat; ?></td>
            <tr>
            <th>Nama Obat</th>
            <td>:</td>
            <td><?php echo $nama; ?></td>
            <tr>
            <th>Jumlah</th>
            <td>:</td>
            <td><?php echo $jumlah; ?></td>
            <tr>
            <th>Harga Jual</th>
            <td>:</td>
            <td><?php echo $hargaJual; ?></td>
            <tr>
            <th>Grand Total</th> 
            <td>:</td>
            <td><?php echo $grandTotal; ?></td>
            <tr>
            <th>Bayar</th>
            <td>:</td>
            <td><?php echo $bayar; ?></td>
            <tr>
            <th>Kembalian</th>
            <td>:</td>
            <td><?php echo $kembalian; ?></td>
            <tr>
</table>
    <h3>Terima Kasih telah Berbelanja Di Apotik Sumber Waras</h3>
    <h5>Jl.Ir Soekarno No 65 , Kel Oro-Oro Ombo , Kota Batu</h5>
     <h5>--- Barang Yang Di Beli Tidak Dapat Di Tukarkan ----</h5>
                             </div> <!-- /#bs example -->
                         </div> <!-- /#Graps -->
                    </div> <!-- /#page-wrapper -->
                </div> <!-- /#wrapper -->
<body>

</html>

        
        
       
       
        
       