<?php  
$page = isset($_GET['page'])? $_GET['page'] : '';

switch($page){
	case 'kas_masuk':
	if(!file_exists('include/kas_masuk/kas_masuk.php'))die("File tidak ditemukan");
	include 'include/kas_masuk/kas_masuk.php';
	break;

	case 'kas_keluar':
	if(!file_exists('include/kas_keluar/kas_keluar.php'))die("file tidak ditemukan");
	include 'include/kas_keluar/kas_keluar.php';
	break;

	case 'rekap':
	if(!file_exists('include/rekap/rekap.php'))die("file tidak ditemukan");
	include 'include/rekap/rekap.php';
	break;

	case 'manajemen':
	if(!file_exists('include/manajemen_user/manajemen_user.php'))die("file tidak ditemukan");
	include 'include/manajemen_user/manajemen_user.php';
	break;
	

	default:
	// // if(!file_exists('include/dashboard/dashboard.php'))die("file tidak ditemukan");
	include 'include/dashboard/dashboard.php';
	break;
}

?>