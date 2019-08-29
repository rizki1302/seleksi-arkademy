<?php 
function tekaTeki($n){
$awal;
$saklar  = [1,2,3];

$batasSaklar = rand(1,3);
$hasil = [];
for ($i=0; $i < $n ; $i++) { 
	$batasAngka = rand(1,15);
	$jumlah = 0;
	$angkaRandom=[];
	for ($j=0; $j < $batasAngka ; $j++) { 
		$saklarRandom= rand(1,3);
		$angkaRandom[$j] = $saklarRandom;
	}
	for ($k=0; $k < $batasAngka ; $k++) { 
		for ($l=$angkaRandom[$k]; $l <= 15 ; $l += $angkaRandom[$k]) { 
			$jumlah += 1;
		}
	}
	$hasil[$i] = $jumlah;
}

$teks = "";
	foreach ($hasil as $key => $value) {
		$teks .= "Jumlah lampu yang menyala pada teka-teki ke-".($key+1)." adalah sebnayak $value lampu <br>"; 
	}
	return $teks;

}

$hasil = tekaTeki(6);
echo $hasil;

?>