<?php
if(!empty($_GET['page'])) {
	if($_GET['page']=="dashboard"){
		include 'dashboard.php';

		}elseif($_GET['page']=="skck"){
		include 'skck.php';
		}elseif($_GET['page']=="tambahskck"){
		include 'tambahskck.php';
		}elseif($_GET['page']=="editskck"){
		include 'editskck.php';
		}elseif($_GET['page']=="stnk"){
		include 'stnk.php';
		}elseif($_GET['page']=="tambahstnk"){
		include 'tambahstnk.php';
		}elseif($_GET['page']=="editstnk"){
		include 'editstnk.php';
		}elseif($_GET['page']=="laporanskck"){
		include 'laporanskck.php';
		}elseif($_GET['page']=="laporanstnk"){
		include 'laporanstnk.php';
		}elseif($_GET['page']=="lprnskck"){
		include 'lprnskck.php';
		}elseif($_GET['page']=="ktp"){
		include 'ktp.php';
		}elseif($_GET['page']=="tambahktp"){
		include 'tambahktp.php';
		}elseif($_GET['page']=="editktp"){
		include 'editktp.php';
		}elseif($_GET['page']=="keluar"){
		include 'keluar.php';
		}elseif($_GET['page']=="tambahkeluar"){
		include 'tambahkeluar.php';
		}elseif($_GET['page']=="editkeluar"){
		include 'editkeluar.php';
		}elseif($_GET['page']=="pemohon"){
		include 'pemohon.php';
		}elseif($_GET['page']=="tambahpemohon"){
		include 'tambahpemohon.php';
		}elseif($_GET['page']=="editpemohon"){
		include 'editpemohon.php';
		}elseif($_GET['page']=="kk"){
		include 'kk.php';
		}elseif($_GET['page']=="tambahkk"){
		include 'tambahkk.php';
		}elseif($_GET['page']=="editkk"){
		include 'editkk.php';
		}elseif($_GET['page']=="masuk"){
		include 'masuk.php';
		}elseif($_GET['page']=="editmasuk"){
		include 'editmasuk.php';
		}elseif($_GET['page']=="tambahmasuk"){
		include 'tambahmasuk.php';
		}elseif($_GET['page']=="kuning"){
		include 'kuning.php';
		}elseif($_GET['page']=="tambahkuning"){
		include 'tambahkuning.php';
		}elseif($_GET['page']=="editkuning"){
		include 'editkuning.php';
		}elseif($_GET['page']=="cetak_skck"){
		include 'cetak_skck.php';
		}elseif($_GET['page']=="tglindo"){
		include 'tglindo.php';
		}elseif($_GET['page']=="print_ktp"){
		include 'print_ktp.php';
	}
}elseif(empty($_GET['page'])) {
	include 'eror.php';	
}
?>