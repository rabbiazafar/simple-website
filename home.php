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

 <style scoped="">
.scrollspy-example {
position: relative;
height: 200px;
margin-top: .5rem;
overflow: auto;
}
</style> 
<script type="text/javascript">
	function main() {
		alert('welcome to our website..')
	}
</script>

   </head>
<body onload="return main()">
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
     <input  type="text" id="search" placeholder="Search for Product catagory or brand...." name="search"> 
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
		<img id="img" src="dess.jpg"></div></div>
		<br>
<div class="container">
		<div class="row" id="mainarea">
		<div class="col" id="leftsidebar">

			<div class="row">

				<h5 class="cat">Short By</h5>
				<h5 class="cat">Cataogry</h5><br>
			<ul id="left-ul">
				<li ><a class="links"  href="#">Electronics</a></li><br>
					<li><a class="links" href="#">WomenStore</a></li><br>
					<li><a class="links" href="#">MenStore</a></li><br>
					<li><a class="links" href="#">Office&media</a></li><br>
					<li><a class="links" href="#">My Cart</a></li><br>
					<li><a class="links" href="#">Kids Store</a></li><br>
					<li><a class="links" href="#">Home & Living</a></li><br>
					<li><a class="links" href="#">Stationery</a></li><br>
					<li><a class="links" href="#">More Store</a></li></ul></div></div>		
		

		<div class="col-8" id="main">
	
	<h2 class="cat-1"> Shopping....</h2>
		<div style="margin-left: 40%" class="btn-group">
  <button type="button" class="btn btn-secondary">Products..</button>
  <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#!">Action</a>
    <a class="dropdown-item" href="#!">Another action</a>
  </div></div>


		<div class="row" id="sub-main">
		
			<div class="col"><img src="4.jpg"></div>
			<div class="col"><img src="5.jpg"></div></div>
		<div class="row" id="sub-main">
			<div class="col"><img src="6.jpg"></div>
			<div class="col"><img src="7.jpg"></div></div>
		<div class="row" id="sub-main">
			<div class="col"><img src="8.jpg"></div>
			<div class="col"><img src="9.jpg"></div></div>
		<div class="row" id="sub-main">
			<div class="col"><img src="1.jpg"></div>
			<div class="col"><img src="2.jpg"></div></div>	
	</div>


			<div class="col" id="rightsidebar">
			<div class="row">
					<p class="cat">New Arrivel..</p>
					<img class="cats" src="1.jpg">
					<p class ="cat">New Arrivel..</p>
					<img class="cats" src="2.jpg">
				
					<p class="cat">New Arrivel..</p>
					<img class="cats" src="3.jpg">	
			</div>
			</div>
	
	</div>
		</div>
		<br>
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
				<abbr title="instragram"><a href="https://ww.instragram.com"><i class="fab fa-instagram"></i></a></abbr>
				<abbr title="linkedin"><a href="https://www/linkedin.com"><i class="fab fa-linkedin-in"></i></a><abbr></div>
		
			</div>


<div class="row">
<div id="footer">
<p ><center>All &copy Copy Rights  is Reserved..</center></p>
</div>
</div>



</html>
</body>
