<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UPLOAD JADWAL MAHASISWA
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UPLOAD JADWAL MAHASISWA</li>
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
            <form role="form" method="post" enctype="multipart/form-data" action="pages/mahasiswa/upload_aksi.php">
              <div class="box-body">
              	<div class="form-group">
                
					Pilih File: 
					<input name="filejadwal" type="file" required="required"> 
				
				</div>
                
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="upload" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-import"></i> Import</button>
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