<?php
	include('user_header.php');
	include('connection.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript">
	$(document).ready(function() {
    $('#request').DataTable();
} );
</script>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">

  <h2>Hello,  <span style="color: blue"> <?php echo $_SESSION['membername']?></span> You can request for servicing now.</h2> <br />
  <p>Reach our hotline number <strong>0745 061 881</strong> and a plumber will be right there with you!</p>
  <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#needblood">Request For A Plumber</button></p> <br />           
  
</div>
	</div>
</div>

<!-- add state modal -->
<div class="modal fade" id="needblood" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Plumber Request Form</h4>
        </div>
        <div class="modal-body">
        <form action="needbd.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
          	<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"></input>
          </div>
          
          <div class="form-group">
           <select name="main area of issue" class="form-control">
             <option value="saloon"> sink </option>
             <option value="suv">toilet </option>
			 <option value="suv">drainage </option>
             <option value="other">Other </option>
           </select>
          </div>
		  
		  
		  <div class="form-group">
		  <p> Select preferred plumber</p>
           <select name="mechanic" class="form-control">
			<?php 
				$sql = mysqli_query($connection, "SELECT username FROM users WHERE usertype='mechanic'");
				while ($row = $sql->fetch_assoc()){
			?>
				<option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
			<?php
			// close while loop
			}
			?>
           </select>
          </div>

          
          <div class="form-group">
            <input type="text" class="form-control" name="location" id="location" placeholder="Enter Current Location"></input>
          </div>
          
         
          <div class="form-group">
            <input type="text" class="form-control" name="datepicker" id="datepicker" placeholder="Enter date"></input>
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" name="address" id="address" placeholder="Enter Address"></textarea>
          </div>

           <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"></input>
          </div>

           <div class="form-group">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number"></input>
          </div>
             <div class="form-group">
            <textarea type="text" class="form-control" name="reason" id="reason" placeholder="Enter Reason"></textarea>
          </div>

          
        </div>
        <div class="modal-footer">
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="needbd">Request</button>
        </div>
        </div>
        </form>
      </div>
      
    </div>
  </div>
<?php
	include('user_footer.php');
?>