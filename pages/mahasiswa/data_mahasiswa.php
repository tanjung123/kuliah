<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Jadwal Kuliah
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">JADWAL KULIAH</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="index.php?page=tambah_mahasiswa" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          <a href="index.php?page=cetak" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-print"></i> Cetak</a>
          <a href="index.php?page=upload" class="btn btn-info" role="button" title="Tambah Data"><i class="glyphicon glyphicon-download-alt"></i> Import Data</a>
          </div>
            <div class="box-body table-responsive">
              <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>KODE MK</th>
                  <th>MATA KULIAH</th>
                  <th>SKS</th>
                  <th>SMT</th>
                  <th>KELAS</th>
                  <th>JADWAL</th>
                  <th>RUANG</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "conf/conn.php";
                $no=0;
                $query = mysqli_query($con, "SELECT * FROM jadwal ORDER BY id ASC");
                while ($row = mysqli_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['kode_mk'];?></td>
                  <td><?php echo $row['mk'];?></td>
                  <td><?php echo $row['sks'];?></td>
                  <td><?php echo $row['smt'];?></td>
                  <td><?php echo $row['kelas'];?></td>
                  <td><?php echo $row['jadwal'];?></td>
                  <td><?php echo $row['ruang'];?></td>
                  <td>
                    <a href="index.php?page=ubah_mahasiswa&id=<?=$row['id'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>                    
                    <a class="btn btn-danger" data-toggle="modal" data-target="#konfirmasi_hapus" data-href="pages/mahasiswa/hapus_mahasiswa.php?id=<?=$row['id'];?>" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

    <div class="modal fade" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <b>Anda yakin ingin menghapus data ini ?</b><br><br>
                    <a class="btn btn-danger btn-ok"> Hapus</a>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
                </div>
            </div>
        </div>
    </div>

      <script type="text/javascript">
    //Hapus Data
    $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
  </script>
 

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#mahasiswa').DataTable();
  });
</script>