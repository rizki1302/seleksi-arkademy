<?php
function gambarBintang($angka){
	if ($angka % 2 == 1) {
	
	$tengah = ($angka / 2);
	echo " "; //untuk membuat presisi tetapi pada saat di "echo" algoritmanya tidak dipakai
	for ($i=0; $i < $tengah ; $i++) { 
		for ($j=0; $j < $angka ; $j++) { 
				if ($i === 0) {
					echo "*";
				}
				else{
					if ($j === $i || $j === ($angka - $i)  and $j !== $i) {
						echo "*";
					}elseif (($i + 1)  === $j) {
						echo "*";
					}
					else{
						echo " ";
					}
				}
			
		}
		echo "\n";
	}
	}
	else {
		echo "angka harus ganjil";
	}
}


$a = 11;
gambarBintang($a);

?>