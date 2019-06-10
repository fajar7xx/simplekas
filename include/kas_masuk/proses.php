<?php  
require '../../config/config.php';
require '../../function/init.php';

if(isset($_POST['simpan'])){
	// print_r($_POST);
	// exit();
	$ket = antidos($_POST['keterangan']);
	$kas = antidos($_POST['kas']);
	$tgl = $_POST['tgl'];

	$query_simpan = "INSERT INTO kas(keterangan, tgl, jumlah, jenis, keluar) VALUES('$ket', '$tgl', '$kas', 'masuk', 0)";
	$sql_simpan = mysqli_query($conn, $query_simpan)or die("Error: " . mysqli_error($conn));

	if($sql_simpan){
		echo"<script>
				alert('data berhasil disimpan');
				window.location.href = '../../kas-masuk'; 
			</script>";
		exit();
	}
}

elseif(isset($_POST['edit'])){


	$kd = antidos($_POST['kd']);
	$ket = antidos($_POST['keterangan']);
	$kas = antidos($_POST['kas']);
	$tgl = $_POST['tgl'];

	$query_update = "UPDATE kas SET keterangan = '$ket', tgl='$tgl', jumlah='$kas' WHERE kd_kas = '$kd'";
	$sql_update = mysqli_query($conn, $query_update)or die("Error: " . mysqli_error($conn));

	if($sql_update){
		echo"<script>
				alert('data berhasil disimpan');
				window.location.href = '../../kas-masuk'; 
			</script>";
		exit();
	}
}

elseif(isset($_GET['hapus'])){
	// print_r($_GET);
	$kd = $_GET['kd'];
	$q_hps = "DELETE FROM kas WHERE kd_kas = '$kd'";
	$hapus = mysqli_query($conn, $q_hps)or die("Error: " . mysqli_error($conn));

	if($hapus){
		echo"<script>
				alert('data berhasil dihapus');
				window.location.href = '../../kas-masuk'; 
			</script>";
		exit();
	}
}




?>