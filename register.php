<!DOCTYPE html>
<html>
<head>
	<title>bootstrap learning</title>
	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mystyle.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	
	 #login-form{
			background: #f1730a;
			border-radius: 9px;
			padding-left:30px;
			padding-right: 30px;
			padding-bottom: 30px;
			margin-bottom: 5%;
		}
		 #login-form form h2{
			text-align: center;
			color: white;
			font-weight: bold;
			background:  #2e2e54;
			padding: 12px;
			border-radius: 9px;
		}
		#Sign-In{
			
			background: #2e2e54;
			border-radius: 9px;
			float: right;
			width: 40%;
			padding: 10px;
		}
		#Sign-In1{
			
			background: #2e2e54;
			border-radius: 9px;
			width: 49%;
			padding: 10px;
		}
		#cross{
			float: right;
		}
		#login-span{
			color: white;

		}
		#login-span:hover{
			color: white;
		}
		#sup{
			font-weight: bold;
			color: red;
			font-size: 30px;
		}
		#backword:hover{
			color: white;

		}
		#backword{
			color: white;

		}
		

</style>
 <script type="text/javascript">
 	function main() {
 		alert("welcome...");
 	}
 	function funn() {
 		alert('YOU SUCCESSFULLY REGISTERED....');
 	}
 </script>
</head>
<body onload=" return main()">

	
<div class="row">
			<div class="col-md-12" class="fixed-top" id="div1">
				<ul class="list">
					<li><a class="links" href="home.php"> Home</a></li>
					<li><a class="links" href="myaccount.php">My Account</a></li>
					<li><a class="links" href="track.php">Track Order</a></li>
					<li><a class="links" href="wishlist.php">My Wishlist</a></li>
					<li><a class="links" href="cart.php">My Cart</a></li>
					<li><a class="links" href="home.php>">CheckOut</a></li>
					<li><a class="links" href="register.php">Register</a></li>
					<li><a class="links" href="login.php">Log In</a></li>
					<li><a class="links" href="home.php">Blog</a></li>
					<li><a class="links" href="home.php">My Site</a></li>
					<li><a class="links" href="home.php">Site Map</a></li>
					<li><a class="links" href="home.php">Saller</a></li>
				</ul></div></div><br>
	<form action="/action_page.php">
     <input  type="text" id="search"  placeholder="Search for Product catagory or brand...." name="search"> 
      	<button class="btn btn-info" type="submit" id="btn"><i class="fa fa-search"> Search</i></button>
      	<button class="btn btn-warning" id="cart"><i class="fas fa-cart-arrow-down"> Cart</i></button></form><br>

      	<div class="row" id="div2">
		<ul class="list">
					<li id="ele"><a class="links" href="#">Electronics</a></li>
					<li><a class="links" href="#">WomenStore</a></li>
					<li><a class="links" href="#">MenStore</a></li>
					<li><a class="links" href="#">Office&media</a></li>
					<li><a class="links" href="#">My Cart</a></li>
					<li><a class="links" href="#">Kids Store</a></li>
					<li><a class="links" href="#">Home & Living</a></li>
					<li><a class="links" href="#">Books & Stationery</a></li>
					<li><a class="links" href="#">More Store</a></li></ul></div><br>



<div class="container">
	<div class="row">
		<div class=" offset-3 col-md-6" id="login-form">
			<form> 
			<h2>Create an Account <i id="cross" class="fas fa-times"></i></h2>
			<div class="row">
				<div class="col"><label class="form-group">First Name <sub id="sup" >*</sub></label>
				 <div class="input-group"> <span class="input-group-addon"><i class="fas fa-pencil-alt"></i></span>
					 <input class="form-control" aria-label="Amount (to the nearest dollar)" required=""> 
				</div> 
				</div>
				<div class="col"><label class="form-group">Last Name <sub id="sup" >*</sub></label>
				 <div class="input-group"> <span class="input-group-addon"><i class="fas fa-pencil-alt"></i></span>
					 <input class="form-control" aria-label="Amount (to the nearest dollar)" required=""> 
				</div> </div>
			</div>
			
				<br>
				<label class="form-group">Email: <sub id="sup" >*</sub></label>
				 <div class="input-group"> <span class="input-group-addon"><i class="far fa-envelope"></i></span>
					 <input class="form-control" aria-label="Amount (to the nearest dollar)" required=""> 
				</div> 
				<br>
				<label class="form-group">Password: <sub id="sup">*</sub> </label>
				<div class="input-group"> <span class="input-group-addon"><i class="fas fa-eye"></i></span>
				 <input class="form-control" aria-label="Amount (to the nearest dollar)" required=""> 
				</div> <br>
				<label class="form-group">Confirm Password: <sub id="sup">*</sub> </label>
				<div class="input-group"> <span class="input-group-addon"><i class="fas fa-eye"></i></span>
				 <input class="form-control" aria-label="Amount (to the nearest dollar)" required=""> 
				</div> 
				<br>
				<div class="row" id="login-span">
					<div class="col" id="backword"><a href="login.php"><i style="color: white" class="fas fa-long-arrow-alt-left"> Back to login</i></a></div>
					<div class="col"><div class="btn btn-success" id="Sign-In1" onclick="funn()"> Register </div></div>
				</div>
				
			</form>
		</div>

	</div>

</div>
<nav style="margin-left: 50%" aria-label="Page navigation example">
  <ul class="pager">
  				<li><a href="#">Previous</a></li>
  				<li  class="page-item"><a class="page-link" href="login.php!">1</a></li>
   				 <li class="page-item"><a class="page-link" href="#!">2</a></li>
   				 <li class="page-item"><a class="page-link" href="#!">3</a></li>
 				 <li><a href="#">Next</a></li>
			</ul>
  </nav><br>         
<div class="row" id="sub-footer">
			<div class="col" >
				<p><i style="color: white" class="fas fa-phone-volume"> </i> Contact Us</p>
				<hr>
				<ul style="list-style: none;">
					<li>Cell-Number</li>
					
					<li><abbr style="cursor: pointer;" title="copy"> ####-######</abbr></li>
					
					<li> Email</li>
					
					<li><abbr style="cursor: pointer;" title="copy"> abcd@gmail.com</abbr></li>
					<li>Website</li>
					
					<li><abbr style="cursor: pointer;" title="copy"><a style="color: white" href="#"> www.shoponline.com</a></abbr></li>
				</ul></div>
			<div class="col" >
				<p>OurComunity <i style="color: white" class="fas fa-church"></i></p>

				<hr>
				<ul style="list-style: none;">
					<li>CEO</li>
					
					<li><a style="color: white" href="#">www.CEO.com</a></li>
					
					<li>HR </li>
					
					<li>abcd@gmail.com</li>
					<li>Employees</li>
					<li><abbr style="cursor: pointer;" title="copy">0300-1234567</abbr></li>
					
					
				</ul></div>
				<div class="col">
			<p>Address <i style="color: white" class="fas fa-map-marker-alt"></i></p>
			<hr>
			<p>Georgia Institute of Technology<br>
			North Avenue, Atlanta, GA 30332
			</p>
				

			</div>
			<div class="col" id="social">
			
			
				<abbr title="twitter"><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></abbr>
				<abbr title="facebook"><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></abbr>
				<abbr title="instragram"><a href="https://www.instragram.com"><i class="fab fa-instagram"></i></a></abbr>
				<abbr title="linkedin"><a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a><abbr></div>
		
			</div>

			<div class="row">
<div id="footer">
<p ><center>All &copy Copy Rights  is Reserved..</center></p>
</div>
</div>
</div>


</body>
</html>