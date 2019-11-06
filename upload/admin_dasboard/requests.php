<?php
	include('../header.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#members').DataTable();
} );
</script>
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">

  <h2>Hello,  <span style="color: blue"> <?php echo $_SESSION['username']?></span> these are the pending cases. </h2> <br />
  <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmember">Add new</button></p> <br />           
  <table class="table table-bordered" id="members">
    <thead>
      <tr>
        <th>Name</th>
        <th>Car_Type</th>
        <th>Location</th>
        <th>Date Requested</th>
        <th>Address</th>
        <th>Email</th>
		<th>Phone</th>
        <th>Reason</th>
        <th>Action</th>
         
      </tr>
    </thead>
    <tbody>
      <?php
      $members= $connection->query("SELECT * FROM requests WHERE closed='0'");
      while($row = $members->fetch_array()) {
       ?>

      	<tr>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Car_Type'];?></td>
      	<td><?php echo $row['Location'];?></td>
        <td><?php echo $row['Date_Requested'];?></td>
		<td><?php echo $row['Address'];?></td>
        <td><?php echo $row['Email'];?></td>
      	<td><?php echo $row['Phone'];?></td>
        <td><?php echo $row['Reason'];?></td>
      		
      		<td><button type="button" data-toggle="modal" data-target="#deletemember<?php echo $row['Request_ID']?>" class="btn btn-danger">Close Case</button>
      		</td>
      	</tr>
      	 <!-- delete city modal -->
      	<div class="modal fade" id="deletemember<?php echo $row['Request_ID']?>" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you sure ?</h4>
        </div>
        <div class="modal-body">
          <p>Want to remove this from pending requests?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <a href="closecase.php?Request_ID=<?php echo $row['Request_ID'];?>"> <button type="button" class="btn btn-danger">Close Case</button></a>
        </div>
      </div>
    </div>
  </div>
  <!-- end of delete state modal

  <!-- edit member modal -->
  <div class="modal fade" id="editmember<?php echo $row['member_id'];?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Member</h4>
        </div>
        <div class="modal-body">
        <form enctype="multipart/form-data" action="edit_member.php?member_id=<?php echo $row['member_id'];?>" method="post" >
         <div class="form-group">
           <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name']?>"></input>
         </div>
          <div class="form-group">
           <input type="text" name="username" id="username" class="form-control" value="<?php echo $row['username']?>" disabled=""></input>
         </div>

          <div class="form-group">
           <input type="text" name="password" id="password" class="form-control" disabled="" value="<?php echo $row['password']?>" ></input>
         </div>
         
         <div class="form-group">
           <input type="file" name="photo" id="photo" class="form-control" ></input>
         </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Edit</button>

        </div>
      </div>
      </form>
      
    </div>
  </div> 
   
<?php }
      ?>
    </tbody> 
  </table>
</div>
	</div>
</div>

<!-- add state modal -->
<div class="modal fade" id="addmember" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Members</h4>
        </div>
        <div class="modal-body">
        <form action="add_member.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
          	<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"></input>
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter username"></input>
          </div>

          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password"></input>
          </div>
          
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"></input>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone"></input>
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" name="address" id="address" placeholder="Enter Address"></textarea>
          </div>
          
          <div class="form-group">
            <input type="file" class="form-control" name="photo" id="photo" ></input>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="addmember">Add</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>
<?php
	include('../footer.php');
?>