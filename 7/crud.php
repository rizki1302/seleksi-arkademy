<?php 
/**
 * 
 */
class crud 
{
	private $servername = "localhost";
   	private $username = "root";
   	private $password = "";
   	private $dbname = "arkademi";
   	private $conn;
	
	function __construct()
	{
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	}

	public function lihatData(){
		$sql = "SELECT n.id as id_nama , h.id as id_hobby, k.id as id_kategori , n.name as name , h.name as hobby, k.name as category from nama as n left join hobi as h on n.id_hobby = h.id left join kategori as k on h.id_category = k.id";
		$result = $this->conn->query($sql);
		return $result;
	}

	public function lihatPengguna($nama){
		$sql = "SELECT  n.name as name , h.id as  hobby, k.id as category from nama as n left join hobi as h on n.id_hobby = h.id left join kategori as k on h.id_category = k.id where n.id = '$nama'";
		$result = $this->conn->query($sql);
		$row = $result->fetch_row();
		echo  "$('#nama').val('".$row[0]."');
				$('#hobi option[value=$row[1]]').attr('selected' , 'true');
				$('#kategori option[value=$row[2]]').attr('selected' , 'true')";
	}

	public function selectData($params){
		$sql = "select * from ".$params;
		$result = $this->conn->query($sql);
		return $result;
	}

	public function AddData($params){
		
	 $sql = "INSERT INTO nama(name, id_hobby, id_category) values('$params[0]', '$params[1]' , '$params[2]')";
		$result = $this->conn->query($sql);
		
			echo "$('#myModal').modal('hide');";
			echo "lihat.click();";
	}

	public function deleteData($id){
		$sql = "DELETE From nama where id='$id'";
		$result = $this->conn->query($sql);
			echo "$('#pesanHapus').click();";

	}

	public function updateData($id ,  $params){
		
	 echo $sql = "UPDATE nama set name = '$params[0]', id_hobby = '$params[1]', id_category = '$params[2]' where nama.id = '$id'";
		$result = $this->conn->query($sql);
		
			echo "$('#myModal').modal('hide');";
			echo "$('#pesanUpdatebutt').click();";
	}


}


?>