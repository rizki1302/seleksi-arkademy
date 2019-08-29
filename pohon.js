
function hitungPohon(awal, tahun){
	var sekarang = 2021;
	var akhir = awal;
	for (var i=0; i < tahun ; i++) { 
			for (var j=0; j < 4 ; j++) { 
				if (j === 0) {
					 akhir += 1;	
				}else if(j === 1){
					akhir = Math.pow(akhir, 3);
				}else if (j === 2) {
					akhir -= 1.5;
				}else if(j === 3){
					var tambah = akhir * 0.15;
					akhir += tambah;
					if (sekarang % 2 == 0) {
						var kurang = akhir * 0.5;
						akhir -= kurang;
					}
					sekarang++; 
				}
			}
	}
	return akhir;

}

var a = 2 ;
var t = 2 ;
console.log(hitungPohon(a, t));
