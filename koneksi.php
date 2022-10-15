<?php 
$serv = "localhost";
$user = "root";
$pass = "";
$db = "kp"; 

$con = mysqli_connect($serv, $user, $pass); 
mysqli_select_db($con, $db);

if ($con) {
	echo " ";
}

function showdata($con, $sql) {
	$query = mysqli_query($con, $sql);
	$rows = array();
	while ($result = mysqli_fetch_assoc($query)) {
	$rows[] = $result; 
	}
	return $rows;
}

function tambahskck($con, $data) {
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);
	$data['keperluan'] = htmlspecialchars($data['keperluan']);
	$data['riwayat_sekolah'] = htmlspecialchars($data['riwayat_sekolah']);
	$data['keterangan'] = htmlspecialchars($data['keterangan']);

	$nama =& $data['nama'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$agama =& $data['agama'];
	$alamat =& $data['alamat'];
	$pekerjaan =& $data['pekerjaan'];
	$keperluan =& $data['keperluan'];
	$riwayat_sekolah =& $data['riwayat_sekolah'];
	$keterangan =& $data['keterangan'];

	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_skck (nama, jenis_kelamin, tmp_lahir, tgl_lahir, agama, alamat, pekerjaan, keperluan, riwayat_sekolah, keterangan)
	 			VALUES('$nama', '$jenis_kelamin', '$tmp_lahir', '$tgl_lahir', '$agama', '$alamat', '$pekerjaan', '$keperluan', '$riwayat_sekolah', '$keterangan')")) {
	return false;
	}
	return true;
}

function editskck($con, $data) {
	$data['id_skck'] = htmlspecialchars($data['id_skck']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);
	$data['keperluan'] = htmlspecialchars($data['keperluan']);
	$data['riwayat_sekolah'] = htmlspecialchars($data['riwayat_sekolah']);
	$data['keterangan'] = htmlspecialchars($data['keterangan']);

	$id_skck =& $data['id_skck'];
	$nama =& $data['nama'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$agama =& $data['agama'];
	$alamat =& $data['alamat'];
	$pekerjaan =& $data['pekerjaan'];
	$keperluan =& $data['keperluan'];
	$riwayat_sekolah =& $data['riwayat_sekolah'];
	$keterangan =& $data['keterangan'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_skck SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', agama = '$agama', alamat = '$alamat', pekerjaan = '$pekerjaan', keperluan = '$keperluan', riwayat_sekolah = '$riwayat_sekolah', keterangan = '$keterangan' WHERE id_skck = $id_skck")) {
	return false;
	}
	return true;
}
function tambahktp($con, $data) {

	$data['no_kk'] = htmlspecialchars($data['no_kk']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['no_hp'] = htmlspecialchars($data['no_hp']);
	$data['alamat'] = htmlspecialchars($data['alamat']);


	$no_kk =& $data['no_kk'];
	$nama =& $data['nama'];
	$no_hp =& $data['no_hp'];
	$alamat =& $data['alamat'];


	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_ktp (no_kk, nama, no_hp, alamat)
	 			VALUES('$no_kk', '$nama', '$no_hp', '$alamat')")) {
	return false;
	}
	return true;
}
function editktp($con, $data) {
	$data['id_ktp'] = htmlspecialchars($data['id_ktp']);
	$data['no_kk'] = htmlspecialchars($data['no_kk']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['no_hp'] = htmlspecialchars($data['no_hp']);
	$data['alamat'] = htmlspecialchars($data['alamat']);


	$id_ktp =& $data['id_ktp'];
	$no_kk =& $data['no_kk'];
	$nama =& $data['nama'];
	$no_hp =& $data['no_hp'];
	$alamat =& $data['alamat'];


	 if(!$query = mysqli_query($con , "UPDATE tbl_ktp SET no_kk = '$no_kk', nama = '$nama', no_hp = '$no_hp', alamat = '$alamat' WHERE id_ktp = $id_ktp")) {
	return false;
	}
	return true;
}
function tambahsuratkeluar($con, $data) {
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['tujuan_surat'] = htmlspecialchars($data['tujuan_surat']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$perihal =& $data['perihal'];
	$tujuan_surat =& $data['tujuan_surat'];
	$lampiran =& $data['lampiran'];

	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_suratkeluar (no_surat, tanggal, perihal, tujuan_surat, lampiran)
	 			VALUES('$no_surat', '$tanggal', '$perihal', '$tujuan_surat', '$lampiran')")) {
	return false;
	}
	return true;
}
function editsuratkeluar($con, $data) {
	$data['id_srtkeluar'] = htmlspecialchars($data['id_srtkeluar']);
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['tujuan_surat'] = htmlspecialchars($data['tujuan_surat']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$id_srtkeluar =& $data['id_srtkeluar'];
	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$perihal =& $data['perihal'];
	$tujuan_surat =& $data['tujuan_surat'];
	$lampiran =& $data['lampiran'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_suratkeluar SET no_surat = '$no_surat', tanggal = '$tanggal', perihal = '$perihal', tujuan_surat = '$tujuan_surat', lampiran = '$lampiran' WHERE id_srtkeluar = $id_srtkeluar")) {
	return false;
	}
	return true;
}

function tambahpemohon($con, $data) {
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['no_hp'] = htmlspecialchars($data['no_hp']);
	$data['email'] = htmlspecialchars($data['email']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);


	$nama =& $data['nama'];
	$alamat =& $data['alamat'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$no_hp =& $data['no_hp'];
	$email =& $data['email'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$pekerjaan =& $data['pekerjaan'];


	 if(!$query = mysqli_query($con ,"INSERT INTO data_pemohon (nama, alamat, jenis_kelamin, no_hp, email, tmp_lahir, tgl_lahir, pekerjaan)
	 			VALUES('$nama', '$alamat', '$jenis_kelamin', '$no_hp', '$tmp_lahir', '$email', '$tgl_lahir', '$pekerjaan')")) {
	return false;
	}
	return true;
}

function editpemohon($con, $data) {
	$data['id_pemohon'] = htmlspecialchars($data['id_pemohon']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['no_hp'] = htmlspecialchars($data['no_hp']);
	$data['email'] = htmlspecialchars($data['email']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['pekerjaan'] = htmlspecialchars($data['pekerjaan']);



	$id_pemohon =& $data['id_pemohon'];
	$nama =& $data['nama'];
	$alamat =& $data['alamat'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$no_hp =& $data['no_hp'];
	$email =& $data['email'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$pekerjaan =& $data['pekerjaan'];



	 if(!$query = mysqli_query($con , "UPDATE data_pemohon SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', no_hp = '$no_hp', email = '$email', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', pekerjaan = '$pekerjaan' WHERE id_pemohon = $id_pemohon")) {
	return false;
	}
	return true;
}

function tambahlprnkk($con, $data) {
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['nik'] = htmlspecialchars($data['nik']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['jenis_pekerjaan'] = htmlspecialchars($data['jenis_pekerjaan']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$nama =& $data['nama'];
	$nik =& $data['nik'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$agama =& $data['agama'];
	$jenis_pekerjaan =& $data['jenis_pekerjaan'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_lprnkk (nama, nik, jenis_kelamin, tmp_lahir, tgl_lahir, agama, jenis_pekerjaan, alamat)
	 			VALUES('$nama', '$nik', '$jenis_kelamin', '$tmp_lahir', '$tgl_lahir', '$agama', '$jenis_pekerjaan', '$alamat')")) {
	return false;
	}
	return true;
}


function editlprnkk($con, $data) {
	$data['id_lprnkk'] = htmlspecialchars($data['id_lprnkk']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['nik'] = htmlspecialchars($data['nik']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['ttl'] = htmlspecialchars($data['ttl']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['jenis_pekerjaan'] = htmlspecialchars($data['jenis_pekerjaan']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$id_lprnkk =& $data['id_lprnkk'];
	$nama =& $data['nama'];
	$nik =& $data['nik'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$ttl =& $data['ttl'];
	$agama =& $data['agama'];
	$jenis_pekerjaan =& $data['jenis_pekerjaan'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_lprnkk SET nama = '$nama', nik = '$nik', jenis_kelamin = '$jenis_kelamin', tmp_lahir = '$tmp_lahir', ttl = '$ttl', agama = '$agama', jenis_pekerjaan = '$jenis_pekerjaan', alamat = '$alamat' WHERE id_lprnkk = $id_lprnkk")) {
	return false;
	}
	return true;
}
function tambahkuning($con, $data) {
	$data['no_pendaftar'] = htmlspecialchars($data['no_pendaftar']);
	$data['no_induk'] = htmlspecialchars($data['no_induk']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['status_menikah'] = htmlspecialchars($data['status_menikah']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);


	$no_pendaftar =& $data['no_pendaftar'];
	$no_induk =& $data['no_induk'];
	$nama =& $data['nama'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$status_menikah =& $data['status_menikah'];
	$agama =& $data['agama'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_kuning (no_pendaftar, no_induk, nama, tmp_lahir, tgl_lahir, jenis_kelamin, status_menikah, agama, alamat)
	 			VALUES('$no_pendaftar', '$no_induk', '$nama', '$tmp_lahir', '$tgl_lahir', '$jenis_kelamin', '$status_menikah', '$agama', '$alamat')")) {
	return false;
	}
	return true;
}
function editkuning($con, $data) {
	$data['id_kuning'] = htmlspecialchars($data['id_kuning']);
	$data['no_pendaftar'] = htmlspecialchars($data['no_pendaftar']);
	$data['no_induk'] = htmlspecialchars($data['no_induk']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['status_menikah'] = htmlspecialchars($data['status_menikah']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['alamat'] = htmlspecialchars($data['alamat']);


	$id_kuning =& $data['id_kuning'];
	$no_pendaftar =& $data['no_pendaftar'];
	$no_induk =& $data['no_induk'];
	$nama =& $data['nama'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$status_menikah =& $data['status_menikah'];
	$agama =& $data['agama'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_kuning SET no_pendaftar = '$no_pendaftar', no_induk = '$no_induk', nama = '$nama', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin', status_menikah = '$status_menikah', agama = '$agama', alamat = '$alamat' WHERE id_kuning = $id_kuning")) {
	return false;
	}
	return true;
}
function tambahkk($con, $data) {
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['nik'] = htmlspecialchars($data['nik']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['jenis_pekerjaan'] = htmlspecialchars($data['jenis_pekerjaan']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$nama =& $data['nama'];
	$nik =& $data['nik'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$agama =& $data['agama'];
	$jenis_pekerjaan =& $data['jenis_pekerjaan'];
	$alamat =& $data['alamat'];
	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_kk (nama, nik, jenis_kelamin, tmp_lahir, tgl_lahir, agama, jenis_pekerjaan, alamat)
	 			VALUES('$nama', '$nik', '$jenis_kelamin', '$tmp_lahir', '$tgl_lahir', '$agama', '$jenis_pekerjaan', '$alamat')")) {
	return false;
	}
	return true;
}
function editkk($con, $data) {
	$data['id_kk'] = htmlspecialchars($data['id_kk']);
	$data['nama'] = htmlspecialchars($data['nama']);
	$data['nik'] = htmlspecialchars($data['nik']);
	$data['jenis_kelamin'] = htmlspecialchars($data['jenis_kelamin']);
	$data['tmp_lahir'] = htmlspecialchars($data['tmp_lahir']);
	$data['tgl_lahir'] = htmlspecialchars($data['tgl_lahir']);
	$data['agama'] = htmlspecialchars($data['agama']);
	$data['jenis_pekerjaan'] = htmlspecialchars($data['jenis_pekerjaan']);
	$data['alamat'] = htmlspecialchars($data['alamat']);

	$id_kk =& $data['id_kk'];
	$nama =& $data['nama'];
	$nik =& $data['nik'];
	$jenis_kelamin =& $data['jenis_kelamin'];
	$tmp_lahir =& $data['tmp_lahir'];
	$tgl_lahir =& $data['tgl_lahir'];
	$agama =& $data['agama'];
	$jenis_pekerjaan =& $data['jenis_pekerjaan'];
	$alamat =& $data['alamat'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_kk SET nama = '$nama', nik = '$nik', jenis_kelamin = '$jenis_kelamin', tmp_lahir = '$tmp_lahir', tgl_lahir = '$tgl_lahir', agama = '$agama', jenis_pekerjaan = '$jenis_pekerjaan', alamat = '$alamat' WHERE id_kk = $id_kk")) {
	return false;
	}
	return true;
}
function tambahmasuk($con, $data) {
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['pengirim'] = htmlspecialchars($data['pengirim']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$pengirim =& $data['pengirim'];
	$perihal =& $data['perihal'];
	$lampiran =& $data['lampiran'];
	 if(!$query = mysqli_query($con ,"INSERT INTO surat_masuk (no_surat, tanggal, pengirim, perihal, lampiran)
	 			VALUES('$no_surat', '$tanggal', '$pengirim', '$perihal', '$lampiran')")) {
	return false;
	}
	return true;
}
function editmasuk($con, $data) {
	$data['id_masuk'] = htmlspecialchars($data['id_masuk']);
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['pengirim'] = htmlspecialchars($data['pengirim']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$id_masuk =& $data['id_masuk'];
	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$pengirim =& $data['pengirim'];
	$perihal =& $data['perihal'];
	$lampiran =& $data['lampiran'];

	 if(!$query = mysqli_query($con , "UPDATE surat_masuk SET no_surat = '$no_surat', tanggal = '$tanggal', pengirim = '$pengirim', perihal = '$perihal', lampiran = '$lampiran' WHERE id_masuk = $id_masuk")) {
	return false;
	}
	return true;
}
function tambahkeluar($con, $data) {
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['tujuan_surat'] = htmlspecialchars($data['tujuan_surat']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$perihal =& $data['perihal'];
	$tujuan_surat =& $data['tujuan_surat'];
	$lampiran =& $data['lampiran'];
	 if(!$query = mysqli_query($con ,"INSERT INTO tbl_keluar (no_surat, tanggal, perihal, tujuan_surat, lampiran)
	 			VALUES('$no_surat', '$tanggal', '$perihal', '$tujuan_surat', '$lampiran')")) {
	return false;
	}
	return true;
}
function editkeluar($con, $data) {
	$data['id_keluar'] = htmlspecialchars($data['id_keluar']);
	$data['no_surat'] = htmlspecialchars($data['no_surat']);
	$data['tanggal'] = htmlspecialchars($data['tanggal']);
	$data['perihal'] = htmlspecialchars($data['perihal']);
	$data['tujuan_surat'] = htmlspecialchars($data['tujuan_surat']);
	$data['lampiran'] = htmlspecialchars($data['lampiran']);

	$id_keluar =& $data['id_keluar'];
	$no_surat =& $data['no_surat'];
	$tanggal =& $data['tanggal'];
	$perihal =& $data['perihal'];
	$tujuan_surat =& $data['tujuan_surat'];
	$lampiran =& $data['lampiran'];

	 if(!$query = mysqli_query($con , "UPDATE tbl_keluar SET no_surat = '$no_surat', tanggal = '$tanggal', perihal = '$perihal', tujuan_surat = '$tujuan_surat', lampiran = '$lampiran' WHERE id_keluar = $id_keluar")) {
	return false;
	}
	return true;
}

function hapus($con, $table, $row_id, $id) {
	if(!$query = mysqli_query($con, "DELETE FROM $table where `$row_id` = '$id'")) {
		return false;
	}
	return true;
}

