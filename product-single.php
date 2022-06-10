<!-- 
THEME: Aviato | E-commerce template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/aviato-e-commerce-template/
DEMO: https://demo.themefisher.com/aviato/
GITHUB: https://github.com/themefisher/Aviato-E-Commerce-Template/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Aviato | E-commerce template</title>

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

<body id="body">
<<!-- Start Top Header Bar -->
<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php';
?>
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

					<!-- Search -->
					<li class="dropdown search dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-ios-search-strong"></i> Une idée?</a>
						<ul class="dropdown-menu search-dropdown">
							<li>
								<form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
							</li>
						</ul>
					</li><!-- / Search -->

				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a href="index.php">Accueil</a>
					</li><!-- / Home -->


					<!-- Elements -->
					<li class="dropdown dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Nos articles <span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

								<!-- Basic -->
								<div class="col-lg-6 col-md-6 mb-sm-3">
									<ul>
										<li class="dropdown-header">Nos marques</li>
										<li role="separator" class="divider"></li>
										<li><a href="shop.php">Nike</a></li>
										<li><a href="shop2.php">Adidas</a></li>

									</ul>
								</div>

							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Elements -->
					

					


					<!-- Pages -->
					<li class="dropdown full-width dropdown-slide text-center">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Pages <span
								class="tf-ion-ios-arrow-down"></span></a>
						<div class="dropdown-menu">
							<div class="row">

							<div class="col-sm-3 col-xs-12">
									<a href="shop.html">
										<img class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsvETqWE1uo7nsVqErXdagy1jQyz9foVISfg&usqp=CAU" alt="menu image" />
									</a>
								</div>

								<!-- Introduction -->
								<div class="col-sm-3 col-xs-12 ">
									<ul>
										<li class="dropdown-header">Nous</li>
										<li role="separator" class="divider"></li>
										<li><a href="contact.php">Nous Contacter</a></li>

									</ul>
								</div>

								<!-- Utility -->
								<div class="col-sm-3 col-xs-12">
									<ul>
										<li class="dropdown-header">Votre compte</li>
										<li role="separator" class="divider"></li>
										<?php
										if(empty($_SESSION['user'])){ ?>
											<li><a href="pageco.php">Connexion</a></li>
											<li><a href="inscription.php">Inscription</a></li>

										<?php
											echo $_SESSION['user'];
										}
										else { ?>
											<li><a href="moncompte.php">Mon compte</a></li>
											<li><a href="deconnexion.php">Déconnexion</a></li>
										<?php 
										}
										?>
									</ul>
								</div>

								<!-- Mega Menu -->
								<div class="col-sm-3 col-xs-12">
									<a href="shop.html">
										<img class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsvETqWE1uo7nsVqErXdagy1jQyz9foVISfg&usqp=CAU" alt="menu image" />
									</a>
								</div>
							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Pages -->



					

					<!-- Shop -->
					
				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>

<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="shop.php">Nike</a></li>
					<li class="active">Air Jordan 1 mid</li>
				</ol>
			</div>
			<div class="col-md-6">
				<ol class="product-pagination text-right">
					<li><a href="product-single2.php">Next <i class="tf-ion-ios-arrow-right"></i></a></li>
				</ol>
			</div>
		</div>
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
									<img src='https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ffaf434d-bbed-4cc0-80fd-f0ad94588bc2/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' data-zoom-image="images/shop/single-products/product-1.jpg" />
								</div>
								<div class='item'>
									<img src='https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/30768484-e14e-475a-88b0-39257b1ef6b1/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' data-zoom-image="images/shop/single-products/product-2.jpg" />
								</div>
								
								<div class='item'>
									<img src='https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/2adb220c-fcdb-4dac-9cd8-4faef0d033d9/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' data-zoom-image="images/shop/single-products/product-3.jpg" />
								</div>
								<div class='item'>
									<img src='https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/546e0608-5865-43d0-80ce-dd5f6a7075cc/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' data-zoom-image="images/shop/single-products/product-4.jpg" />
								</div>
								<div class='item'>
									<img src='https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/564bec43-d91e-45dc-864c-4c8df5b4ac06/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' data-zoom-image="images/shop/single-products/product-5.jpg" />
								</div>
								<div class='item'>
									<img src='https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/99a614f7-62d3-4814-96b3-5fe225651c24/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' data-zoom-image="images/shop/single-products/product-6.jpg" />
								</div>
								
							</div>
							
							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>
						
						<!-- thumb -->
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
								<img src='https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/ffaf434d-bbed-4cc0-80fd-f0ad94588bc2/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='1'>
								<img src='https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/30768484-e14e-475a-88b0-39257b1ef6b1/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='2'>
								<img src='https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/2adb220c-fcdb-4dac-9cd8-4faef0d033d9/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='3'>
								<img src='https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/546e0608-5865-43d0-80ce-dd5f6a7075cc/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='4'>
								<img src='https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/564bec43-d91e-45dc-864c-4c8df5b4ac06/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='5'>
								<img src='https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5,q_80/99a614f7-62d3-4814-96b3-5fe225651c24/chaussure-air-jordan-1-mid-pour-plus-age-LXD014.png' alt='' />
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-details">
					<h2>Air jordan 1 mid</h2>
					<p class="product-price">109.99€</p>
					
					<p class="product-description mt-20">
						Retrouvez la nouvelle paire air jordan, concue en france au design atypique.
					</p>
					<p>Sa forme maintenant connue de tous promet un confort et une légèreté dans le pied.</p>
					<div class="color-swatches">
						<span>Couleur:</span>
						<ul>
							<li>
								<a href="product-single.html" class="swatch-white"></a>
							</li>
						</ul>
					</div>
					<div class="product-size">
						<span>Taille:</span>
						<select class="form-control">
							<option>38</option>
							<option>39</option>
							<option>40</option>
							<option>41</option>
							<option>42</option>
							<option>43</option>
							<option>44</option>
							<option>45</option>
							<option>46</option>
						</select>
					</div>
					<div class="product-quantity">
						<span>Quantity:</span>
						<div class="product-quantity-slider">
							<input id="product-quantity" type="text" value="0" name="product-quantity">
						</div>
					</div>
					
					<a href="cart.html" class="btn btn-main mt-20">Ajouter à votre boite à chaussures</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="tabCommon mt-20">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Description</a></li>
						<li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">Commentaires (3)</a></li>
					</ul>
					<div class="tab-content patternbg">
						<div id="details" class="tab-pane fade active in">
							<h4>Description du produit</h4>
							<p>Confectionnées dans un cuir ultra-brillant, ces sneakers sont un tableau blanc ambulant. Elles n'attendent plus qu'une touche créative</p>
							<p>Sortez les marqueurs effaçables à sec et personnalisez vos chaussures avec des dessins et des mots. Lorsque vous voulez changer de design, effacez votre création à l'aide d'un chiffon</p>
						</div>
						<div id="reviews" class="tab-pane fade">
							<div class="post-comments">
						    	<ul class="media-list comments-list m-bot-50 clearlist">
								    <!-- Comment Item start-->
								    <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="https://basket-infos.com/wp-content/uploads/2021/12/lebron-james-lakers.jpg" alt="" width="50" height="50" />
								        </a>

								        <div class="media-body">
								            <div class="comment-info">
								                <h4 class="comment-author">
								                    <a href="#!">Lebron James</a>
								                	
								                </h4>
								                <time datetime="2013-04-06T13:53">02 juin, 2022, 11:34</time>
								                <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Répondre</a>
								            </div>

								            <p>
								                Oh My God, this sneakers looks amazing, i'm in love.
								            </p>
								        </div>

								    </li>
								    <!-- End Comment Item -->

								    <!-- Comment Item start-->
								    <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="data:image/jpeg;base64,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" alt="" width="50" height="50" />
								        </a>

								        <div class="media-body">

								            <div class="comment-info">
								                <div class="comment-author">
								                    <a href="#!">Kendrick Lamar</a>
								                </div>
								                <time datetime="2013-04-06T13:53">03 octobre, 2022, 03:25</time>
								                <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Repondre</a>
								            </div>

								            <p>
								                Of course i will use this shoes for my next show!!
								            </p>

								        </div>

								    </li>
								    <!-- End Comment Item -->

								    <!-- Comment Item start-->
								    <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="data:image/jpeg;base64,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" alt="" width="50" height="50">
								        </a>

								        <div class="media-body">

								            <div class="comment-info">
								                <div class="comment-author">
								                    <a href="#!">Dany Boon</a>
								                </div>
								                <time datetime="2013-04-06T13:53">03 mars, 2022, 16:25</time>
								                <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
								            </div>

								            <p>pas mal								            </p>

								        </div>

								    </li>
							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<li>
						<a href="contact.php">CONTACT</a>
					</li>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by Neki</a></p>
			</div>
		</div>
	</div>
</footer>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>