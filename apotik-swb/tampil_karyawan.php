 <h2>Tabel Karyawan</h2>
                
<?php
include('crud_class.php');
$obj=new Crud("localhost","root","","apotik");
$obj->karyawan();
?>
<table class="table table-bordered" border="1">
    <thead>
        <tr>
            <th>Id Karyawan</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
    </thead>
<?php
foreach($obj-> data as $val){
extract($val);
?>
<tbody>
    <tr>
        <td><?php echo $idKaryawan; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $jenisKelamin; ?></td>
        <td><?php echo $tmpLahir; ?></td>
        <td><?php echo $tglLahir; ?></td>
        <td><?php echo $alamat; ?></td>
        <td><?php echo $telepon; ?></td>
        <td><?php echo $username; ?></td>
        <td><?php echo $password; ?></td>
</tr>
</tbody>
<?php
}
?>
</table>