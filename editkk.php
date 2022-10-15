<?php
include 'koneksi.php';
$_GET['id'] = htmlspecialchars($_GET['id']);
if(!is_numeric($_GET['id'])) {
  header('location:?page=kk');
}
$row = showdata($con, "SELECT id_kk, nama, nik, jenis_kelamin, tmp_lahir, tgl_lahir, agama, jenis_pekerjaan, alamat FROM tbl_kk WHERE id_kk = '".$_GET['id']."'");
$data = $row[0];
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        KARTU KELUARGA
        <small>(Edit)</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if (isset($_POST) && isset($_POST['edit_kk'])) :
        if(!editkk($con, $_POST)) :
        ?>
        <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            query gagal
        </div>
        <?php else : ?>
          <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-info"></i> Info!</h4>
          query berhasil
        </div>
      <?php endif; ?>
    <?php endif; ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <form class="form-horizontal" method="POST" action="">  
              <div class="box-body">

                <div class="form-group">
                  <label for="id_kk" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-10">
                    <input type="number" id="id_kk" name="id_kk" class="form-control" value="<?= $data['id_kk']; ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" id="nama" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nik" class="col-sm-2 control-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="text" id="nik" name="nik" class="form-control" value="<?= $data['nik']; ?>" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <td><select name="jenis_kelamin" placeholder="jenis_kelamin" class="form-control">
                      <option value="pilih">Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="tmp_lahir" class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control" value="<?= $data['tmp_lahir']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?= $data['tgl_lahir']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="agama" class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-10">
                    <td><select name="agama" placeholder="agama" class="form-control">
                      <option value="pilih">Agama</option>
                      <option value="islam">Islam</option>
                      <option value="hindu">hindu</option>
                      <option value="budha">Budha</option>
                      <option value="protestan">Protestan</option>
                      <option value="katolik">Katolik</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenis_pekerjaan" class="col-sm-2 control-label">Jenis Pekerjaan</label>
                  <div class="col-sm-10">
                    <input type="text" id="jenis_pekerjaan" name="jenis_pekerjaan" class="form-control" value="<?= $data['jenis_pekerjaan']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" id="alamat" name="alamat" class="form-control" value="<?= $data['alamat']; ?>" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-2">
                    <input type="submit" name="edit_kk" class="btn btn-primary" value="submit">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>