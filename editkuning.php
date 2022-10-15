<?php
include 'koneksi.php';
$_GET['id'] = htmlspecialchars($_GET['id']);
if(!is_numeric($_GET['id'])) {
  header('location:?page=kuning');
}
$row = showdata($con, "SELECT id_kuning, no_pendaftar, no_induk, nama, tmp_lahir, tgl_lahir, status_menikah, jenis_kelamin, alamat FROM tbl_kuning WHERE id_kuning = '".$_GET['id']."'");
$data = $row[0];
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PERIZINAN KARTU KUNING
        <small>(Edit)</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
      if (isset($_POST) && isset($_POST['edit_kuning'])) :
        if(!editkuning($con, $_POST)) :
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
                  <label for="id_kuning" class="col-sm-2 control-label">ID</label>
                  <div class="col-sm-10">
                    <input type="number" id="id_kuning" name="id_kuning" class="form-control" value="<?= $data['id_kuning']; ?>" readonly>
                  </div>
                </div>

                <div class="form-group">
                  <label for="no_pendaftar" class="col-sm-2 control-label">Nomor Pendaftar</label>
                  <div class="col-sm-10">
                    <input type="number" id="no_pendaftar" name="no_pendaftar" class="form-control" value="<?= $data['no_pendaftar']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="no_induk" class="col-sm-2 control-label">No Induk</label>
                  <div class="col-sm-10">
                    <input type="number" id="no_induk" name="no_induk" class="form-control" value="<?= $data['no_induk']; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" id="nama" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
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
                  <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <td><select name="jenis_kelamin" placeholder="jenis_kelamin" class="form-control" >
                      <option value="pilih">Jenis Kelamin</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="status_menikah" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <input type="text" id="status_menikah" name="status_menikah" class="form-control" value="<?= $data['status_menikah']; ?>" required>
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
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" id="alamat" name="alamat" class="form-control" value="<?= $data['alamat']; ?>" required>
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-sm-2">
                    <input type="submit" name="edit_kuning" class="btn btn-primary" value="submit">
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