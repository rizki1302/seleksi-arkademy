<?php 

function seleksi($angka){
	$hasil_temp = explode('.', $angka);
	print_r($hasil_temp);
	$hasil = (int) implode('', $hasil_temp);
	return $hasil;
}

$a = "1.000.000";
echo seleksi($a);


?>
