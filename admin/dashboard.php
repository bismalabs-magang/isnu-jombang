<?php
  	include ('../config/koneksi.php');
  	include ('part/header.php');
  	include ('part/navbar.php');

  	session_start();
    	if(empty($_SESSION['username'])){
        	header("location:../login/index.php");
	    // }else if($_SESSION['level'] = "admin"){
	    // 	header("location:../admin/dashboard.php");
	    // }else if($_SESSION['level'] = "user"){
	    // 	header("location:../user/dashboard.php");
    	}else{
		
?>
	<div class="container-fluid" style="margin-top: 80px">
		<div class="row" style="min-height: 100vh">
			<?php
				include ('part/sidebar.php');
			?>
			<!-- form -->
			<div class="col-md-9">
				<div class="card">
					<div class="card-body ">
					</div>
				</div>
			</div>
			<!-- akhir form -->
		</div>
	</div>

<?php
	include ('part/footer.php');
		}
?>