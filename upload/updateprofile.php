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
<script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("password2").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>
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

  <h2>Hello,  <span style="color: blue"> <?php echo $_SESSION['membername']?></span> change your account details.</h2> <br />
  <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#needblood">Change Account Details</button></p> <br />           
  <?php $membern=$_SESSION['membername'];?>
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
          <h4 class="modal-title">Profile Update Form</h4>
        </div>
        <div class="modal-body">
        <form action="member_update.php" onSubmit="return validate()" method="post">
          <div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password2</label>
									<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password" required="">
								</div>

           <div class="form-group">
									<label for="signin-password" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
								</div>

          
        </div>
        <div class="modal-footer">
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="member_update">Request</button>
        </div>
        </div>
        </form>
      </div>
      
    </div>
  </div>
<?php
	include('user_footer.php');
?>