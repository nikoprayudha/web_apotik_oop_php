<!DOCTYPE HTML>
<?php 
include('cek_kasir.php');
?>
<?php 
 include('crud_class.php');
 if(isset($_REQUEST['submit'])){
    $obj=new Crud("localhost","root","","apotik");
    extract($_REQUEST);
    $obj->tambah_penjualandetails($penjualandetailsid,$penjualanid,$obatid,$jumlah,$hargajual,$grandtotal,$bayar,$kembalian);
   
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
                            
                         
            </ul>
            </div>  <!-- /.sidebar-collapse -->
            </div><!-- /.navbar-static-side -->
                            
</nav>
<div id="page-wrapper">
<div class="graphs">
    <div class="bs-example4" data-example-id="simple-responsive-table">
        <h3>Forms Tambah Penjualan Details</h3>
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <!-- form action -->
                <form class="form-horizontal" action="tambah_penjualandetails.php">
                    
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Id Penjualan Details</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1" placeholder="Id Penjualan Details" 
                            name="penjualandetailsid" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="selector1" class="col-sm-2 control-label">Id Penjualan</label>
                       <div class="col-sm-8">
                        
                        <select class="form-control1" name="penjualanid" required>
                                <option value ="">---PILIH ID Penjualan ---</option>

                                <?php
                                $obj=new mysqli("localhost","root","","apotik");
                                $queryusers = "SELECT * FROM penjualan ";
                                $obj = mysqli_query($obj, $queryusers);
                                while ( $d=mysqli_fetch_assoc($obj)) {
                                echo "<option>".$d['idPenjualan']."</option>";
                                }
                                ?>
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="selector1" class="col-sm-2 control-label">Id Obat</label>
                       <div class="col-sm-8">
                        
                        <select class="form-control1" name="obatid" required>
                                <option value ="">---PILIH ID Obat ---</option>

                                <?php
                                $obj=new mysqli("localhost","root","","apotik");
                                $queryusers = "SELECT * FROM obat ";
                                $obj = mysqli_query($obj, $queryusers);
                                while ( $d=mysqli_fetch_assoc($obj)) {
                                echo "<option>".$d['idObat']."</option>";
                                }
                                ?>
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Jumlah</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1"  placeholder="Jumlah" name="jumlah" id="jumlah" 
                            onkeyup="kali();" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Harga Jualn</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1"  placeholder="Harga Jual" name="hargajual" id="hargajual" onkeyup="kali();" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Grand Total</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1"  placeholder="Grand Total" name="grandtotal" id="grandtotal" onkeyup="kurang()" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Bayar</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1"  placeholder="Bayar" name="bayar"  id="bayar" onkeyup="kurang()" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Kembalian</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control1"  placeholder="Kembalian" name="kembalian" id="kembalian" required>
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
<script>
function kali() {
      var txtFirstNumberValue = document.getElementById('jumlah').value;
      var txtSecondNumberValue = document.getElementById('hargajual').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('grandtotal').value = result;
      }
}
function kurang() {
      var txtFirstNumberValue = document.getElementById('bayar').value;
      var txtSecondNumberValue = document.getElementById('grandtotal').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('kembalian').value = result;
      }
}
</script>
</body>
</html>