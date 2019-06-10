<?php  
if(!isset($_SESSION['user'])){
	echo "<script>
				// alert('Akses Ditolak');
				document.location.href = 'login';
			</script>";
	exit();
}

?>