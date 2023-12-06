<!DOCTYPE html>
<html lang="en">

<!-- doccure/  30 Nov 2019 04:11:34 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>E-docteur</title>

    <!-- Favicons -->
    <link type="image/x-icon" href="assets/img/favicon.png" rel="icon">

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
                    <a href="{{ route('welcome') }}" class="navbar-brand logo">
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
                        <li class="active">
                            <a href="{{ route('welcome') }}">ACCUEIL</a>
                        </li>


                        <ul class="nav header-navbar-rht m-3">

                            <li class="nav-item">
                                <a class="nav-link header-login" href="{{ route('rendezvous.create') }}">Prendre un
                                    rendez-vous </a>
                            </li>
                        </ul>

                        <ul class="nav header-navbar-rht m-3">

                            <li class="nav-item">
                                <a class="nav-link header-login" href="{{ route('contact') }}">Contactez-Nous
                                     </a>
                            </li>
                        </ul>


                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        <li class="login-link">
                            <a href="login">Espace Personnel</a>
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
                        <a class="nav-link header-login" href="login">Espace Admin </a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- /Header -->

        <!-- Home Banner -->
        <section class="section section-search">
            <div class="container-fluid">
                <div class="banner-wrapper">
                    <div class="banner-header text-center">
                        <h1>Bienvenue chez E-docteur, votre portail dédié a la santé!</h1>
                        <p>Prenez le contrôle de votre santé en toute simplicité !
                            Planifiez vos rendez-vous médicaux en quelques étapes faciles sur E-Docteur.
                            Gagnez du temps, évitez les files d'attente et accédez aux meilleurs professionnels de
                            la santé en quelques clics.
                            Votre bien-être n'a jamais été aussi accessible.".</p>
                    </div>

                    <!-- Search -->

                    <!-- /Search -->

                </div>
            </div>
        </section>
        <!-- /Home Banner -->

        <!-- Clinic and Specialities -->
        <section class="section section-specialities">
            <div class="container-fluid">
                <div class="section-header text-center">
                    <h2>Clinique et Spécialités</h2>
                    <p class="sub-title">Vous trouverez ici la liste de toutes nos spécialités.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <!-- Slider -->
                        <div class="specialities-slider slider">

                            <!-- Slider Item -->
                            <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="assets/img/specialities/specialities-01.png" class="img-fluid"
                                        alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>
                                <p>Urologie</p>
                            </div>
                            <!-- /Slider Item -->

                            <!-- Slider Item -->
                            <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="assets/img/specialities/specialities-02.png" class="img-fluid"
                                        alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>
                                <p>Neurologie</p>
                            </div>
                            <!-- /Slider Item -->

                            <!-- Slider Item -->
                            <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="assets/img/specialities/specialities-03.png" class="img-fluid"
                                        alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>
                                <p>Orthopédie</p>
                            </div>
                            <!-- /Slider Item -->

                            <!-- Slider Item -->
                            <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="assets/img/specialities/specialities-04.png" class="img-fluid"
                                        alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>
                                <p>Cardiologie</p>
                            </div>
                            <!-- /Slider Item -->

                            <!-- Slider Item -->
                            <div class="speicality-item text-center">
                                <div class="speicality-img">
                                    <img src="assets/img/specialities/specialities-05.png" class="img-fluid"
                                        alt="Speciality">
                                    <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                </div>
                                <p>Odontologie</p>
                            </div>
                            <!-- /Slider Item -->

                        </div>
                        <!-- /Slider -->

                    </div>
                </div>
            </div>
        </section>
        <!-- Clinic and Specialities -->

        <!-- Popular Section -->
        <section class="section section-doctor">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-header ">
                            <h2>NOS DOCTEURS</h2>
                            <p>Vous trouverez ici la liste de nos docteurs </p>
                        </div>
                        <div class="about-content">
                            <p>"Les médecins sont les piliers de notre santé. Sur E-Docteur, nous croyons en leur
                                dévouement à soigner, à guider et à prendre soin de nous. Leur expertise est la boussole
                                qui guide notre chemin vers le bien-être. Explorez notre plateforme pour trouver des
                                professionnels médicaux compétents, prêts à vous accompagner dans votre parcours vers
                                une vie plus saine.
                                .".</p>
                            <p>Faites confiance à nos médecins pour prendre soin de vous, car votre santé est
                                notre priorité</p>

                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="doctor-slider slider">

                            <!-- Doctor Widget -->
                            <div class="profile-widget">
                                <div class="doc-img">

                                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-01.jpg">

                                    <a href="javascript:void(0)" class="fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        Ruby Perrin
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">Cardiologue</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <span class="d-inline-block average-rating">(17)</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> Ouaga,BF
                                        </li>
                                        <li>
                                            <i class="far fa-clock"></i> Disponible du lundi au jeudi , de 9h a 15h
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <!-- /Doctor Widget -->

                            <!-- Doctor Widget -->
                            <div class="profile-widget">
                                <div class="doc-img">

                                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-02.jpg">

                                    <a href="javascript:void(0)" class="fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        Darren Elder
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality"> Urologue</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(35)</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> Ouaga, BF
                                        </li>
                                        <li>
                                            <i class="far fa-clock"></i> Disponible du mardi au dimanche de 10h a 15h
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <!-- /Doctor Widget -->

                            <!-- Doctor Widget -->
                            <div class="profile-widget">
                                <div class="doc-img">

                                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">

                                    <a href="javascript:void(0)" class="fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        Deborah Angel
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">Dentiste</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(27)</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> Ouaga, BF
                                        </li>
                                        <li>
                                            <i class="far fa-clock"></i> Disponible du mardi au dimanche de 10h a 15h
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <!-- /Doctor Widget -->

                            <!-- Doctor Widget -->
                            <div class="profile-widget">
                                <div class="doc-img">

                                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">

                                    <a href="javascript:void(0)" class="fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        Sofia Brient
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">Orthopédiste</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(4)</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> Ouaga, BF
                                        </li>
                                        <li>
                                            <i class="far fa-clock"></i> Disponible du mardi et jeudi de 8h a 15h
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <!-- /Doctor Widget -->

                            <!-- Doctor Widget -->
                            <div class="profile-widget">
                                <div class="doc-img">

                                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-05.jpg">

                                    <a href="javascript:void(0)" class="fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        Marvin Campbell
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality"> Ophthalmologue</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(66)</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> Ouaga, BF
                                        </li>
                                        <li>
                                            <i class="far fa-clock"></i> Disponible du mardi au dimanche de 10h a 15h
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <!-- /Doctor Widget -->

                            <!-- Doctor Widget -->
                            <div class="profile-widget">
                                <div class="doc-img">

                                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-06.jpg">

                                    <a href="javascript:void(0)" class="fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        Katharine Berthold
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">Neurologue</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(52)</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> Ouaga, BF
                                        </li>
                                        <li>
                                            <i class="far fa-clock"></i> Disponible du samedi au dimanche de 18h a 8h
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <!-- /Doctor Widget -->

                            <!-- Doctor Widget -->
                            <div class="profile-widget">
                                <div class="doc-img">

                                    <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-07.jpg">

                                    <a href="javascript:void(0)" class="fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                </div>
                                <div class="pro-content">
                                    <h3 class="title">
                                        Linda Tobin
                                        <i class="fas fa-check-circle verified"></i>
                                    </h3>
                                    <p class="speciality">Médecin Généraliste</p>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(43)</span>
                                    </div>
                                    <ul class="available-info">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i> Ouaga,BF
                                        </li>
                                        <li>
                                            <i class="far fa-clock"></i>Disponible du mardi au dimanche de 10h a 15h
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <!-- /Doctor Widget -->

                            <!-- Doctor Widget -->

                            <!-- Doctor Widget -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Popular Section -->

        <!-- Availabe Features -->
        <section class="section section-features">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5 features-img">
                        <img src="assets/img/features/feature.png" class="img-fluid" alt="Feature">
                    </div>
                    <div class="col-md-7">
                        <div class="section-header">
                            <h2 class="mt-2">Services disponibles dans notre clinique</h2>
                            <p>Vous trouverez ici la liste de nos différentes services. </p>
                        </div>
                        <div class="features-slider slider">
                            <!-- Slider Item -->
                            <div class="feature-item text-center">
                                <img src="assets/img/features/feature-01.jpg" class="img-fluid" alt="Feature">
                                <p>Unité de patients</p>
                            </div>
                            <!-- /Slider Item -->

                            <!-- Slider Item -->
                            <div class="feature-item text-center">
                                <img src="assets/img/features/feature-02.jpg" class="img-fluid" alt="Feature">
                                <p>Salle de test</p>
                            </div>
                            <!-- /Slider Item -->

                            <!-- Slider Item -->
                            <div class="feature-item text-center">
                                <img src="assets/img/features/feature-03.jpg" class="img-fluid" alt="Feature">
                                <p>USI</p>
                            </div>
                            <!-- /Slider Item -->

                            <!-- Slider Item -->
                            <div class="feature-item text-center">
                                <img src="assets/img/features/feature-04.jpg" class="img-fluid" alt="Feature">
                                <p>Laboratoire</p>
                            </div>
                            <!-- /Slider Item -->

                            <!-- Slider Item -->
                            <div class="feature-item text-center">
                                <img src="assets/img/features/feature-05.jpg" class="img-fluid" alt="Feature">
                                <p>Opération</p>
                            </div>
                            <!-- /Slider Item -->

                            <!-- Slider Item -->
                            <div class="feature-item text-center">
                                <img src="assets/img/features/feature-06.jpg" class="img-fluid" alt="Feature">
                                <p>Médical</p>
                            </div>
                            <!-- /Slider Item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

    <!-- sscript -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slick JS -->
    <script src="assets/js/slick.js"></script>

    <!-- script JS -->
    <script src="assets/js/script.js"></script>

</body>

<!-- doccure/  30 Nov 2019 04:11:53 GMT -->

</html>
