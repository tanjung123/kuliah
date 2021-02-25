<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'data_mahasiswa':
    include 'pages/mahasiswa/data_mahasiswa.php';
    break;
    case 'tambah_mahasiswa':
	include 'pages/mahasiswa/tambah_mahasiswa.php';
	break;
	case 'ubah_mahasiswa';
	include 'pages/mahasiswa/ubah_mahasiswa.php';
	break;
  case 'upload';
  include 'pages/mahasiswa/upload.php';
  break;
  case 'calender';
  include 'pages/calender/calender.php';
  break;
  case 'cetak';
  include 'pages/mahasiswa/cetak.php';
  break;
  case 'materi_kuliah';
  include 'pages/materi/materi_kuliah.php';
  break;
  
  }
}else{
    include "pages/beranda.php";
  }
?>