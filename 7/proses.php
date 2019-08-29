<?php 
include_once 'crud.php';
$proses = $_GET['proses'];
$i = 0;
if ($proses == "add" || $proses == "update") {
if ($proses == "update") {
	$id = $_GET['id'];
}

foreach ($_POST as $key => $value) {
	$params[$i] = $value;
	$i++;
}
}

$crud = new crud();
if ($proses == "add") {
	$crud->addData($params);
}elseif ($proses == "delete") {
	$id= $_GET['id'];
	$crud->deleteData($id);
}elseif ($proses == "select") {
	$id= $_GET['id'];
	$crud->lihatPengguna($id);
}elseif($proses == "update"){
	$crud->updateData($id , $params);
}


?>