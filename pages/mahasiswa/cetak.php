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
          <h1>Jadwal Kuliah Saya</h1>
          <h5>Semester : 2</h5>
          </div>
            <div class="box-body table-responsive">
              <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>KODE MK</th>
                  <th>MATA KULIAH</th>
                  <th>SKS</th>
                  <th>KELAS</th>
                  <th>JADWAL</th>
                  <th>RUANG</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include "conf/conn.php";
                $no=0;
                $query = mysqli_query($con, "SELECT * FROM jadwal ORDER BY jadwal ASC");
                while ($row = mysqli_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['kode_mk'];?></td>
                  <td><?php echo $row['mk'];?></td>
                  <td><?php echo $row['sks'];?></td>
                  <td><?php echo $row['kelas'];?></td>
                  <td><?php echo $row['jadwal'];?></td>
                  <td><?php echo $row['ruang'];?></td>
                  
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

	<script>
		window.print();
	</script>

</body>
</html>