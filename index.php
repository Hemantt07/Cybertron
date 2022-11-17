<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!-- font awesome kit -->
<script src="https://kit.fontawesome.com/0ebdf5709a.js" crossorigin="anonymous"></script>
<!-- jquery-->
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>
<style type="text/css">

    /* Custom font	*/
    @font-face {
	  font-family: eurostilebold;
	  src: url(EurostileExtendedBlack.ttf);
	}

	.container{
		width: 100%;
		background-color: lightgrey;
		height: 100%;
	}

	.sidebar{
		position: fixed;
		left: -20%;
		top: 0;
		width: 20%;
		height: 100%;
		z-index: 10;
		transition: 0.4s;
		background-color: rgb(0,0,0.8);
		padding-right: 0px!important;
	}
	.sidebar ul li{
		padding: 15px 10px;
		cursor: pointer;
	}
	.cool-link {
		font-size: 25px;
		color: grey!important;
		text-decoration: none;
		font-family: "Goudy Bookletter 1911", sans-serif;
	    display:inline-block;
	    margin:0 auto;
	    text-decoration: none;
	}

	.cool-link::after {
	    content: '';
	    display: block;
	    width: 0;
	    height: 2px;
	    background: white;
	    transition: width .3s;
	}

	.cool-link:hover::after {
	    width: 100%;
	}

	#close{
	  position: absolute;
	  top: 50px;
	  right: 45px;
	  font-size: 40px;
	  color: white;
	  text-decoration: none;
	}

	img{
		width: 100%;
		height: auto;
	}

	.col-lg-4, .col-md-6, .col-sm-12{
		
		background-color: white;
		padding: 0;
		margin-bottom: 10px;	
		border: 1px solid grey;
		transition: all linear 0.4s;
	}

	.hit:hover .text{
		display: block;
	}

	.hit text{
		transition: 0.8s;
		-webkit-transition: .5s ease-in-out;
	    -moz-transition: .5s ease-in-out;
	    -o-transition: .5s ease-in-out;
	    transition: .5s ease-in-out;
	}

	.hit:hover img{
		opacity: 0.2!important;
	}

	.hit{
		height: 15em;
		overflow: hidden;

	}

	.hit img{
		transition: 0.8s;
	}

	.text{
		width: 100%;
		padding: 20px;	
		text-align: center;
		font-variant: small-caps;
		position: absolute;
		color: white;
		height: 100%;
		left: 0;
		top: 0;	
		display: none;
	}

	.text p{
		text-align: justify!important;
		font-size: 100%;;
		color: black;
		letter-spacing: 0;
		line-height: 20px;
		text-transform: uppercase;
		transition: 0.9s;
	}


	.img1{
		width: 100%;
		overflow: hidden;
		position: relative;
		transition: 0.8s;
	}

	.text a{
		cursor: pointer;
		color: black;
		transition: 0.9s;
	}

	
	.title{
		display: inline!important;
		text-align: center;
		width: 95%;
	}	
	.col-12{
		position: relative;
		left: 0;
		transition: 0.4s;
	}



	.sub_menu {
		position: fixed;
		left: 20%;
		top: 25%;
		width: 12%;
		background-color: rgb(0,0,0.8);
		display: none;
		transition: all 0.9s linear;
		overflow: hidden;
		z-index: 99;
	}

	.sub_menu li{
		padding: 10px 20px;
	}

	.text a{
		color: black;
		width: 300px;
		border: 2px black solid;
		text-decoration: none;
		padding:10px 30px;
		margin: 10px auto;
		display: block;
		font-size: 25px;
		font-variant: all-small-caps;
		transition: 0.1s;
	}

	.text a:hover {
		background-color: grey;
	}

	hr{
		border-top: 5px solid green;
	}

	.sub_menu_head:hover .sub_menu{
		display: block;
	}

</style>
<body style="transition: 0.4s">

	<a href="#">
		<div style="background-color: white; color: black; position: fixed; right: 3%; bottom: 3%; padding: 0px; z-index: 99; border-radius: 100%;">
		<img style="width: 30px" src="./images/circled-up-2.png">
		</div>
	</a>

	<div class="container-fluid" id="main">

		<div class="row" style="height:auto; background-color: white; position: sticky; top: 0; z-index: 9;" >
			<span class="fa-solid fa-bars" style="width: 5%; font-size: 30px; cursor: pointer; padding: 15px;" id="side"></span>
			<h1 class="title">Welcome</h1>
		</div>
		<div class="row">
			<div class="sidebar">
				<ul type="none">
					<a href="#" id="close">&times;</a>
					<li></li>
					<li></li>
					<li></li>
					<li><a href="css.php" class="cool-link">Home❤</a></li>
					<li class="sub_menu_head">
						<a href="#" class="cool-link ">About Us😊</a>
						<ul type="none" class="sub_menu">
							<li><a href="" class="cool-link">Address</a></li>
							<li><a href="" class="cool-link">Mobile</a></li>
							<li><a href="" class="cool-link">Map</a></li>
							<li><a href="" class="cool-link">Fax</a></li>
							<li><a href="" class="cool-link">Email</a></li>
						</ul>
				    </li>
					<li><a href="#" class="cool-link">Contact Us😂</a></li>
					<li><a href="#" class="cool-link">Another🎂</a></li>
					<li><a href="#" class="cool-link">Random😎</a></li>
					<li><a href="#" class="cool-link">More😉</a></li>
				</ul>
	        </div>
	        

			<div class="col-12">
				<div class="row">

					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			

					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://static.pexels.com/photos/7357/startup-photos.jpg">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://static.pexels.com/photos/262550/pexels-photo-262550.jpeg">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?h=350&auto=compress&cs=tinysrgb">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://images.pexels.com/photos/534164/pexels-photo-534164.jpeg?h=350&auto=compress&cs=tinysrgb">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://cdn.pixabay.com/photo/2018/04/09/19/55/low-poly-3305284_960_720.jpg">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://cdn.pixabay.com/photo/2018/04/06/13/46/poly-3295856_960_720.png">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://cdn.pixabay.com/photo/2018/03/30/15/12/dog-3275593_960_720.jpg">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://cdn.pixabay.com/photo/2018/03/30/15/11/deer-3275594_960_720.jpg">
					
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p>
							</div>	 </div>                              </div>

					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			

					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://static.pexels.com/photos/7357/startup-photos.jpg">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://static.pexels.com/photos/262550/pexels-photo-262550.jpeg">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?h=350&auto=compress&cs=tinysrgb">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://images.pexels.com/photos/534164/pexels-photo-534164.jpeg?h=350&auto=compress&cs=tinysrgb">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://cdn.pixabay.com/photo/2018/04/09/19/55/low-poly-3305284_960_720.jpg">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://cdn.pixabay.com/photo/2018/04/06/13/46/poly-3295856_960_720.png">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://cdn.pixabay.com/photo/2018/03/30/15/12/dog-3275593_960_720.jpg">
						
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p> 
						</div> 
					</div>

					</div>
			
					<div class="col-lg-4 col-md-6 col-sm-12 hit">

						<div class="img1">
							<img class="img-fluid" src="https://cdn.pixabay.com/photo/2018/03/30/15/11/deer-3275594_960_720.jpg">
					
							<div class="text"> <a href="card.php"
							target="__blank">Card</a> <p>When creating or
							editing a Blog archive page or a Homepage that
							shows the latest posts, make sure that you are
							first creating an Archive Template through the
							Theme Builder. Then, when you wish to edit the
							page again, go through the Theme Builder >
							Templates > Edit With Elementor.</p>
							</div>	 
						</div> 
					</div> 
				</div> 
			</div> 
			<hr>
		</div> 
	</div>


<!-- script -->
<script type="text/javascript">
   	$(document).ready(function(){
	  $("#side").click(function(){
	    $(".sidebar").css({"left":"0"}),
	    $(".col-12").css({"width":"80%","left":"20%","filter":"brightness(0.3)"});
	  });

	  $("#close").click(function(){
	    $(".sidebar").css({"left":"-20%"}),
	    $(".col-12").css({"width":"100%","left":"0%","filter":"brightness(1)"});
	  });

	});
</script>

</body>
</html>