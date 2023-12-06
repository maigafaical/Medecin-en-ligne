<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/  30 Nov 2019 04:11:34 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>E-docteur</title>
		
		<!-- Favicons -->
		<link type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

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
							<img src="{{asset('assets/assets/img/logo.png')}}" class="img-fluid" alt="">
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
							<li class="active">
								<a href="{{route('welcome')}}">ACCUEIL</a>
							</li>

                            <ul class="nav header-navbar-rht m-3">

                                <li class="nav-item">
                                    <a class="nav-link header-login" href="{{ route('rendezvous.create') }}">Prendre un
                                        rendez-vous </a>
                                </li>
                            </ul>
							

							<ul class="nav header-navbar-rht m-3">
								
								<li class="nav-item">
									<a class="nav-link header-login" href="#">Contactez-Nous </a>
								</li>
							</ul>
							
							
							<li class="login-link">
								<a href="login">ESPACE ADMIN</a>
							</li>
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
							<a class="nav-link header-login" href="login">ESPACE ADMIN </a>
						</li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Home Banner -->
			<div>

				@if (session('status'))
			  <div class="alert alert-success">
			  {{session('status')}}
			  </div>
			
			  @endif
			<ul>
			@foreach ($errors->all() as $error)
			  <li class="alert alert-danger"> {{ $error }}</li>
			@endforeach
			</ul>
            <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contactez nous en nous laissant un message ou applez-nous directement sur notre numero téléphonique ci-dessous.</p>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" allowfullscreen></iframe>
                </div>

                <section id="contact" class="contact">
                    <div class="container" data-aos="fade-up">
                
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger"> {{ $error }}</li>
                        @endforeach
                    </ul>
                
                        <div class="row mt-5">
                
                            <div class="col-lg-4">
                                <div class="info">
                                    <div class="address">
                                        <i class="bi bi-geo-alt"></i>
                                        <h4>Location:</h4>
                                        <p>Avenue Thomas Sankara, Ouagadougou, Burkina Faso</p>
                                    </div>
                
                                    <div class="email">
                                        <i class="bi bi-envelope"></i>
                                        <h4>Email:</h4>
                                        <p>edocteur78@example.com</p>
                                    </div>
                
                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Téléphone:</h4>
                                        <p>+226/54582248</p>
                                    </div>
                
                                </div>
                
                            </div>
                
                            <div class="col-lg-8 mt-5 mt-lg-0">
                
                                <form action="{{route('contactpost')}}" method="POST" role="form" class="php-email-form">
                                    @csrf
                                    <div class="row gy-2 gx-md-3">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Votre Nom Complet" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Votre Email" required>
                                        </div>
                                        <div class="form-group col-12">
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                placeholder="Sujet" required>
                                        </div>
                                        <div class="form-group col-12">
                                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                        </div>
                                        <div class="my-3 col-12">
                                            <div class="loading">Envoie...</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Votre messge a bien été envoyer. Merci de patienter!</div>
                                        </div>
                                        <div class="text-center col-12 btn"><button class="btn btn-info" type="submit">Envoyer Message</button></div>
                                    </div>
                                </form>
                
                            </div>
                
                        </div>
                
                    </div>
                </section><!-- End Contact Section -->

            </div>
            <!-- /Main Wrapper -->
			<!-- Availabe Features -->
			
			<!-- Footer -->
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
		   
	   
	  
		<!-- sscript -->
		<script src="{{asset('assets/js/jquery.min.js"></script')}}">
		
		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets/js/popper.min.js"></script')}}">
		<script src="{{asset('assets/js/bootstrap.min.js"></script')}}">
		
		<!-- Slick JS -->
		<script src="{{asset('assets/js/slick.js"></script')}}">
		
		<!-- script JS -->
		<script src="{{asset('assets/js/script.js"></script')}}">
		
	</body>

<!-- doccure/  30 Nov 2019 04:11:53 GMT -->
</html>