<?php
include "../../conf/conn.php";
if($_POST)
{
$id = $_POST['id'];
$kode_mk = $_POST['kode_mk'];
$mk = $_POST['mk'];
$sks = $_POST['sks'];
$smt = $_POST['smt'];
$kelas = $_POST['kelas'];
$jadwal = $_POST['jadwal'];
$ruang = $_POST['ruang'];
$query = ("UPDATE jadwal SET kode_mk='$kode_mk',mk='$mk', sks='$sks', smt='$smt', kelas='$kelas', jadwal='$jadwal', ruang='$ruang' WHERE id ='$id'");
if(!mysqli_query($con, $query)){
die(mysqli_error);
}else{
echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="../../index.php?page=data_mahasiswa"</script>';
}
}
?>