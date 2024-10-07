 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/Modul">Data Modul</a></li>
              <li class="breadcrumb-item active">Edit Data Modul</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <form action="<?=site_url('modul/'.$moduls->id) ?>" method="post" autocomplete="off">
                    <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label>KODE MODUL</label>
                                <input type="text" class="form-control" name="kode" value="<?=$moduls->kode?>" placeholder="Masukkan Kode Modul" required>
                            </div>
                            <div class="form-group">
                                <label>NAMA MODUL</label>
                                <input type="text" class="form-control" name="nama" value="<?=$moduls->nama?>" placeholder="Masukkan Nama Modul" required>
                            </div>
                            <div class="form-group">
                                <label>HARGA</label>
                                <input type="text" class="form-control" name="harga" value="<?=$moduls->harga?>" placeholder="Masukkan Harga Modul" required>
                            </div>
                            <button type="submit" class="btn btn-outline-success"><i class="fas fa-paper-plane"></i>.Save</button>
                        </form>
                    </div>
                </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->