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
$id_masuk=$_GET['id'];
            $data=mysqli_query($con, "SELECT * FROM surat_masuk WHERE id_masuk='$id_masuk'");
            $data=mysqli_fetch_array($data);
?>
<table border=0 width=100%>
<tr>
    <td align="center" rowspan='3' width='88px'><img src='Logo_Kabupaten_Bekasi.png' width='85px'></td>
</tr> 
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>PEMERINTAH KABUPATEN BEKASI<br>
         DESA TAMBUN SELATAN <br> KECAMATAN TAMBUN SELATAN</h3></td>
    <td align="center" rowspan='3' width='88px'>&nbsp;</td>
</tr> 
<tr>
    <td align="center"><p>Jl. Sultan Hasanudin NO. 254 RT. 001/001 Kode Pos 17511 </p></td>
</tr> 
</table>
<hr style='border:1px solid #000'>

<table width=100%>
<tr>
    <td align="center"><h3 style='margin-bottom:-5px' align=center>SURAT MASUK </h3></td>
</tr> 
<tr>
    <td align="center"><p>Nomor : 00<?php echo "$data[id_masuk]"; ?>/198/TRANTIB/309.07/VIII/2022</p></td>
</tr> 
</table>
<br>

<table width='50%' align="center">
<tr>
  <td width="35%">Kepala Kelurahan Tambun Selatan Pemerintah Kabupaten Bekasi, Menerbitkan keterangan Pembuatan </td>
</tr>
<tr>
  <td width="35%">Surat Izin Masuk : </td>
</tr>

</table>

<br>


<table width='50%' align="center">
<tr>
<td width="5%">1</td>
<td width="30%">Nomor Surat</td>
<td width="65%">: <?php echo "$data[no_surat]";?></td>
</tr>

<tr>
<td>2</td>
<td>Tanggal</td>
<td>: <?php echo TanggalIndo($data[tanggal]);?></td>
</tr>
<tr>
<td>3</td>
<td>Pengirim</td>
<td>: <?php echo "$data[pengirim]";?></td>
</tr>
<tr>
<td>4</td>
<td>Perihal</td>
<td>: <?php echo "$data[perihal]";?></td>
</tr>
<tr>
<td>5</td>
<td>Lampiran</td>
<td>: <?php echo "$data[lampiran]";?></td>
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