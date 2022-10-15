<?php ob_start(); ?>
<?php
// ob_end_clean();
// $content = ob_get_contents();
include "koneksi.php";
$content = '
  <style type="text/css">
    .table{border-collapse: collapse;}
    .table th{padding: 8px 5px; background-color: lightgrey;}
    .table td{padding: 8px 5px;}
  </style>
';

  $content .= '

  <page>
       <h5 align="center">PEMERINTAH KABUPATEN BEKASI<br>
LAPORAN DATA SURAT MASUK KECAMATAN TAMBUN SELATAN <br>
Jl. Sultan Hasanudin NO. 254 RT. 001/001 Kode Pos 17511 <br>
=======================================================</h5>
    <div align = "center">
    <table border="1" class="table" align="center">
      <tr>
                <th align="center">No</th>
                <th align="center">Nomor Surat</th>
                <th align="center">Tanggal</th>
                <th align="center">Perihal</th>
                <th align="center">Tujuan Surat</th>
                <th align="center">Lampiran</th>
            </tr>';
                                   
            $no = 1;
        $sql = mysqli_query($con,"SELECT * FROM tbl_keluar");
        while ($data = $sql->fetch_assoc()) {

      $content .='

      <tr>
                <td align="center">'.$no++.'</td>
                <td>'.$data['no_surat'].'</td>
                <td>'.$data['tanggal'].'</td>
                <td>'.$data['perihal'].'</td>
                <td>'.$data['tujuan_surat'].'</td>
                <td>'.$data['lampiran'].'</td>
          </tr>
            ';
            }
        $content .='
        </table>
        </div>
    </page>';                 
                                        
  require_once('assets/html2pdf/html2pdf.class.php');
  // $html2pdf = new HTML2PDF('L','A4','fr');
    $html2pdf = new HTML2PDF('P', 'A4', 'en');
  $html2pdf -> WriteHTML($content);
   ob_end_flush();
  $html2pdf -> Output('doc.pdf', 'FI');
?>