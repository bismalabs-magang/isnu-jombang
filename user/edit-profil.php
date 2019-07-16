<?php
	session_start();
	include '../config/koneksi.php';
	if(empty($_SESSION['username'])){
	    header("location:../login/login.php");
	}
	include 'public_part/header.php';
?>

<br>
    <div class="site-section bg-light">
      	<div class="container-fluid">
      		<div class="row">
      			<div class="col-md-3">
		            <div class="mb-5">
		              <div class="d-block d-md-flex listing">
		                <div class="lh-content">
		                  <!-- sidebar -->

							<h5 class="card-title text-center"><i class="fa fa-list-ul"></i> MAIN MENU</h5>
							<hr>
							
							<ul class="list-group">
								<li class="list btn btn-success text-left">
									<a href="../index.php" class="text-white">
										<i class="fa fa-home"></i>
										HOME
									</a>
								</li><br>
								<li class="list btn btn-success text-left">
									<a href="profil.php" class="text-white">
										<i class="icon-address-card"></i>
										PROFIL
									</a>
								</li><br>
								<li class="list btn btn-success text-left">
									<a href="setting.php" class="text-white">
										<i class="icon-gear"></i>
										SETTING
									</a>
								</li><br>
								<li class="list btn btn-success text-left">
									<a href="../logout.php" class="text-white">
										<i class="icon-sign-out"></i>
										LOGOUT
									</a>
								</li><br>
							</ul>
		                </div>
		              </div>
		            </div>
		         </div>
		         <div class="col-md-9">
		         		<div class="mb-5">
			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title text-center"><i class="fa fa-list-ul"></i> PROFIL ANGGOTA</h5>
								<hr><br>
								<?php
			                    	include ('../config/koneksi.php');
									$username = $_SESSION['username'];
									$qTampil = mysqli_query($connect, "SELECT * FROM anggota WHERE username='$username'");
									foreach($qTampil as $row){
								?>
				                <form method="post" enctype="multipart/form-data">
					                <div class="row align-items-center">
					                	<div class="col-lg-12">
						                    <input type="hidden" name="id" class="form-control rounded" placeholder="" required value="<?php echo $row['id_anggota']; ?>">
						                </div>

					                  	<div class="col-lg-12">
					                  		<label>Nama :</label>
						                    <input type="text" name="nama" class="form-control rounded" placeholder="Masukkan Nama" required value="<?php echo $row['nama']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>No. KTP :</label>
						                    <input type="text" name="no_ktp" class="form-control rounded" placeholder="Masukkan No. KTP" required value="<?php echo $row['no_ktp']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Jenis Kelamin :</label>
						                    <input type="text" name="jenis_kelamin" class="form-control rounded" placeholder="Masukkan Jenis Kelamin" required value="<?php echo $row['jenis_kelamin']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Tempat Lahir :</label>
						                    <input type="text" name="tempat_lahir" class="form-control rounded" placeholder="Masukkan Tempat Lahir" required value="<?php echo $row['tempat_lahir']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Tgl. Lahir :</label>
						                    <input type="date" name="tgl_lahir" class="form-control rounded" placeholder="Masukkan Tgl. Lahir" required value="<?php echo $row['tgl_lahir']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Dusun / Desa :</label>
						                    <input type="text" name="dusun_desa" class="form-control rounded" placeholder="Masukkan Dusun / Desa" required value="<?php echo $row['dusun_desa']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Kecamatan :</label>
						                    <input type="text" name="kecamatan" class="form-control rounded" placeholder="Masukkan Kecamatan" required value="<?php echo $row['kecamatan']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Kota :</label>
						                    <input type="text" name="kota" class="form-control rounded" placeholder="Masukkan Kota" required value="<?php echo $row['kota']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>No. Telepon :</label>
						                    <input type="text" name="no_telepon" class="form-control rounded" placeholder="Masukkan No. Telepon" required value="<?php echo $row['no_telepon']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Jenjang :</label>
						                    <input type="text" name="jenjang" class="form-control rounded" placeholder="Masukkan Jenjang" required value="<?php echo $row['jenjang']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Jurusan :</label>
						                    <input type="text" name="jurusan" class="form-control rounded" placeholder="Masukkan Jurusan" required value="<?php echo $row['jurusan']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>PT / Universitas :</label>
						                    <input type="text" name="pt_univ" class="form-control rounded" placeholder="Masukkan PT / Universitas" required value="<?php echo $row['pt_univ']; ?>">
						                </div>

					                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-2">
					                  	<br>
					                    <input type="submit" name="submit_profil" class="btn btn-success btn-block rounded" value="Simpan">
					                  </div>
					                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-2">
					                  	<br>
					                    <input type="reset" class="btn btn-warning btn-block rounded" value="Reset">
					                  </div>
					                  
					                </div>
					            </form>
						            <?php }?>
			                </div>
			              </div>
		            	</div>
		         </div>				
			</div>
			<br>
			<div class="row">
				
			</div>
		</div>
	</div>

		<script type="text/javascript">
			function berhasil() {
				swal({
	            	title: "BERHASIL",
	                text: "Profil Telah diubah",
	                icon: "success",
	                buttons: [false, "OK"],
	            }).then(function() {
	            	window.location.href="profil.php";
	            });
	        }
		</script>
<?php 
	include 'public_part/footer.php';
if (isset($_POST['submit_profil'])) {
	# code...


	$id 			= $_POST['id'];
	$nama 			= $_POST['nama'];
	$no_ktp 		= $_POST['no_ktp'];
	$jenis_kelamin 	= $_POST['jenis_kelamin'];
	$tempat_lahir 	= $_POST['tempat_lahir'];
	$tgl_lahir 		= $_POST['tgl_lahir'];
	$dusun_desa 	= $_POST['dusun_desa'];
	$kecamatan 		= $_POST['kecamatan'];
	$kota 			= $_POST['kota'];
	$no_telepon 	= $_POST['no_telepon'];
	$jenjang 		= $_POST['jenjang'];
	$jurusan 		= $_POST['jurusan'];
	$pt_univ 		= $_POST['pt_univ'];


	$qEdit 	= "UPDATE anggota SET nama='$nama', no_ktp='$no_ktp', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', dusun_desa='$dusun_desa', kecamatan='$kecamatan', kota='$kota', no_telepon='$no_telepon', jenjang='$jenjang', jurusan='$jurusan', pt_univ='$pt_univ' WHERE id_anggota='$id'";
	$edit 	= mysqli_query($connect, $qEdit);
		
	if($edit){
		echo "<script>berhasil();</script>";
	}
}
?>