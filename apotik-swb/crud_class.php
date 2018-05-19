<?php
	class Crud
	{
		public $mysqli;
		public $data;
		public function __construct($host,$username,$password,$db_name){
			$this->mysqli = new mysqli($host,$username,$password,$db_name);
			if (mysqli_connect_errno()) {
				echo "Error: Could not connect to database";
				exit;
			}
		}
		public function __destruct()
		{
			$this->mysqli->close();
		}

		/*KARYAWAN*/
		public function karyawan(){
		$query = "SELECT * FROM karyawan";
		$result = $this->mysqli->query($query);
		$num_result=$result->num_rows;
		if($num_result>0){
			while($rows=$result->fetch_assoc())
			{
				$this->data[]=$rows;
			}
			return $this->data;
			}
		} /*END READ KARYAWAN*/
           

		public function tambah_karyawan($nokaryawan,$nama,$jk,$tmplahir,$tgllahir,$alamat,$telepon,$user,$pass,$profesi){
		$query= "INSERT INTO karyawan set idKaryawan='$nokaryawan', nama='$nama', jenisKelamin='$jk', tmpLahir='$tmplahir', 
		tglLahir='$tgllahir', alamat='$alamat', telepon='$telepon', username='$user', password='$pass', profesi='$profesi' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Id Sama Data Tidak Dapat Di Inputkan");
		if($result){
			header('location:karyawan.php');
			}
		} /*END TAMBAH_KARYAWAN*/
		
		public function update_karyawan($nokaryawan,$nama,$jk,$tmplahir,$tgllahir,$alamat,$telepon,$user,$pass,$profesi){
		$query= "UPDATE karyawan set nama='$nama', jenisKelamin='$jk', tmpLahir='$tmplahir', 
		tglLahir='$tgllahir', alamat='$alamat', telepon='$telepon', username='$user', password='$pass', profesi='$profesi'
		where idKaryawan='$nokaryawan' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Update gagal mohon  data diisi lengkap ");
		if($result){
			header('location:karyawan.php');
			}
		}/*END UPDATE*/

		public function delete_karyawan($nokaryawan){
		$query="DELETE from karyawan where idKaryawan='$nokaryawan' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."delete gagal");
		if($result){
			header('location:karyawan.php');
			}
		}/*END DELETE*/
		/*END KARYAWAN*/
/*-----------------------------------------------------*/
		/*PROFESI KRW*/
		public function profesi_krw(){
		$query = "SELECT idProfesikrw, b.idKaryawan, b.nama, a.profesi from profesikrw as a INNER JOIN karyawan as b 
		on b.idKaryawan=a.idKaryawan order by idProfesikrw";
		$result = $this->mysqli->query($query);
		$num_result=$result->num_rows;
		if($num_result>0){
			while($rows=$result->fetch_assoc())
			{
				$this->data[]=$rows;
			}
			return $this->data;
			}
		}

		public function tambah_profesikrw($profesiid,$karyawanid,$profesi){
		$query= "INSERT INTO profesikrw set idProfesikrw='$profesiid', idKaryawan='$karyawanid', profesi='$profesi'";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Id Sama Data Tidak Dapat Di Inputkan");
		if($result){
			header('location:profesi_krw.php');
			}
		} /*END profesi krw*/

		public function update_profesikrw($profesiid,$karyawanid,$profesi){
		$query= "UPDATE profesikrw set idKaryawan='$karyawanid', profesi='$profesi' where idProfesikrw='$profesiid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Update gagal mohon  data diisi lengkap ");
		if($result){
			header('location:profesi_krw.php');
			}
		}/*END UPDATE*/

		public function delete_profesikrw($profesiid){
		$query="DELETE from profesikrw where idProfesikrw='$profesiid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."delete gagal");
		if($result){
			header('location:profesi_krw.php');
			}
		}/*END DELETE*/
		/*END PROFESI KARYAWAN*/
/*-------------------------------------------------------------*/
		/*supplier*/
		public function supplier(){
		$query = "SELECT * FROM supplier";
		$result = $this->mysqli->query($query);
		$num_result=$result->num_rows;
		if($num_result>0){
			while($rows=$result->fetch_assoc())
			{
				$this->data[]=$rows;
			}
			return $this->data;
			}
		} /*END READ supplier*/

		public function tambah_supplier($supplierid,$nama,$jk,$perusahaan,$alamat,$telepon){
		$query= "INSERT INTO supplier set idSupplier='$supplierid', nama='$nama', jenisKelamin='$jk', perusahaan='$perusahaan', 
		alamat='$alamat', telepon='$telepon' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Id Sama Data Tidak Dapat Di Inputkan");
		if($result){
			header('location:supplier.php');
			}
		} /*END tambah supplier*/

		public function update_supplier($supplierid,$nama,$jk,$perusahaan,$alamat,$telepon){
		$query= "UPDATE supplier set nama='$nama', jenisKelamin='$jk', perusahaan='$perusahaan', 
		alamat='$alamat', telepon='$telepon' where idSupplier='$supplierid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Update gagal mohon  data diisi lengkap ");
		if($result){
			header('location:supplier.php');
			}
		}/*END UPDATE*/

		public function delete_supplier($supplierid){
		$query="DELETE from supplier where idSupplier='$supplierid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."delete gagal");
		if($result){
			header('location:supplier.php');
			}
		}/*END DELETE*/
		/*END supplier*/
/*--------------------------------------------------*/

		/*tipe obat*/
		public function tipe_obat(){
		$query = "SELECT * FROM tipeobat";
		$result = $this->mysqli->query($query);
		$num_result=$result->num_rows;
		if($num_result>0){
			while($rows=$result->fetch_assoc())
			{
				$this->data[]=$rows;
			}
			return $this->data;
			}
		} /*END READ tipeobat*/

		public function tambah_tipeobat($tipeobatid,$tipe){
		$query= "INSERT INTO tipeobat set idTipeobat='$tipeobatid', tipe='$tipe' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Id Sama Data Tidak Dapat Di Inputkan");
		if($result){
			header('location:tipe_obat.php');
			}
		} /*END tambah tipeobat*/

		public function update_tipeobat($tipeobatid,$tipe){
		$query= "UPDATE tipeobat set tipe='$tipe' where idTipeobat='$tipeobatid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Update gagal mohon  data diisi lengkap ");
		if($result){
			header('location:tipe_obat.php');
			}
		}/*END UPDATE*/

		public function delete_tipeobat($tipeobatid){
		$query="DELETE from tipeobat where idTipeobat='$tipeobatid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."delete gagal");
		if($result){
			header('location:tipe_obat.php');
			}
		}/*END DELETE*/
		/*END tipeobat*/
/*--------------------------------------------------*/
		
		/*kategori obat*/
		public function kategori_obat(){
		$query = "SELECT * FROM kategoriobat";
		$result = $this->mysqli->query($query);
		$num_result=$result->num_rows;
		if($num_result>0){
			while($rows=$result->fetch_assoc())
			{
				$this->data[]=$rows;
			}
			return $this->data;
			}
		} /*END READ kategori obat*/

		public function tambah_kategoriobat($kategoriid,$kategori){
		$query= "INSERT INTO kategoriobat set idKategoriobat='$kategoriid', kategori='$kategori' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Id Sama Data Tidak Dapat Di Inputkan");
		if($result){
			header('location:kategori_obat.php');
			}
		} /*END tambah kategori obat*/

		public function update_kategoriobat($kategoriid,$kategori){
		$query= "UPDATE kategoriobat set kategori='$kategori' where idKategoriobat='$kategoriid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Update gagal mohon  data diisi lengkap ");
		if($result){
			header('location:kategori_obat.php');
			}
		}/*END UPDATE kategori obat*/

		public function delete_kategoriobat($kategoriid){
		$query="DELETE from kategoriobat where idKategoriobat='$kategoriid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."delete gagal");
		if($result){
			header('location:kategori_obat.php');
			}
		}/*END DELETE kategori obat*/
		/*END kategori obat*/
/*--------------------------------------------------*/
		/*Obat*/
		public function obat(){
		$query = "SELECT idObat, a.nama, b.tipe, c.kategori , tglExp,hargaBeli,hargaJual,stok from obat as a 
		INNER JOIN tipeobat as b on b.idTipeobat=a.idTipeobat INNER JOIN kategoriobat as c 
		on c.idKategoriobat = a.idKategoriobat order by idObat";
		$result = $this->mysqli->query($query);
		$num_result=$result->num_rows;
		if($num_result>0){
			while($rows=$result->fetch_assoc())
			{
				$this->data[]=$rows;
			}
			return $this->data;
			}
		} /*END READ obat*/

		public function tambah_obat($obatid,$tipeobatid,$kategoriobatid,$nama,$tglexp,$hargabeli,$hargajual,$stok){
		$query="INSERT INTO obat set idObat='$obatid', idTipeobat='$tipeobatid', idKategoriobat='$kategoriobatid',
		nama='$nama', tglExp='$tglexp', hargaBeli='$hargabeli', hargaJual='$hargajual', stok='$stok' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Id Sama Data Tidak Dapat Di Inputkan");
		if($result){
			header('location:obat.php');
			}
		} /*END tambah obat*/


		public function update_obat($obatid,$tipeobatid,$kategoriobatid,$nama,$tglexp,$hargabeli,$hargajual,$stok){
		$query="UPDATE obat set idTipeobat='$tipeobatid', idKategoriobat='$kategoriobatid', nama='$nama', tglExp='$tglexp',
		hargaBeli='$hargabeli', hargaJual='$hargajual', stok='$stok' where idObat='$obatid'";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Update gagal mohon  data diisi lengkap ");
		if($result){
			header('location:obat.php');
			}
		} /*END update obat*/

		public function delete_obat($obatid){
		$query="DELETE from obat where idObat='$obatid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."delete gagal");
		if($result){
			header('location:obat.php');
			}
		}/*END DELETE  obat*/

/*--------------------------------------------------*/

		/*pemesanan*/
		public function pemesanan(){
		$query = "SELECT idPemesanan, b.idSupplier, b.nama, c.idProfesikrw, c.idKaryawan, c.profesi , a.tglPemesanan 
		from Pemesanan as a  INNER JOIN Supplier as b on b.idSupplier=a.idSupplier INNER JOIN ProfesiKrw as c 
		on c.idProfesikrw=a.idProfesikrw order by idPemesanan";
		$result = $this->mysqli->query($query);
		$num_result=$result->num_rows;
		if($num_result>0){
			while($rows=$result->fetch_assoc())
			{
				$this->data[]=$rows;
			}
			return $this->data;
			}
		}/*end read*/	

		public function tambah_pemesanan($pemesananid,$supplierid,$profesiid,$tglpemesanan){
		$query="INSERT INTO pemesanan set idPemesanan='$pemesananid', idSupplier='$supplierid', idProfesikrw='$profesiid',
		tglPemesanan='$tglpemesanan'";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Id Sama Data Tidak Dapat Di Inputkan ");
		if($result){
			header('location:pemesanan.php');
			}
		} /*END tambah pemesanan*/


		public function update_pemesanan($pemesananid,$supplierid,$profesiid,$tglpemesanan){
		$query="UPDATE pemesanan set idSupplier='$supplierid', idProfesikrw='$profesiid', tglPemesanan='$tglpemesanan' 
		where idPemesanan='$pemesananid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Update gagal mohon  data diisi lengkap ");
		if($result){
			header('location:pemesanan.php');
			}
		} /*END update pemesanan*/

		public function delete_pemesanan($pemesananid){
		$query="DELETE from pemesanan where idPemesanan='$pemesananid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."delete gagal");
		if($result){
			header('location:pemesanan.php');
			}
		}/*END DELETE  pemesanan*/

/*--------------------------------------------------*/
		
		/*pemesanan details*/
		public function pemesanan_details(){
		$query = "SELECT c.idPemesanandetails, a.idPemesanan, b.idObat, b.nama, c.jumlah, c.hargaBeli, c.grandTotal, c.bayar, c.kembalian from 
		pemesanandetails as c inner join pemesanan as a on a.idPemesanan=c.idPemesanan 
		inner join obat as b on b.idObat=c.idObat ";
		$result = $this->mysqli->query($query);
		$num_result=$result->num_rows;
		if($num_result>0){
			while($rows=$result->fetch_assoc())
			{
				$this->data[]=$rows;
			}
			return $this->data;
			}
		}/*end read*/	

		public function tambah_pemesanandetails($pemesanandetailsid,$pemesananid,$obatid,$jumlah,$hargabeli,$grandtotal,$bayar,$kembalian){
		$query="INSERT INTO pemesanandetails set idPemesanandetails='$pemesanandetailsid', idPemesanan='$pemesananid', 
		idObat='$obatid', jumlah='$jumlah', hargaBeli='$hargabeli', grandTotal='$grandtotal', bayar='$bayar', kembalian='$kembalian' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Id Sama Data Tidak Dapat Di Inputkan ");
		if($result){
			header('location:pemesanan_details.php');
			}
		}

		public function update_pemesanandetails($pemesanandetailsid,$pemesananid,$obatid,$jumlah,$hargabeli,$grandtotal,$bayar,$kembalian){
		$query="UPDATE pemesanandetails set idPemesanan='$pemesananid', idObat='$obatid', jumlah='$jumlah', hargaBeli='$hargabeli', grandTotal='$grandtotal',
		bayar='$bayar', kembalian='$kembalian' where idPemesanandetails='$pemesanandetailsid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Update gagal mohon  data diisi lengkap ");
		if($result){
			header('location:pemesanan_details.php');
			}
		} /*END update pemesanan*/

		public function delete_pemesanandetails($pemesanandetailsid){
		$query="DELETE from pemesanandetails where idPemesanandetails='$pemesanandetailsid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."delete gagal");
		if($result){
			header('location:pemesanan_details.php');
			}
		}/*END DELETE  pemesanan*/

/*--------------------------------------------------*/		

			/*pelanggan*/
		public function pelanggan(){
		$query = "SELECT * from pelanggan";
		$result = $this->mysqli->query($query);
		$num_result=$result->num_rows;
		if($num_result>0){
			while($rows=$result->fetch_assoc())
			{
				$this->data[]=$rows;
			}
			return $this->data;
			}
		}/*end read*/	


		public function tambah_pelanggan($pelangganid,$nama,$jk,$alamat,$keluhan,$telepon){
		$query="INSERT INTO pelanggan set idPelanggan='$pelangganid', nama='$nama',jenisKelamin='$jk', 
		alamat='$alamat', keluhan='$keluhan', telepon='$telepon' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Id Sama Data Tidak Dapat Di Inputkan ");
		if($result){
			header('location:pelanggan.php');
			}
		} /*end tambah pelanggan*/

		public function update_pelanggan($pelangganid,$nama,$jk,$alamat,$keluhan,$telepon){
		$query="UPDATE pelanggan set nama='$nama',jenisKelamin='$jk', 
		alamat='$alamat', keluhan='$keluhan', telepon='$telepon' where idPelanggan='$pelangganid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Update gagal mohon  data diisi lengkap ");
		if($result){
			header('location:pelanggan.php');
			}
		} /*END update pelangggan*/


		public function delete_pelanggan($pelangganid){
		$query="DELETE from pelanggan where idPelanggan='$pelangganid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."delete gagal");
		if($result){
			header('location:pelanggan.php');
			}
		}/*END DELETE  pelanggan*/


/*--------------------------------------------------*/		

		public function penjualan(){
		$query = "SELECT idPenjualan, b.idPelanggan, b.nama, c.idProfesikrw, c.idKaryawan, c.profesi , a.tglPenjualan 
		from penjualan as a  INNER JOIN pelanggan as b on b.idPelanggan=a.idPelanggan INNER JOIN profesikrw as c 
		on c.idProfesikrw=a.idProfesikrw order by idPenjualan";
		$result = $this->mysqli->query($query);
		$num_result=$result->num_rows;
		if($num_result>0){
			while($rows=$result->fetch_assoc())
			{
				$this->data[]=$rows;
			}
			return $this->data;
			}
		}/*end read*/	

		public function tambah_penjualan($penjualanid,$pelangganid,$profesiid,$tglpenjualan){
		$query="INSERT INTO penjualan set idPenjualan='$penjualanid', idPelanggan='$pelangganid', idProfesikrw='$profesiid',
		tglPenjualan='$tglpenjualan' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Id Sama Data Tidak Dapat Di Inputkan ");
		if($result){
			header('location:penjualan.php');
			}
		} /*END tambah penjualan*/


		public function delete_penjualan($penjualanid){
		$query="DELETE from penjualan where idPenjualan='$penjualanid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."delete gagal");
		if($result){
			header('location:penjualan.php');
			}
		}/*END DELETE  penjualan*/

/*--------------------------------------------------*/		

		/*penjualan details*/
		public function penjualan_details(){
		$query = "SELECT c.idPenjualandetails, a.idPenjualan, b.idObat, b.nama, c.jumlah, c.hargaJual, 
		c.grandTotal, c.bayar, c.kembalian from penjualandetails as c inner join penjualan as a on a.idPenjualan=c.idPenjualan 
		inner join obat as b on b.idObat=c.idObat ";
		$result = $this->mysqli->query($query);
		$num_result=$result->num_rows;
		if($num_result>0){
			while($rows=$result->fetch_assoc())
			{
				$this->data[]=$rows;
			}
			return $this->data;
			}
		}/*end read*/	

		public function tambah_penjualandetails($penjualandetailsid,$penjualanid,$obatid,$jumlah,$hargajual,$grandtotal,$bayar,$kembalian){
		$query="INSERT INTO penjualandetails set idPenjualandetails='$penjualandetailsid', idPenjualan='$penjualanid', 
		idObat='$obatid', jumlah='$jumlah', hargaJual='$hargajual', grandTotal='$grandtotal', bayar='$bayar', kembalian='$kembalian' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."Id Sama Data Tidak Dapat Di Inputkan ");
		if($result){
			header('location:penjualan_details.php');
			}
		}/*end tambah*/

		public function delete_penjualandetails($penjualandetailsid){
		$query="DELETE from penjualandetails where idPenjualandetails='$penjualandetailsid' ";
		$result= $this->mysqli->query($query) or die (mysqli_connect_errno()."delete gagal");
		if($result){
			header('location:penjualan_details.php');
			}
		}/*END DELETE  penjualan details*/




	} /*END CRUD CLASS*/
?>