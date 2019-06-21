<?php
	include('part/header.php');
?>

<!-- content -->
<div class="container-fluid col-md-12 bg-success">
	<div class="jumbotron col-md-12 bg-success">
		<div class="text-center">
			<img src="../assets/gambar/ISNU.png" class="rounded" alt="...">
		</div>
	</div>
</div>

<div class="container" style="margin-top: 80px">
	<div class="row">
		<div class="col-md-3" style="margin-top: 10px">
			<a href="" style="color: #000;text-decoration: none">
				<div class="card">
					<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
						<i class="fa fa-home"></i>
						<hr>
						HOME
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-3" style="margin-top: 10px">
			<a href="profil.php" style="color: #000;text-decoration: none">
				<div class="card">
					<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
						<i class="fa fa-users"></i>
						<hr>
						PROFIL
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-3" style="margin-top: 10px">
			<a href="anggota.php" style="color: #000;text-decoration: none">
				<div class="card">
					<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
						<i class="fa fa-list-ul"></i>
						<hr>
						DAFTAR ANGGOTA
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-3" style="margin-top: 10px">
			<a href="login/index.php" style="color: #000;text-decoration: none">
				<div class="card">
					<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
						<i class="fa fa-sign-in-alt"></i>
						<hr>
						LOGIN 
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 30px">
	<div class="row">
		<div class="col-8">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Isi Konten</h5>
					<p class="card-text"></p>
					<?php
						echo $_SESSION['level']; 
					?>
				</div>
			</div>
		</div>

		<div class="col-4">
			<div class="card">
				<div class="card-header">
					About ISNU
				</div>
				<div class="card-body" style="font-size: 20px;">
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<i class="fas fa-camera btn btn-primary">Instagram</i>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end content -->

<?php
	include('part/footer.php');
?>