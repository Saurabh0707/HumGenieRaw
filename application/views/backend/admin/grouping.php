<hr>
<div class="row">
<div id="grouping" class="col-sm-12">
<?php if($this->session->flashdata('created_group')){ ?>
      <div class='alert alert-success row' style="text-align: center;">
      
    <?php echo $this->session->flashdata('created_group');
        
      ?>
  </div>
  <?php }?>
  <?php if($this->session->flashdata('created_group_error')){ ?>
      <div class='alert alert-danger row' style="text-align: center;">
      
    <?php echo $this->session->flashdata('created_group_error');
        
      ?>
  </div>
  <?php }?>
	<div class="panel panel-default">
  	<div class="panel-heading text-center"><h2>GROUPING<h2></div>
  	<div class="panel-body">
  		<h2>Your Students</h2>
		<input type="text" id="myInputName" onkeyup="searchByName()" placeholder="Search for names..." title="Type in a name">
		<input type="text" id="myInputGender" onkeyup="searchByGender()" placeholder="Search for gender..." title="Type in a gender">
		<input type="text" id="myInputBirthday" onkeyup="searchByBirthday()" placeholder="Search for birthday..." title="Type in a Birthday">
		<input type="text" id="myInputDorm" onkeyup="searchByDorm()" placeholder="Search for dormitory_id..." title="Type in a dormitory_id">
		<input type="text" id="myInputTrans" onkeyup="searchByTrans()" placeholder="Search for transport_id..." title="Type in a transport_id">
		<form action="index.php?admin/postgrouping" method="post">
			<h3>Select Students</h3>
			<table id="myTable" class="table table-bordered">
			  <tr class="header">
			    <th>Name</th>
			    <th>Sex</th>
			    <th>Birthday</th>
			    <th>Dormitory Id</th>
			    <th>Transport_Id</th>
			    <th>check</th>
			</tr>
			  <?php 
			  foreach ($query->result() as $row)
	        	{
	         	?>
			  <tr>
			    <td><?php echo $row->name;?></td>
			    <td><?php echo $row->sex;?></td>		  
			    <td><?php echo $row->birthday;?></td>		  
			    <td><?php echo $row->dormitory_id;?></td>		  
			    <td><?php echo $row->transport_id;?></td>
			    <td>
	            <div class="checkbox">
	                <input type="checkbox" name="mycheck[]" id="<?php echo $row->student_id;?>" value="<?php echo $row->student_id;?>" autocomplete="off">
	            </div>
	          </td>		  
			  </tr>
			  <?php } ?>  	
			</table>
			<div class="form-group row">
      				<label for="grouping_name" class="col-sm-4 col-form-label">Group Name</label>
    				<input type="text" name="grouping_name" class="col-sm-8 form-control" id="grouping_name" placeholder="Group Name">
   			</div>

   			
			<div class="form-group row">
      			<div class="offset-sm-6 col-sm-4">
        			<button type="submit" class="btn btn-primary">Create Group</button>
      			</div>
    		</div>
		
		</form>
		</div>
</div>
</div>
</div>
<hr>
<head>
<style>
* {
  box-sizing: border-box;
}

#myInputName,#myInputGender,#myInputBirthday, #myInputDorm, #myInputTrans   {
  background-image: url('');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>


<script>
function searchByName() {
	var input, filter, table, tr, td, i;
  input = document.getElementById("myInputName");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function searchByGender() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInputGender");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
  	console.log(tr[i].getElementsByTagName("td")[1]);
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function searchByBirthday() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInputBirthday");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
  	console.log(tr[i].getElementsByTagName("td")[1]);
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function searchByTrans() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInputTrans");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
  	console.log(tr[i].getElementsByTagName("td")[1]);
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function searchByDorm() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInputDorm");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
  	console.log(tr[i].getElementsByTagName("td")[1]);
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
