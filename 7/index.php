<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>
<body>
	<?php 
include_once 'crud.php';
$crud = new crud();
$query = $crud->lihatData();
$hobby = $crud->selectData("hobi");
$kategori = $crud->selectData("kategori");
?>
<div class="container-fliuid">
	<nav class="navbar navbar-expand-sm bg-light navbar-light jarak">
		<img src="arkademy.png" id="icon">
		<h5>Arkademy Bootcamp</h5>
	</nav>
	
	<div class="row">


  <!-- The Modal -->
  <div class="modal fade" id="hapus">
    <div class="modal-dialog">
      <div class="modal-content">
     
        <div class="modal-header"><button type="button" class="close success" data-dismiss="modal">×</button></div>
        <!-- Modal body -->
        <div class="modal-body">
        		<center><i class='fas fa-check jarak-kecil' style='font-size:36px'></i></center>
        		  <h3 class="text-center">Data Berhasil Dihapus</h3>
        </div>
        
     
        
      </div>
    </div>
  </div>


  <!-- The Modal -->
  <div class="modal fade" id="pesanUpdate">
    <div class="modal-dialog">
      <div class="modal-content">
     
        <div class="modal-header"><button type="button" class="close success" data-dismiss="modal">×</button></div>
        <!-- Modal body -->
        <div class="modal-body">
        		<center><i class='fas fa-check jarak-kecil' style='font-size:36px'></i></center>
        		  <h3 class="text-center">Data Berhasil Diubah</h3>
        </div>
        
     
        
      </div>
    </div>
  </div>
		
		
  <!-- The Modal -->
  <div class="modal fade" id="pesan">
    <div class="modal-dialog">
      <div class="modal-content">
     
        <div class="modal-header"><button type="button" class="close success" data-dismiss="modal">×</button></div>
        <!-- Modal body -->
        <div class="modal-body">
        		<center><i class='fas fa-check jarak-kecil' style='font-size:36px'></i></center>
        		  <h3 class="text-center">Tambah Data Berhasil</h3>
        </div>
        
     
        
      </div>
    </div>
  </div>
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
     
       <div class="modal-header"><button type="button" class="close" data-dismiss="modal">×</button></div>
        <!-- Modal body -->
        <div class="modal-body">
        	<h6 id="keterangan">Add Data</h6>
        	<form id="form1">
        	<div class="form-group">
         	<input type="text" name="name" class="form-control" placeholder="Name" id="nama">
         	</div>
			
         	<div class="form-group">
         	<select name="Hobby" class="form-control" id="hobi">
         		<option>Hobby</option>
         		<?php 
         			while ($row = $hobby->fetch_assoc()) {
         				
         		?>
         		<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
         		<?php 
         			}
         		?>
         	</select>
         	</div>

         	<div class="form-group">
         	<select name="category" class="form-control" id="kategori">
         		<option>Kategory</option>
         		<?php 
         			while ($row = $kategori->fetch_assoc()) {
         				
         		?>
         		<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
         		<?php 
         			}
         		?>
         	</select>
         	</div>

         	<input type="text" name="id" hidden="hidden" id="id">
         	
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" id="add">Add</button>
             <button type="button" class="btn btn-warning" id="update">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
	</div>		

	<div class="row jarak-kecil">
		<div class="col-lg-9"></div>
		<div class="col-lg-3">
			<button class="btn btn-warning" data-toggle="modal" data-target="#hapus" id="pesanHapus" hidden>hapus</button>
			<button class="btn btn-warning" data-toggle="modal" data-target="#pesanUpdate" id="pesanUpdatebutt" hidden>Update</button>
			<button class="btn btn-warning" data-toggle="modal" data-target="#pesan" id="lihat" hidden>lihat</button>
			<button class="btn btn-warning" data-toggle="modal" data-target="#myModal" id="bukaForm" >Add</button>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
		<table class="table text-center table-bordered table-striped">
			<thead>
   			 		<tr>
	   			 		<th>Name</th>
	   			 		<th>Hobby</th>
	   			 		<th>Category</th>
	   			 		<th>Action</th>
   			 		</tr>
   			 	</thead>
   			 	<tbody>
   			 		<?php 
   			 			while ($row = $query->fetch_assoc()) {
   			 		?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['hobby']; ?></td>
							<td><?php echo $row['category']; ?></td>
							<td><button class="btn hapus" id="<?php echo $row['id_nama']; ?>"><i class="far fa-trash-alt"></i></button> <button class="btn edit"  id="<?php echo $row['id_nama']; ?>"><i class='far fa-edit'></i></button></td>
						</tr>
   			 		<?php 
   			 			}
   			 		?>
   			 	</tbody>
		</table>
		</div>
		<div class="col-lg-2" id="hasil"></div>
	</div>


</div>
<script type="text/javascript">




	$(document).ready(function(){
		$('#update').hide();
			var form = $('#form1');
	var lihat = $('#lihat');

			$('.edit').bind("click", function(){
				var divs = $(".edit");
				$('#keterangan').html('Update Data');
   				 var curIdx = divs.index($(this));
   				 var id = $(".edit")[curIdx].id;
   				  $.ajax({url: "proses.php?proses=select&&id="+id, dataType: "script",  success: function(result){
   					$('#bukaForm').click();
   					$('#add').hide();
					$('#update').show();
   					$('#id').val(id);

 				 }});
			
			});

			$('#update').click(function(){
				var id = $('#id').val();
				var name = $('#nama').val();
	var hobby = $('#hobi').val();
	var category = $('#kategori').val();
	 	$.ajax({url: "proses.php?proses=update&&id="+id, type:"POST", data:{name : name, hobby: hobby, category : category}, dataType: "script",  success: function(result){
	 		console.log(result);
	 		$('#myModal').modal('hide');
	 		$('#update').hide();
					$('#add').show();
					$('#pesanUpdatebutt').click();


  }});
			})

			

			
			$('.hapus').bind("click", function(e){
				var divs = $(".hapus");

   				 var curIdx = divs.index($(this));
   				 var id = $(".hapus")[curIdx].id;
   				  $.ajax({url: "proses.php?proses=delete&&id="+id, dataType: "script",  success: function(result){
   	
   			

 				 }});
				
			});


			$('.success').click(function(){
				location.reload(true);
			})

			$("#add").click(function(){
				var name = $('#nama').val();
	var hobby = $('#hobi').val();
	var category = $('#kategori').val();
		// console.log(name+hobby+category);
  		 $.ajax({url: "proses.php?proses=add", type:"POST", data:{name : name, hobby: hobby, category : category}, dataType: "script",  success: function(result){


  }});
});
	})
</script>
</body>
</html>