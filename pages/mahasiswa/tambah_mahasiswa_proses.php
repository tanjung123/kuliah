<?php
include "../../conf/conn.php";
if($_POST)
{
$kode_mk = $_POST['kode_mk'];
$mk = $_POST['mk'];
$sks = $_POST['sks'];
$smt = $_POST['smt'];
$kelas = $_POST['kelas'];
$jadwal = $_POST['jadwal'];
$ruang = $_POST['ruang'];
$query = ("INSERT INTO jadwal(id, kode_mk, mk, sks, smt, kelas, jadwal, ruang) VALUES ('','".$kode_mk."','".$mk."','".$sks."','".$smt."',
'".$kelas."','".$jadwal."','".$ruang."')");
if(!mysqli_query($con, $query)){
die(mysqli_error);
}else{
echo '<script>alert("Data Berhasil Ditambahkan !!!");
window.location.href="../../index.php?page=data_mahasiswa"</script>';
}
}
?>