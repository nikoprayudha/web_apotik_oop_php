<!DOCTYPE HTML>
<?php 
include('cek_admin.php');
?>
<?php 
 include('crud_class.php');
  $obj=new Crud("localhost","root","","apotik");
 if(isset($_REQUEST['submit'])){

    extract($_REQUEST);
    $obj->update_obat($obatid,$tipeobatid,$kategoriobatid,$nama,$tglexp,$hargabeli,$hargajual,$stok);
    }

if(isset($_REQUEST['idObat'])){
    $idObat=$_REQUEST['idObat'];
    $result=$obj->mysqli->query("SELECT * from obat where idObat='$idObat'");
    $rows=$result->fetch_assoc();
    extract($rows);
}
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
                    <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>
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
                                <a href="home_admin.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Menu</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-laptop nav_icon"></i>Karyawan<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="karyawan.php">Karyawan</a>
                                    </li>
                                    <li>
                                        <a href="profesi_krw.php">Profesi Karyawan</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-laptop nav_icon"></i>Supplier<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="supplier.php">Supplier</a>
                                    </li>
                                    <li>
                                        <a href="pemesanan.php">Pemesanan</a>
                                    </li>
                                    <li>
                                        <a href="pemesanan_details.php">Pemesanan Details</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-laptop nav_icon"></i>Pelanggan<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="pelanggan_admin.php">Pelanggan</a>
                                    </li>
                                    <li>
                                        <a href="penjualan_admin.php">Penjualan</a>
                                    </li>
                                    <li>
                                        <a href="penjualan_details_admin.php">Penjualan Details</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            
                            <li>
                                <a href="#"><i class="fa fa-laptop nav_icon"></i>Obat<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="obat.php">Obat</a>
                                    </li>
                                    <li>
                                        <a href="tipe_obat.php">Tipe Obat</a>
                                    </li>
                                    <li>
                                        <a href="kategori_obat.php">Kategori Obat</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
            </ul>
            </div>  <!-- /.sidebar-collapse -->
            </div><!-- /.navbar-static-side -->
                            
</nav>
<div id="page-wrapper">
<div class="graphs">
    <div class="bs-example4" data-example-id="simple-responsive-table">
        <h3>Forms Update Obat</h3>
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <!-- form action -->
                <form class="form-horizontal" action="update_obat.php">
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Id Obat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" placeholder="Id Obat" name="obatid"
                            value="<?php echo $idObat;?>" readonly >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="selector1" class="col-sm-2 control-label">Id Tipe Obat</label>
                       <div class="col-sm-8">
                        <select class="form-control1" name="tipeobatid" required>
                                <option><?php echo $idTipeobat;?></option>

                                <?php
                                $obj=new mysqli("localhost","root","","apotik");
                                $queryusers = "SELECT * FROM tipeobat ";
                                $obj = mysqli_query($obj, $queryusers);
                                while ( $d=mysqli_fetch_assoc($obj)) {
                                echo "<option>".$d['idTipeobat']."</option>";
                                }
                                ?>
                        </select>
                        </div>
                    </div>

                      <div class="form-group">
                        <label for="selector1" class="col-sm-2 control-label">Id Kategori Obat</label>
                       <div class="col-sm-8">
                        <select class="form-control1" name="kategoriobatid" >
                                <option><?php echo $idKategoriobat;?></option>

                                <?php
                                $obj=new mysqli("localhost","root","","apotik");
                                $queryusers = "SELECT * FROM kategoriobat ";
                                $obj = mysqli_query($obj, $queryusers);
                                while ( $d=mysqli_fetch_assoc($obj)) {
                                echo "<option>".$d['idKategoriobat']."</option>";
                                }
                                ?>
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Nama Obat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1"  placeholder="Nama Obat" name="nama"
                            value="<?php echo $nama;?>">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Tanggal Expired</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control1"  name="tglexp"
                            value="<?php echo $tglExp;?>">
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Harga Beli</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1"  placeholder="Harga Beli" name="hargabeli"
                            value="<?php echo $hargaBeli;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Harga Jual</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1"  placeholder="Harga Jual" name="hargajual"
                            value="<?php echo $hargaJual;?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Stok</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1"  placeholder="Stok" name="stok"
                            value="<?php echo $stok;?>">
                        </div>
                    </div>

                  <div class="form-group" style="margin-left:170px;">
                        <button type="submit" class="btn btn-sm btn-info" name="submit" 
                        onClick="return confirm('Apakah anda yakin ingin menyimpan?');">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                  </div>
              </form>
                             </div> <!-- /#bs example -->
                         </div> <!-- /#Graps -->
                    </div> <!-- /#page-wrapper -->
                </div> <!-- /#wrapper -->
<div class="copy">
<p>Copyright &copy; 2016 Modern. All Rights Reserved | Niko Ary Prayudha</p>
</div>
</body>
</html>