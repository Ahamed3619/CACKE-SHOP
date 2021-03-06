


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>the Fairy cake Shop</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/uikit.min.css" media="all" />
	

    <!-- fontawesome stylesheet -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,900,800,700,300,500' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="wrapper">
		<!-- top header start -->
		<header class="top-header hidden-xs">
			<div class="container">
			 <div class="col-lg-12 no-padding">
				<div class="heading">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						
							<ul class="list-inline">
								<li>
									<a href="tel:+55-417-634-7071"class="phone"><i class="fa fa-phone pr-5 pl-10"></i>  +55 417-634-7071</a>
								</li>
								<li>
									<a href="mailto:sales@carhouse.com"class="mail">
										<i class="fa fa-envelope-o pr-5 pl-10"></i>  sales@cakehouse.com
									</a>
								</li>
							</ul>
					
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						
							<div class="pull-right">
								<a href="signup.html" class="btn btn-grey btn-sm text-uppercase" data-toggle="modal" data-target="productss.phpmyModal-one"><i class="fa fa-user pr-10"></i> Sign Up</a>
								<a href="login.html" class="btn btn-grey btn-sm text-uppercase" data-toggle="modal" data-target="productss.phpmyModal"><i class="fa fa-lock pr-10"></i> Login</a>
								
							</div>
					
					</div>
				</div>
			 </div>
			</div>
		</header>
		<!-- top header end -->
  
  
  
  
  
  
    <section id="header">
      <div class="myNavabr">
        <nav class="navbar navbar-default ">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="index.php">
				<img class="logo" src="img/logo.png" />
			  
			  </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li ><a href="index.php">Home</a></li>
                <li class="dropdown">
				  <a href="productss.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="productss.php">Birthday Cake</a></li>
					<li><a href="productss.php">Marriage cake</a></li>
					<li><a href="productss.php">Special cake</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="productss.php">Discount cake</a></li>
				  </ul>
				</li>
				 <li ><a href="about.php">About Us</a></li>
				  <li id="activess"><a href="contact.php">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </section> <!-- end of header section -->

			   <section id="images-bodi"><!--image-body start-->
						<div class="main-content">
						  <div class="container">
							<div class="col-lg-12 no-padding">
							  <div class="col-lg-2 col-md-2 col-sm-2 no-padding">
								<div class="left-sidebar">
								  
								</div> <!-- end of left-sidebar -->
							  </div>
							  <div class="col-lg-8 col-sm-8">
								<div class="right-sidebar">
								  <h2 class="titles"> contact with Fairy Cake Shop <hr></h2>
								 
								  <p class="text">Send a Message below</p>
								  <a href="#click"data-uk-smooth-scroll="{offset: 90}"class="btn btn-prime btn-xl page-scroll">Message</a>
								  
								</div> <!-- end of right-sidebar -->
							  </div>
							  
							</div>
						  </div>
						 </div>
					 </section> <!-- end of main-body section -->
	
			  <section id="new-body">
	
				 <div class="container">
                    <div class="col-lg-12 no-padding">
				   
						 
						<div class="cake-names">
								
 							<h3 style="text-align:center">Welcome to the Fairy Cake shop contact page</h3> 
							<hr>		
									 
							 	<form action="//submit.form" id="ContactUs100" method="post" onsubmit="return ValidateForm(this);">
				<script type="text/javascript">
				function ValidateForm(frm) {
				if (frm.Name.value == "") { alert('Name is required.'); frm.Name.focus(); return false; }
				if (frm.FromEmailAddress.value == "") { alert('Email address is required.'); frm.FromEmailAddress.focus(); return false; }
				if (frm.FromEmailAddress.value.indexOf("@") < 1 || frm.FromEmailAddress.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.FromEmailAddress.focus(); return false; }
				if (frm.Comments.value == "") { alert('Please enter comments or questions.'); frm.Comments.focus(); return false; }
				return true; }
				</script>
				<table style="width:550px;border:0;" cellpadding="8" cellspacing="0">
				<tr> <td>
				<label for="Name">Name:</label>
				</td> <td> <br>
				<input name="Name" type="text" maxlength="60" style="width:250px;" />
				</td> </tr> <tr> <td>
				<label for="PhoneNumber">Phone number:</label>
				</td> <td> <br>
				<input name="PhoneNumber" type="text" maxlength="43" style="width:250px;" />
				</td> </tr> <tr> <td>
				<label for="FromEmailAddress">Email address*:</label>
				</td> <td> <br>
				<input name="FromEmailAddress" type="text" maxlength="90" style="width:250px;" />
				</td> </tr> <tr> <td>
				<label for="Comments">Comments*:</label>
				</td> <td> <br>
				<textarea name="Comments" rows="7" cols="40" style="width:350px;"></textarea>
				</td> </tr> <tr> <td> <br>
				
				<input type="submit" value="Submit" class="box">
				</td> <td>
					
		
				</td> </tr>
					
				</table>
			</form>
										
							
					  </div>
					  
			  
              </div>
          
        </div>
      
    </section> <!-- end of main-body section -->
	
	
	<section id="map">
		<h3 style="text-align:center;color:orange;tex-transform:uppercase;margin:20px 0px">Find Us on Map</h3> 
        <div id="map-container" class="col-lg-12 col-sm-12 col-md-12"></div>
          
      </section>

	
	
	
	
	
	
		<footer class="main-footer">
				<div class="container">
					<div class="col-lg-4 col-sm-12 col-md-4"id="left-sidebar">
							<a href="index.html">
								<img class="logos" src="img/logos.png" />
							 </a>
							 <p class="description"> A beautiful cake shop for you.You <br/>can order now..</p>
							 <a href="productss.php"class="map">
                                <i class="fa fa-map-marker"></i>
                                Dhanmondi,Sukrabad, Dhaka-1200 
                            </a>
							<br><br>
						
							<a href="tel:+55-417-634-7071"class="mobile">
								<i class="fa fa-phone pr-5 pl-10"></i>  +55 417-634-7071 
							
							</a>
							<br><br>
                            
							<a href="mailto:sales@carhouse.com"class="email">
                                <i class="fa fa-envelope-o pr-5 pl-10"></i> sales@cakeshop.com
                            </a>
							
							<br><br>
							<a href="productss.php" class="twitter">
								<i class="fa fa-twitter-square"></i>
							</a>
							
							<a href="productss.php" class="facebook">
								<i class="fa fa-facebook-square"></i>
							</a>
						
							<a href="productss.php" class="linkedin">
								<i class="fa fa-linkedin-square"></i>
							</a>
						
							<a href="productss.php" class="google">
								<i class="fa fa-google-plus-square"></i>
							</a>
						
							<a href="productss.php" class="rss">
								<i class="fa fa-rss-square"></i>
							</a>
						
							<a href="productss.php" class="vimeo">
								<i class="fa fa-vimeo-square"></i>
							</a>
			
							
					</div>
					<div class="col-lg-4 col-sm-12 col-md-4"id="middle-sidebar">
						<div class="footer-items">
							<h2 class="title">Recent Product</h2>
								<hr>
							
							<div class="media">
							   
									<div class="media-left">
										<a href="productss.php">
											<img class="media-object" src="img/special.jpg"alt="pic-footer-2">
										</a>
									</div>
									<div class="media-right">
										<a href="index.html">Birthday Cake</a>
										<br>
										<br>
										<hr>
										<div class="line-dec-o"></div>
										<span>$15</span>
									</div>
								</div>
								<div class="media">
									<div class="media-left">
										<a href="productss.php">
											<img class="media-object" src="img/cup.jpg" alt="pic-footer-3">
										</a>
									</div>
									<div class="media-right">
										<a href="index.html">Cup Cake</a>
										<br>
										<br>
										<hr>
										<div class="line-dec-o"></div>
										<span>$9</span>
									</div>
								</div>
								<div class="media">
									<div class="media-left">
										<a href="index.html">
											<img class="media-object" src="img/marriage.jpg" alt="pic-footer-1">
										</a>
									</div>
									<div class="media-right">
										<a href="index.html">Marriage cake</a>
										<br>
										<br>
										<hr>
										<div class="line-dec-o"></div>
										<span>$19</span>
									</div>
								</div>
							
					   </div>
						
						
						
					</div>
					<div class="col-lg-4 col-sm-12 col-md-4"id="right-sidebar">
						
						<div class="footer-item">
							<h2 class="title">Gallery</h2>
								<hr>
							<div class="line-dec"></div>
							<div class="one-gallery">
							<a href="productss.php">
								<img src="img/sixty.jpg" alt="01-gallery">
							</a>
							
							<a href="productss.php" class="images">
								<img src="img/sixtyfive.jpg" alt="01-gallery">
							</a>
							
							</div>
							
							<div class="two-gallery">
							<a href="productss.php">
								<img src="img/fiftyseven.jpg" alt="01-gallery">
							</a>
							<a href="productss.php"class="images">
								<img src="img/fiftyeight.jpg" alt="01-gallery">
							</a>
							
							</div>
							
							<div class="three-gallery">
							<a href="productss.php">
								<img src="img/fiftythree.jpg" alt="01-gallery">
							</a>
							<a href="productss.php"class="images">
								<img src="img/fiftytwo.jpg" alt="01-gallery">
							</a>
							</div>
					  </div>
				   </div>

		</footer>
		
    <section id="last-footer">
       <p class="copyright">Copyright @2016 All rights reserved by<span> the cakeshop</span></p>
    </section> <!-- end of footer section -->

  </div> <!-- wrapper end -->
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	 <!-- jQuery easing cdn code link -->
	<script type="text/javascript" src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>

	<script type="text/javascript" src="js/uikit.min.js"></script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
   <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>  
 
      function init_map() {
    var var_location = new google.maps.LatLng(23.7390693,90.378114);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14,

        };
 
    var var_marker = new google.maps.Marker({
      position: var_location,
      map: var_map,
      title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
    var_marker.setMap(var_map); 
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#btn-nav").click(function(){
          $(".hidden-nav").css("right","0");
        });

        $("#btn-close").click(function(){
          $(".hidden-nav").css("right","-300px");
        });

      });

     
    </script>
    <script type="text/javascript">
     $(function() {
    $("#map").googleMap();
    $("#map").addMarker({
      coords: [lat: 23.7390693, lng: 90.378114],
      icon: 'http://www.tiloweb.com/wp-content/uploads/2012/04/logo-e1335400790554.png', // Icon URL,
      url: 'http://www.tiloweb.com' // Link URL
    });
  })
</script>
    

	
	
	
	
	
  </body>
</html>






<!-- Modal-one -->
<div class="modal fade" id="myModal-love" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-sm-12">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ORDER THE CAKE</h4>
      </div>
      <div class="modal-body">
        <div class="myForm col-sm-12">
          <div class="col-sm-8 col-sm-offset-2">
            <form>
			  <div class="form-group">
                <label for="exampleInputUsername">Name</label>
                <input type="username" class="form-control" id="exampleInputUsername" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPhone">Phone</label>
                <input type="phone" class="form-control" id="exampleInputPhone" placeholder="+8801XXXXXXXXX">
              </div>
			  <div class="form-group">
                <label for="exampleInputProduct">Product-Code</label>
                <input type="product" class="form-control" id="exampleInputProduct" placeholder="productss.php234567">
              </div>
			  <div class="form-group">
                <label for="exampleInputQuantity">Quantity</label>
                <input type="Quantity" class="form-control" id="exampleInputQuantity" placeholder="two">
              </div>
			  <div class="form-group">
                <label for="exampleInputAddress">Address</label>
                <input type="Address" class="form-control" id="exampleInputAddress" placeholder="Home: ,village: ,P.O: , Thana: ,District: .">
              </div>
			  
              <button type="submit" class="btn btn-transparent">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-sm-12">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Join with cake shop</h4>
      </div>
      <div class="modal-body">
        <div class="myForm col-sm-12">
          <div class="col-sm-8 col-sm-offset-2">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-transparent">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal-one -->
<div class="modal fade" id="myModal-one" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content col-sm-12">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign-Up with cake shop</h4>
      </div>
      <div class="modal-body">
        <div class="myForm col-sm-12">
          <div class="col-sm-8 col-sm-offset-2">
            <form>
			  <div class="form-group">
                <label for="exampleInputUsername">Username</label>
                <input type="username" class="form-control" id="exampleInputUsername" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">New-Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
			  <div class="form-group">
			    <label for="exampleInputGender">Gender</label><br/>
                <input type="radio" name="imgsel" value="" checked="checked" />Male
                <input type="radio" name="imgsel" value="" checked="checked" />Female
              </div>
              <button type="submit" class="btn btn-transparent">Sign-Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>