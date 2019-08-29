function bioadata(name1, age1, address1, hobbies1, married1, school1, skills1, interest1){
var nama = name1; 
var umur = age1;
var alamat = address1;
var hobi = hobbies1;
var status = married1;
var sekolah = school1;
var skil = skills1;
var minat = interest1; 

var hasil = {};
hasil.name = nama;
hasil.age = umur;
hasil.address = alamat;
hasil.hobbies = hobi;
hasil.school = sekolah;
hasil.skill = skil;
hasil.interest = minat;

var result = JSON.stringify(hasil);
return result;
}

var nama = "rizki";
var umur = 23;
var alamat = "manado";
var hobi = ["sepakbola", "adventure", "pemograman"];
var status = true;
var sekolah = {name : "unika de la salle Manado",
				year_in: 2014,
				year_out: 2018};
var skil = {name : "web developer", level : "advanced"};
var minat = true;

var result = bioadata(nama, umur, alamat, hobi, status, sekolah, skil, minat);
console.log(result);



