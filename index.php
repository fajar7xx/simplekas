<?php  
require_once 'config/config.php';
require_once 'function/init.php';

// if(!isset($_SESSION['admin'])){
// 	header('Location:login.php');
// 	exit();
// }
// else{
// 	header('location:dashboard.php');
// 	exit();
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Simple Kas</title>
	<!-- Custom fonts for this template-->
	<link href="<?=base_url('node_modules/startbootstrap-sb-admin-2/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<!-- datatables -->
	<link href="<?=base_url('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css');?>" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="<?=base_url('node_modules/startbootstrap-sb-admin-2/');?>css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">
		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Admin</div>
			</a>
			<!-- Divider -->
			<hr class="sidebar-divider my-0">
			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="index.php">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<!-- Nav Item - Charts -->
			<li class="nav-item">
				<a class="nav-link" href="kas-masuk">
					<i class="fas fa-download fa-sm fa-fw mr-2 text-gray-400"></i>
					<!-- <i class="fas fa-fw fa-chart-area"></i> -->
					<span>Kas Masuk</span>
				</a>
			</li>
			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link" href="kas-keluar">
					<i class="fas fa-upload fa-sm fa-fw mr-2 text-gray-400"></i>
					<!-- <i class="fas fa-fw fa-table"></i> -->
					<span>Kas Keluar</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="rekap">
					<i class="fas fa-balance-scale fa-sm fa-fw mr-2 text-gray-400"></i>
					<!-- <i class="fas fa-fw fa-table"></i> -->
					<span>Rekapitulasi Kas</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="manajemen">
					<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
					<!-- <i class="fas fa-fw fa-table"></i> -->
					<span>Manajemen User</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					<span>Keluar</span>
				</a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">
			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<!-- End of Sidebar -->
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content">
				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
					<i class="fa fa-bars"></i>
					</button>
					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin Ganteng</span>
								<img class="img-profile rounded-circle" src="assets/img/pexels-user.jpeg">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
									Activity Log
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>
					</ul>
				</nav>
				<!-- End of Topbar -->
				<!-- Begin Page Content -->
				<div class="container-fluid">
					<?php  
						include 'open_file.php';
					?>
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->
			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Website 2019</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->
		</div>
		<!-- End of Content Wrapper -->
	</div>
	<!-- End of Page Wrapper -->

  	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- kas Masuk Modal-->
	<div class="modal fade" id="kasMasukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Pemasukan</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="<?=base_url('include/kas_masuk/proses.php');?>" method="post" autocomplete="off">
					<div class="modal-body">

						<div class="form-group">
							<label for="keterangan">keterangan</label>
							<input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="keterangan">
						</div>
						<div class="form-group">
							<label for="kas">Pemasukan</label>
							<input type="number" name="kas" id="kas" class="form-control" placeholder="masukkan nominal uang" min="0">
						</div>
						<div class="form-group">
							<label for="tgl">tangal pemasukan</label>
							<input type="date" name="tgl" id="tgl" class="form-control">
						</div>

					</div>
					<div class="modal-footer">
						<button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancel</button>
						<button class="btn btn-outline-primary" type="submit" name="simpan">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- edit kas Masuk Modal-->
	<div class="modal fade" id="editKasMasukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Pemasukan</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="<?=base_url('include/kas_masuk/proses.php');?>" method="post" autocomplete="off">
					<div class="modal-body" id="modal_edit">
						<div class="form-group">
							<input type="text" name="kd" id="kd"  class="form-control" readonly>
						</div>

						<div class="form-group">
							<label for="keterangan">keterangan</label>
							<input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="keterangan">
						</div>
						<div class="form-group">
							<label for="kas">Pemasukan</label>
							<input type="number" name="kas" id="kas" class="form-control" placeholder="masukkan nominal uang" min="0">
						</div>
						<div class="form-group">
							<label for="tgl">tangal pemasukan</label>
							<input type="date" name="tgl" id="tgl" class="form-control">
						</div>

					</div>
					<div class="modal-footer">
						<button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancel</button>
						<button class="btn btn-outline-primary" type="submit" name="edit">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- kas keluar Modal-->
	<div class="modal fade" id="kasKeluarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Pengeluaran</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="<?=base_url('include/kas_keluar/proses.php');?>" method="post" autocomplete="off">
					<div class="modal-body">

						<div class="form-group">
							<label for="keterangan">keterangan</label>
							<input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="keterangan">
						</div>
						<div class="form-group">
							<label for="kas">Pengeluaran</label>
							<input type="number" name="kas" id="kas" class="form-control" placeholder="masukkan nominal uang" min="0">
						</div>
						<div class="form-group">
							<label for="tgl">tangal pengeluaran</label>
							<input type="date" name="tgl" id="tgl" class="form-control">
						</div>

					</div>
					<div class="modal-footer">
						<button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancel</button>
						<button class="btn btn-outline-primary" type="submit" name="simpan">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- edit kas keluar Modal-->
	<div class="modal fade" id="editKasKeluarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Pemasukan</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="<?=base_url('include/kas_keluar/proses.php');?>" method="post" autocomplete="off">
					<div class="modal-body" id="modal_edit2">
						<div class="form-group">
							<input type="text" name="kd" id="kd"  class="form-control" readonly>
						</div>

						<div class="form-group">
							<label for="keterangan">keterangan</label>
							<input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="keterangan">
						</div>
						<div class="form-group">
							<label for="pengeluaran">Pengeluaran</label>
							<input type="number" name="pengeluaran" id="pengeluaran" class="form-control" placeholder="masukkan nominal uang" min="0">
						</div>
						<div class="form-group">
							<label for="tgl">tangal pemasukan</label>
							<input type="date" name="tgl" id="tgl" class="form-control">
						</div>

					</div>
					<div class="modal-footer">
						<button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancel</button>
						<button class="btn btn-outline-primary" type="submit" name="edit">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Tambah manajement Modal-->
	<div class="modal fade" id="tambahAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
					</button>
				</div>
				<form action="<?=base_url('include/manajemen_user/proses.php');?>" method="post" autocomplete="off">
					<div class="modal-body">

						<div class="form-group">
							<label for="nama">nama</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="nama lengkap">
						</div>
						<div class="form-group">
							<label for="username">username</label>
							<input type="text" name="username" id="username" class="form-control" placeholder="username">
						</div>
						<div class="form-group">
							<label for="email">email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="email@mail.com">
						</div>
						<div class="form-group">
							<label for="password1">password</label>
							<input type="password" name="password1" id="password1" class="form-control" placeholder="password min 8 charecters">
						</div>
						<div class="form-group">
							<label for="password2">repeat password</label>
							<input type="password" name="password2" id="password2" class="form-control" placeholder="retype the password">
						</div>

					</div>
					<div class="modal-footer">
						<button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancel</button>
						<button class="btn btn-outline-primary" type="submit" name="simpan">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-outline-info" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-outline-danger" href="logout">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?=base_url('node_modules/startbootstrap-sb-admin-2/');?>vendor/jquery/jquery.min.js"></script>
	<script src="<?=base_url('node_modules/startbootstrap-sb-admin-2/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Core plugin JavaScript-->
	<script src="<?=base_url('node_modules/startbootstrap-sb-admin-2/');?>vendor/jquery-easing/jquery.easing.min.js"></script>
	<!-- Custom scripts for all pages-->
	<script src="<?=base_url('node_modules/startbootstrap-sb-admin-2/');?>js/sb-admin-2.min.js"></script>
	<!-- Page level plugins -->
	<script src="<?=base_url('node_modules/startbootstrap-sb-admin-2/');?>vendor/chart.js/Chart.min.js"></script>
	<!-- Page level custom scripts -->
	<script src="<?=base_url('node_modules/startbootstrap-sb-admin-2/');?>js/demo/chart-area-demo.js"></script>
	<script src="<?=base_url('node_modules/startbootstrap-sb-admin-2/');?>js/demo/chart-pie-demo.js"></script>

	<!-- datatables -->
	<script src="<?=base_url('node_modules/datatables.net/js/jquery.dataTables.min.js');?>"></script>
	<script src="<?=base_url('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('table.kas').DataTable();
		});
	</script>

	<script type="text/javascript">
		// edit data pemasukan
		$(document).on("click", "#edit_data", function(){
			var kd = $(this).data('id');
			var ket = $(this).data('ket');
			var tgl = $(this).data('tgl');
			var jumlah = $(this).data('jumlah');

			$("#modal_edit #kd").val(kd);
			$("#modal_edit #keterangan").val(ket);
			$("#modal_edit #tgl").val(tgl);
			$("#modal_edit #kas").val(jumlah);
		});
		// edit data pengeluaran
		$(document).on("click", "#edit_data2", function(){
			var kd = $(this).data('id');
			var ket = $(this).data('ket');
			var tgl = $(this).data('tgl');
			var keluar = $(this).data('keluar');

			$("#modal_edit2 #kd").val(kd);
			$("#modal_edit2 #keterangan").val(ket);
			$("#modal_edit2 #tgl").val(tgl);
			$("#modal_edit2 #pengeluaran").val(keluar);
		});

		// matching password
		$("#password2").change(function(){
			if($(this).val() != $("#password1").val()){
				alert("values do not match");
               //more processing here
           }
       	});
	</script>
</body>
</html>
