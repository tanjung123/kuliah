<?php
$query = mysqli_query($con, "SELECT * FROM jadwal WHERE id='".$_GET['id']."'");
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH JADWAL MAHASISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH JADWAL MAHASISWA</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/mahasiswa/ubah_mahasiswa_proses.php">
              <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                  <label>Kode MK</label>
                  <input type="text" name="kode_mk" class="form-control" placeholder="kode mk" value="<?php echo $row['kode_mk']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Mata Kuliah</label>
                  <input type="text" name="mk" class="form-control" placeholder="mata kuliah" value="<?php echo $row['mk']; ?>" required>
                </div>
                <div class="form-group">
                  <label>SKS</label>
                  <input type="text" name="sks" class="form-control" placeholder="berapa sks" value="<?php echo $row['sks']; ?>" required>
                </div>
                <div class="form-group">
                  <label>SMT</label>
                  <input type="text" name="smt" class="form-control" placeholder="semester berapa" value="<?php echo $row['smt']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" name="kelas">
                    <option value="<?php echo $row['kelas']; ?>">- <?php echo $row['kelas']; ?> -</option>
                    <option value="">- Pilih Kelas -</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                    <option value="">- Pilih Kelompok -</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>
                    <option value="VI">VI</option>
                    <option value="VII">VII</option>
                    <option value="VIII">VIII</option>
                    <option value="IX">IX</option>
                    <option value="X">X</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Jadwal</label>
                  <input type="text" name="jadwal" class="form-control" placeholder="jadwal" value="<?php echo $row['jadwal']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Ruang</label>
                  <input type="text" name="ruang" class="form-control" placeholder="ruang" value="<?php echo $row['ruang']; ?>"  required>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
