<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->
<head>
		<meta charset="utf-8">
		<title>Doccure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{route('welcome')}}" class="navbar-brand logo">
							<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index-2.html" class="menu-logo">
								<img src="assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li>
								<a href="{{route('welcome')}}">ACCUEIL</a>
							</li>
							
							
							<ul class="nav header-navbar-rht m-3">
								
								<li class="nav-item">
									<a class="nav-link header-login" href="{{route('rendezvous.create')}}">Prendre un rendez-vous </a>
								</li>
							</ul>

							<ul class="nav header-navbar-rht m-3">
								
								<li class="nav-item">
									<a class="nav-link header-login" href="{{route('contact')}}">Contactez-Nous </a>
								</li>
							</ul>
							
							
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +226/54582248</p>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="{{route('login')}}">ESPACE ADMIN </a>
						</li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Connectez-vous <span>E-DOCTEUR</span></h3>
										</div>
                                        @if (session('status'))
                                    <div class="alert alert-success">{{session('status')}}</div>
                                    @endif
									<form method="POST" class="py-3"  action="{{ route('login') }}">
										@csrf
											<div class="form-group form-focus">
												<input type="text" name="username"  class="form-control floating" id="yourUsername" required>
												<label class="focus-label">Username</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" name="password" class="form-control floating" id="yourPassword" required>
												<label class="focus-label">Mot de passe</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="forgot-password.html">Mot de passe oublié ?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Se conncter</button>
											
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
		        <!-- Footer -->
				<footer class="footer">

					<!-- Footer Top -->
					<div class="footer-top">
						<div class="container-fluid">
							<div class="row">
								<div class="col-lg-3 col-md-6">
		
									<!-- Footer Widget -->
									<div class="footer-widget footer-about">
										<div class="footer-logo">
											<img src="assets/img/footer-logo.png" alt="logo">
										</div>
										<div class="footer-about-content">
											<p>Suivez nous sur:. </p>
											<div class="social-icon">
												<ul>
													<li>
														<a href="https://www.facebook.com/profile.php?id=100074558045038&mibextid=LQQJ4d"
															target="_blank"><i class="fab fa-facebook-f"></i> </a>
													</li>
													<li>
														<a href="https://twitter.com/_AfricanUnion" target="_blank"><i
																class="fab fa-twitter"></i> </a>
													</li>
													<li>
														<a href="https://www.linkedin.com/company/universit%C3%A9-ouaga-ii/about/"
															target="_blank"><i class="fab fa-linkedin-in"></i></a>
													</li>
													<li>
														<a href="https://instagram.com/maiga.faical?igshid=OGQ5ZDc2ODk2ZA=="
															target="_blank"><i class="fab fa-instagram"></i></a>
													</li>
		
												</ul>
											</div>
										</div>
									</div>
									<!-- /Footer Widget -->
		
								</div>
		
								<div class="col-lg-3 col-md-6">
		
									<!-- Footer Widget -->
		
									<!-- /Footer Widget -->
		
								</div>
		
								<div class="col-lg-3 col-md-6">
		
									<!-- Footer Widget -->
									<div class="footer-widget footer-menu">
										<h2 class="footer-title"> Docteur</h2>
										<ul>
											<li><a href="{{ route('rendezvous.create') }}"><i
														class="fas fa-angle-double-right"></i> Rendez-vous</a></li>
											<li><a href="{{ route('login') }}"><i class="fas fa-angle-double-right"></i> Se
													connecter</a></li>
		
										</ul>
									</div>
									<!-- /Footer Widget -->
		
								</div>
		
								<div class="col-lg-3 col-md-6">
		
									<!-- Footer Widget -->
									<div class="footer-widget footer-contact">
										<h2 class="footer-title">Contactez-nous</h2>
										<div class="footer-contact-info">
											<div class="footer-address">
												<span><i class="fas fa-map-marker-alt"></i></span>
												<p> Ouagadoudou BP-1065<br> BURKINA FASO </p>
											</div>
											<p>
												<i class="fas fa-phone-alt"></i>
												+226/54582248
											</p>
											<p class="mb-0">
												<i class="fas fa-envelope"></i>
												edocteur78@gmail.com
											</p>
										</div>
									</div>
									<!-- /Footer Widget -->
		
								</div>
		
							</div>
						</div>
					</div>
					<!-- /Footer Top -->
		
					<!-- Footer Bottom -->
					<div class="footer-bottom">
						<div class="container-fluid">
		
							<!-- Copyright -->
							<div class="copyright">
								<div class="row">
									<div class="col-md-6 col-lg-6">
										<div class="copyright-text">
											<p class="mb-0"><a href="templateshub.net">By FAICAL MAIGA</a></p>
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
		
										<!-- Copyright Menu -->
										<div class="copyright-menu">
											<ul class="policy-menu">
												<li><a href="https://www.tv5monde.com/la-chaine/charte-de-confidentialite">Terms
														and Conditions</a></li>
		
											</ul>
										</div>
										<!-- /Copyright Menu -->
		
									</div>
								</div>
							</div>
							<!-- /Copyright -->
		
						</div>
					</div>
					<!-- /Footer Bottom -->
		
				</footer>
				<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->
</html>