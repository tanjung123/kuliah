<?php
//HAPUS
include "../../conf/conn.php";
$id     = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM jadwal WHERE id = '$id'");
if ($result){ ?>
    <script language="javascript">
            alert('Berhasil Dihapus');
        document.location.href="../../index.php?page=data_mahasiswa";
    </script>
<?php
}else {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $con->error, E_USER_ERROR);
}
?>

