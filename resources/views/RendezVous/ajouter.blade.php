<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/  30 Nov 2019 04:11:34 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Doccure</title>
		
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
							<img src="{{asset('assets/img/logo.png" class="img-fluid" alt="Logo')}}">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index-2.html" class="menu-logo">
								<img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="active">
								<a href="{{route('welcome')}}">Accueil</a>
							</li>
							

							<ul class="nav header-navbar-rht m-3">
								
								<li class="nav-item">
									<a class="nav-link header-login" href="#">Prendre un rendez-vous </a>
								</li>
							</ul>
							
							
							<li class="login-link">
								<a href="login">Login / Signup</a>
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
								<p class="contact-info-header"> +1 315 369 5943</p>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="login">login / Signup </a>
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
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                  <div class="card-body">
                    <h5 class="card-title">Remplissez ce formulaire pour prendre un rendez-vous! </h5>
    
                  <form method="POST" action="{{route('rendezvous.store')}}" class="row g-3">
                    @csrf
					
                  <div class="col-md-6">
                    <label for="inputName5" class="form-label">Nom </label>
                    <input type="text" class="form-control" name="nom">
                  </div>
                 
                  <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="prenom">
                  </div>
    
    
    
                  <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Age</label>
                    <input type="number" class="form-control" name="age">
                  </div>
    
                  <div class="col-6">
                    <label for="inputAddress5" class="form-label">Sexe</label>
                    <input type="text" class="form-control" name="sexe">
                  </div>
    
                  <div class="col-6">
                    <label for="inputAddress5" class="form-label">Téléphone</label>
                    <input type="number" class="form-control" name="telephone">
                  </div>
    
    
    
                  
                  <div class="col-6">
                    <label for="inputAddress5" class="form-label">Date du rendez-vous</label>
                    <input type="date" class="form-control" name="date_rdv">
                  </div>
    
                  
                    <div class="col-6">
                        <label for="inputAddress5" class="form-label">Heure du rendez-vous</label>
                        <input type="time" class="form-control" name="heure_rdv">
                      </div>

					  <div class="col-6">
                        <label for="inputAddress5" class="form-label">Votre adresse</label>
                        <input type="text" class="form-control" name="adresse">
                      </div>

					  <div class="col-md-6">
						<label for="" class="form-label">Choisir un docteur</label>
						<select class="form-control"   name="docteurs_id">
							<option>Selectionner un  Docteur</option>
							@foreach ($docteurs as $docteur)
							<option value="{{$docteur->id}}">{{$docteur->nom}} {{$docteur->prenom}} </option>
						@endforeach
						</select>
					  </div>

                      <div class="col-6">
                
                        <select name="statut" class="form-select" hidden>
                          <option value="En attente"> <option>
                        </select>
                      </div> 
    
                  <div class="text-center m-2">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                  </div>
                </form>
    
                  </div>
    
                </div>
              </div>
    
			<!-- Availabe Features -->
			
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
										<img src="{{asset('assets/img/footer-logo.png" alt="logo')}}">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Patients</h2>
									<ul>
										<li><a href="search.html"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
										<li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="booking.html"><i class="fas fa-angle-double-right"></i> Booking</a></li>
										<li><a href="patient-dashboard.html"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Doctors</h2>
									<ul>
										<li><a href="appointments.html"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
										<li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a></li>
										<li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="doctor-register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="doctor-dashboard.html"><i class="fas fa-angle-double-right"></i> Doctor Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											doccure@example.com
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
										<p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="term-condition.html">Terms and Conditions</a></li>
											<li><a href="privacy-policy.html">Policy</a></li>
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