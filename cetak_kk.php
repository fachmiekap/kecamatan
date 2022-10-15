<style type="text/css">
  @media print{
    input.wkwk{display: none;}
  }
  @page{
    size: auto;
    margin: 0mm;
  }
  @font-face {
    font-family: myFirstFont;
    src: url(fonts/ufonts.com_square721-bt-roman.ttf);
  }

  p, u, td{
    font-family: myFirstFont;
  }
</style>
<title class="wkwk">Print Data Surat Tugas</title>
<body onLoad="window.print()">
	
<?php
error_reporting(0);
session_start();
include "koneksi.php"; 
include "tglindo.php"; 
$id_kk=$_GET['id'];
            $data=mysqli_query($con, "SELECT * FROM tbl_kk WHERE id_kk='$id_kk'");
            $data=mysqli_fetch_array($data);
?>
<table border=0 width=100%>
<tr>
    <td align="center" rowspan='3' width='88px'><img src='Logo_Kabupaten_Bekasi.png' width='85px'></td>
</tr> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>PEMERINTAH KABUPATEN BEKASI<br>
      DESA TAMBUN SELATAN <br> KECAMATAN TAMBUN SELATAN </h3></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>Jl. Sultan Hasanudin NO. 254 RT. 001/001 Kode Pos 17511 </p></td>
</tr> 
</table>
<hr style='border:1px solid #000'>

<table width=100%>
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>KARTU KELUARGA</h3></td>
</tr> 
<tr>
    <td align="center"><p>Nomor : 00<?php echo "$data[id_kk]"; ?>/198/TRANTIB/309.07/VIII/2022</p></td>
</tr> 
</table>
<br>

<table width='50%' align="center">
<tr>
  <td width="35%">Kepala Kelurahan Tambun Selatan Pemerintah Kabupaten Bekasi, Menerbitkan keterangan Surat Izin </td>
</tr>
<tr>
  <td width="35%">Pembuatan Kartu Keluarga : </td>
</tr>

</table>

<br>


<table width='50%' align="center">
<tr>
<td width="5%">1</td>
<td width="35%">Nama Lengkap</td>
<td width="65%">: <?php echo "$data[nama]";?></td>
</tr>
<tr>
<td>2</td>
<td>NIK</td>
<td>: <?php echo "$data[nik]";?></td>
</tr>
<tr>
<td>3</td>
<td>Jenis Kelamin</td>
<td>: <?php echo "$data[jenis_kelamin]";?></td>
</tr>
<tr>
<td>4</td>
<td>Tempat/ Tanggal Lahir</td>
<td>: <?php echo "$data[tmp_lahir]";?>/ <?php echo TanggalIndo($data[tgl_lahir]);?></td>
</tr>
<tr>
<td>5</td>
<td>Agama</td>
<td>: <?php echo "$data[agama]";?></td>
</tr>
<tr>
<td>6</td>
<td>Jenis Pekerjaan</td>
<td>: <?php echo "$data[jenis_pekerjaan]";?></td>
</tr>
<tr>
<td>7</td>
<td>Alamat</td>
<td>: <?php echo "$data[alamat]";?></td>
</tr>


</table>


<table width=100%>
  <tr>
    <td width="30%">
    </td>

    <td width="30%">

    </td>
    <br>
    <br>
    <td>
    
        <table>

          <tr>
            <p align="center">Tambun,</b> <?php echo date("d M Y"); ?></tr></p>
               
        </table>
        <center>
          
          KEPALA KECAMATAN TAMBUN<br>SELATAN<br><br><br><br>

          <u>ISWANDI, SH</u><br>
         
          NIP.19650218 199210 1001
        </center>
    </td>
  </tr>
</table> 
</body>