<!DOCTYPE HTML>
<?php 
include('cek_kasir.php');
?>
<html>
    <head>
        <title>Sistem Aplikasi Apotik Sumber Waras</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="css/lines.css" rel='stylesheet' type='text/css' />
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <link href="css/custom.css" rel="stylesheet">
        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation responsive</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Sistem Apotik Sumber Waras</a>
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-nav navbar-right">
                    
                    <!-- Profile Account -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/pic2.jpg"></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-header text-center">
                                <strong>Account</strong>
                            </li>
                            <li class="m_2"><a href="#"><i class="fa fa-bell-o"></i>Edit Account<span class="label label-info"></span></a></li>
                            <li class="dropdown-menu-header text-center">
                                <strong>Settings</strong>
                            </li>
                            <li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
                 <form class="navbar-form navbar-right">
                    
                    <b><script type='text/javascript'>
                    <!--
                    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                    var date = new Date();
                    var day = date.getDate();
                    var month = date.getMonth();
                    var thisDay = date.getDay(),
                    thisDay = myDays[thisDay];
                    var yy = date.getYear();
                    var year = (yy < 1000) ? yy + 1900 : yy;
                    document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                    //-->
                    <!--
                    function showTime() {
                    var a_p = "";
                    var today = new Date();
                    var curr_hour = today.getHours();
                    var curr_minute = today.getMinutes();
                    var curr_second = today.getSeconds();
                    if (curr_hour < 12) {
                    a_p = "AM";
                    } else {
                    a_p = "PM";
                    }
                    if (curr_hour == 0) {
                    curr_hour = 12;
                    }
                    if (curr_hour > 12) {
                    curr_hour = curr_hour - 12;
                    }
                    curr_hour = checkTime(curr_hour);
                    curr_minute = checkTime(curr_minute);
                    curr_second = checkTime(curr_second);
                    document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                    }
                    function checkTime(i) {
                    if (i < 10) {
                    i = "0" + i;
                    }
                    return i;
                    }
                    setInterval(showTime, 500);
                    //-->
                    </script></b> <b><div id="clock"></div></b>
                </form>
                
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                          
                            <li>
                                <a href="#"><i class="fa fa-laptop nav_icon"></i>Pelanggan<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="pelanggan.php">Pelanggan</a>
                                    </li>
                                    <li>
                                        <a href="penjualan.php">Penjualan</a>
                                    </li>
                                    <li>
                                        <a href="penjualan_details.php">Penjualan Details</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            
                         
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
        <div class="graphs">
            <div class="bs-example4" data-example-id="simple-responsive-table">
                <div class="table-responsive">
                    <h2>Tabel Pelanggan</h2>
                   
                    <br>
<?php
include('crud_class.php');
$obj=new Crud("localhost","root","","apotik");
$obj->pelanggan();
?>

<a href="tambah_pelanggan.php" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus-sign tag_01"></span>Tambah Data</a>
<a href="export_pelanggan.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-print tag_01"></span>Cetak</a>
<br><br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id Pelanggan</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Keluhan</th>
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
        <td><?php echo $idPelanggan; ?></td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $jenisKelamin; ?></td>
        <td><?php echo $alamat; ?></td>
        <td><?php echo $keluhan; ?></td>
        <td><?php echo $telepon; ?></td>
        <td>
        <a href="update_pelanggan.php?idPelanggan=<?php echo $idPelanggan;?>"><img src="images/pencil.gif"></a>&nbsp;
        <a href="delete_pelanggan.php?idPelanggan=<?php echo $idPelanggan;?>" 
            onClick="return confirm('Apakah anda yakin ingin menghapus?');"><img src="images/x.gif"></a>
        
        </td>
    </tr>
</tbody>
<?php
}
?>
</table>
                    <!-- <ul class="pagination pagination-sm">
                        <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul> -->
                    </div><!-- /.table-responsive -->
                    </div> <!-- /#Graps -->

                    </div> <!-- /#page-wrapper -->
                       <div class="copy">
                        <p>Copyright &copy; 2016 Modern. All Rights Reserved | Niko Ary Prayudha</p>
                    </div>
                    </div> <!-- /#wrapper -->
                </body>
            </html>