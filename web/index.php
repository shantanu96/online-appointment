
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Full Calender CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
	<!-- Product Card -->
	<link rel="stylesheet" type="text/css" href="../css/productcard.css">
	<!-- ShoppingCart Page -->
	<link rel="stylesheet" type="text/css" href="../css/cart.css">
	<!-- payment page -->
	<link rel="stylesheet" type="text/css" href="../css/payment.css">
	<!-- main css -->
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<!-- font awesome -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- jQuery -->
	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	<script
	  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
	  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
	  crossorigin="anonymous"></script>

	<!-- Moment -->
	<script src='https://fullcalendar.io/js/fullcalendar-3.9.0/lib/moment.min.js'></script>
	<!-- Full Calendar -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

	<script src="../js/schedule.js"></script>
	

	<script src="../js/main.js"></script>

</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">PetDoctor</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	    <?php if (isset($_SESSION) && isset($_SESSION['user_id'])): ?>
	    	<li class="nav-item">
		       		<a class="nav-link" href="<?php echo "Dashboard.php"; ?>">Dashboard</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo "Schedule.php"; ?>">Schedule</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Products
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="<?php echo "ForDogs.php"; ?>">For Dogs</a>
		          <a class="dropdown-item" href="<?php echo "ForCats.php"; ?>">For Cats</a>
		        </div>
		      </li>
	    <?php endif ?>
	     
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	    	<?php if (isset($_SESSION) && isset($_SESSION['user_id'])): ?>
	    		<a class="btn btn-warning my-2 my-sm-0 mx-2" id="cartBtn" href="http://localhost/petdoctor/web/controllers/Cart.php">Cart</a>
	      		<a href="http://localhost/petdoctor/web/controllers/Logout.php" id="dangerBtn" class="btn btn-danger my-2 my-sm-0 mx-2" >Logout</a>
	    	<?php else: ?>
	    		 <a href="" class="btn btn-outline-success my-2 my-sm-0 mx-2"  data-toggle="modal" data-target="#loginModal">Login</a>
	      		<a href="" class="btn btn-success my-2 my-sm-0 mx-2" data-toggle="modal" data-target="#signupModal">Signup</a>
	    	<?php endif ?>
	     
	    </form>
	  </div>
	 
	</nav>
 	<!-- Signup Modal -->
	<div class="modal fade" id="signupModal">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Signup</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	      <form id="signupform" method="POST">
		      <div class="modal-body">
		      	<div class="form-group">
				    <label for="full_name">Full Name:</label>
				    <input type="text" name="full_name" class="form-control" id="full_name" required>
				 </div>
		        <div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="email" name="email" class="form-control" id="email" required>
				 </div>
				 <div class="form-group">
				    <label for="mobile">Mobile Number:</label>
				    <input type="text" name="mobile" class="form-control" id="mobile" required>
				 </div>
				 <div class="form-group">
				    <label for="pass">Password:</label>
				    <input type="password" name="pass" class="form-control" id="pass" required>
				</div>
				<div class="form-group">
				    <label for="confirm_pass">Confirm Password:</label>
				    <input type="confirm_pass" name="confirm_pass" class="form-control" id="confirm_pass" required>
				</div>
				<div class="form-group">
					<label for="repass">Gener:</label>
				   <div class="radio">
					  <label><input type="radio" name="gender" value="male"> Male</label>
					</div>
					<div class="radio">
					  <label><input type="radio" name="gender" value="female"> Female</label>
					</div>
				</div>
				<div class="form-group">
				    <label for="address">Address:</label>
				    <textarea name="address" class="form-control" id="address"></textarea>
				</div>
		      </div>
	  	  
		      <!-- Modal footer -->
		      <div class="modal-footer">
		      	<input type="submit" class="btn btn-success" value="Signup" id="btnSignup">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<!-- Login Modal -->
	<div class="modal fade" id="loginModal">
	  <div class="modal-dialog">
	    <div class="modal-content">

	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Login</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <!-- Modal body -->
	      <form id="loginform">
		      <div class="modal-body">
		        <div class="form-group">
				    <label for="lemail">Email address:</label>
				    <input type="email" name="email" class="form-control" id="lemail" required>
				 </div>
				 <div class="form-group">
				    <label for="lpass">Password:</label>
				    <input type="password" name="pass" class="form-control" id="lpass" required>
				</div>
		      </div>
	  	  
		      <!-- Modal footer -->
		      <div class="modal-footer">
		      	<input type="submit" value="Login" class="btn btn-success" id="btnLogin">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>



	<div class="container-fluid">
		<?php include 'view/'.$view;?>
	</div>


	<footer class="page-footer font-small bg-dark mt-2">

	  <!-- Copyright -->
	  <div class="footer-copyright text-center py-3 text-muted">© 2018 Copyright:
	    <a href=""> PetDoctor</a>
	  </div>
	  <!-- Copyright -->

	</footer>

	<!-- Scripts -->
	<!-- For Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	

</body>
</html>