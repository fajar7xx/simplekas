<?php  
require '../../config/config.php';
require '../../function/init.php';

if(isset($_POST['simpan'])){
	
	// print_r($_POST);
	// exit();

	$nama = antidos($_POST['nama']);
	$username = antidos($_POST['username']);
	$email = antidos($_POST['email']);
	$pass1 = antidos($_POST['password1']);
	$aktif = 1;
	$level = 1;

	$query_cek = "SELECT * FROM admin WHERE email = '$email' OR username = '$username'";
	$sql_cek = mysqli_query($conn, $query_cek)or die("Error: " . mysqli_error($conn));

	// 1. username/email checker
	// 2. password mismatch using javascript
	// 3. pasword length using javscript

	if(mysqli_num_rows($sql_cek) != 0){
		echo"<script>
				alert('Username or email already exist'); 
			</script>";
		exit();
	}
	else{

		$pass = password_hash($pass1, PASSWORD_DEFAULT);

		$query = "INSERT INTO admin(
								email, 
								username, 
								nama, 
								password, 
								level,
								aktif) 
						VALUES(
								'$email',
								'$username',
								'$nama',
								'$pass',
								'$level',
								'$aktif'
						)";
		$sql = mysqli_query($conn, $query)or die("error : " . mysqli_error($conn));

		if($sql){
			echo"<script>
					alert('data berhasil disimpan');
					window.location.href = '../../manajemen'; 
				</script>";
			exit();
		}
	}

	
}

// elseif(isset($_POST['edit'])){
// 	$kd = antidos($_POST['kd']);
// 	$ket = antidos($_POST['keterangan']);
// 	$kas = antidos($_POST['kas']);
// 	$tgl = $_POST['tgl'];

// 	$query_update = "UPDATE kas SET keterangan = '$ket', tgl='$tgl', jumlah='$kas' WHERE kd_kas = '$kd'";
// 	$sql_update = mysqli_query($conn, $query_update)or die("Error: " . mysqli_error($conn));

// 	if($sql_update){
// 		echo"<script>
// 				alert('data berhasil disimpan');
// 				window.location.href = '../../kas-masuk'; 
// 			</script>";
// 		exit();
// 	}
// }

// elseif(isset($_GET['hapus'])){
// 	$kd = $_GET['kd'];
// 	$q_hps = "DELETE FROM kas WHERE kd_kas = '$kd'";
// 	$hapus = mysqli_query($conn, $q_hps)or die("Error: " . mysqli_error($conn));

// 	if($hapus){
// 		echo"<script>
// 				alert('data berhasil dihapus');
// 				window.location.href = '../../kas-masuk'; 
// 			</script>";
// 		exit();
// 	}
// }




?>