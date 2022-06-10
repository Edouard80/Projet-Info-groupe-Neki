<?php 
    session_start();
	if(!isset($_SESSION['user']))
		header('location:index.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title> Neki | Shop NIKE</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>
	<body>
	<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>07 69 76 24 45</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="index.php">
						<!-- replace logo here -->
						<svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
								font-family="AustinBold, Austin" font-weight="bold">
								<g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
									<text id="  Neki">
										<tspan x="108.94" y="325">Neki</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
					<li class="dropdown cart-nav dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-android-cart"></i>Votre boite à chaussures</a>
						<div class="dropdown-menu cart-dropdown">
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
									<img src='images/shop/products/NIKE4/1.jpeg' alt='' data-zoom-image="images/shop/single-products/product-1.jpg" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Dunk Low</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>109.99</span>
									</div>
									<h5><strong>109.99</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->
							<!-- Cart Item -->
							<div class="media">
								<a class="pull-left" href="#!">
								<img src='images/shop/products/adidas1/1.jpeg' alt='' data-zoom-image="images/shop/single-products/product-1.jpg" />
								</a>
								<div class="media-body">
									<h4 class="media-heading"><a href="#!">Forum Low</a></h4>
									<div class="cart-price">
										<span>1 x</span>
										<span>100.00</span>
									</div>
									<h5><strong>100.00</strong></h5>
								</div>
								<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
							</div><!-- / Cart Item -->

							<div class="cart-summary">
								<span>Total</span>
								<span class="total-price">209.99</span>
							</div>
							<ul class="text-center cart-buttons">
								<li><a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a></li>
							</ul>
						</div>

					</li><!-- / Cart -->

				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->

<section>
	<div class="container">
	<div class="row">
			<div class="col-md-12">
		<h3 class="text-center">Bonjour <strong><?php echo $_SESSION['user'];?></strong> </h3>
		<h4 class="text-center">Nous sommes ravis de vous revoir! </h2>
</div>
</div>
</div>
</section>

<br><br><br><br>
		<table class="table">
  <tbody>
  <tr>
      <td><strong>Votre pseudo</strong></td>
      <td><?php echo $_SESSION['user'];?></td>
    </tr>
    <tr>
      <td><strong>Votre email</strong></td>
      <td><?php echo $_SESSION['email'];?></td>
    </tr>
  </tbody>
</table>
	</body>

	
<br><br><br><br>

	<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
			<a href="index.php" class="btn bg-info btn-lg">Retour au shooping</a>
			</div>
		</div>
	</div>
</footer>
</html>


