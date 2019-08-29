<?php

function hitungPohon($awal, $tahun){
	$sekarang = 2021;
	$akhir = $awal;
	for ($i=0; $i < $tahun ; $i++) { 
			for ($j=0; $j < 4 ; $j++) { 
				
				switch ($j) {
					case 0:
						 $akhir += 1;	
						break;
					case 1:
						 $akhir = pow($akhir, 3);
						break;
					case 2:
						$akhir -= 1.5;
						break;
					case 3:
						$tambah = $akhir * 0.15;
						$akhir += $tambah;
					if ($sekarang % 2 == 0) {
						$kurang = $akhir * 0.5;
						$akhir -= $kurang;
					}
					$sekarang++; 
						break;
					
				}
			}
	}
	return round($akhir, 2)." Meter";

}

$a = 2 ;
$t = 2 ;
echo hitungPohon($a, $t);

?>