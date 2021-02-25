<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include "../../conf/conn.php";
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filejadwal']['name']) ;
move_uploaded_file($_FILES['filejadwal']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filejadwal']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filejadwal']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$kode_mk     = $data->val($i, 1);
	$mk   = $data->val($i, 2);
	$sks  = $data->val($i, 3);
	$smt  = $data->val($i, 4);
	$kelas  = $data->val($i, 5);
	$jadwal  = $data->val($i, 6);
	$ruang  = $data->val($i, 7);

	if($kode_mk != "" && $mk != "" && $sks != "" && $smt != "" && $kelas != "" && $jadwal != "" && $ruang != ""){
		// input data ke database (table jadwal)
		mysqli_query($con,"INSERT into jadwal values('','$kode_mk','$mk','$sks','$smt','$kelas','$jadwal','$ruang')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filejadwal']['name']);

// alihkan halaman ke index.php
header("location:../../index.php?page=data_mahasiswa");
?>