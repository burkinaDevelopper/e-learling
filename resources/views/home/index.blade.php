@extends('layouts.main')
@section('content')
   <!-- banner section -->
<section id="home" class="w3l-banner py-5">
    <div class="container py-lg-5 py-md-4">
        <div class="py-lg-5 py-4">
            <div class="banner-info-grid">
                <h3 class="mb-4"> Travaillez rapidement dans le IT.</h3>
                <p>Vous aspirez à progresser rapidement dans le domaine du développement web ? Vous recherchez un mentor pour vous orienter malgré un budget <strong id="budget">restreint</strong> ? Félicitations, vous avez trouvé l'endroit idéal </p>
               
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->


<!-- About Section-->
<section class="w3l-about py-5" id="about">
    <div class="container py-md-5 py-2">
        <div class="row w3l-row">
            <div class="col-lg-6 w3l-image pe-lg-5 mb-lg-0 mb-md-5 mb-4">
                <img src="{{asset('assets/images/about.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 w3l-about-info px-lg-4 align-center">
                <h6 class="w3l-title-small mb-1">à propos</h6>
                <h3 class="w3l-title-main mb-2">Acquérez les compétences de Développeur Junior rapidement.</h3>
                <p class="my-4 pe-lg-5">Vous pouvez opter pour la spécialisation en back-end, en front-end, ou choisir le fullstack (back-end + front-end), qui demande un investissement temporel plus important.
                    Vous serez guidé sur la meilleure méthode pour apprendre rapidement et efficacement, afin de maximiser votre temps sans le gaspiller. </p>
                <h5 class="w3l-subtitle">Que vous soyez débutant absolu ou que vous ayez déjà des connaissances en informatique, cette formation est adaptée à vos besoins.</h5>
                <div class="w3l-btn">
                    <a href="{{route('formation')}}" class="btn btn-style btn-secondary mt-lg-5 mt-4 me-2">Lire plus </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //About Section-->


<!-- Services Section -->
<section class="about-section py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-heading-w3 mx-auto text-center mb-sm-5 mb-4 pb-xl-4">
            <h3 class="w3l-title-main">Bienvenue dans la formation en ligne la plus complète disponible sur Internet.</h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="about-single">
                    <div class="about-icon mb-4">
                        <i class="fas fa-chalkboard"></i>
                    </div>
                    <div class="about-content">
                        <h5 class="mb-3"><a href="#url">Conception & modélisation</a></h5>
                        <p>Vous acquerrez des compétences dans la méthode d'analyse MERISE ainsi que dans le langage UML.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                <div class="about-single">
                    <div class="about-icon mb-4">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="about-content">
                        <h5 class="mb-3"><a href="#url">programmation</a></h5>
                        <p>Vous débuterez par l'apprentissage de la programmation procédurale, puis vous maîtriserez la programmation orientée objet.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-3">
                <div class="about-single">
                    <div class="about-icon mb-4">
                        <i class="fas fa-city"></i>
                    </div>
                    <div class="about-content">
                        <h5 class="mb-3"><a href="#url">hébergement</a></h5>
                        <p>Vous apprendrez à héberger diverses applications, y compris les plus spécifiques, sur cPanel via SSH et FTP.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //Services Section -->


<!-- Why Choose Us Section-->
<section class="w3l-whychooseus py-5" id="about1">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row align-items-center">
            <div class="col-lg-7 pe-lg-5 align-center">
                <h6 class="w3l-title-small mb-2">Public concerné</h6>
                <h3 class="w3l-title-main mb-2">Vous vous interrogez sur la pertinence de cette formation pour vous ?</h3>
                <p class="mt-3">Vous avez suivi une filière littéraire ? Rencontrez-vous des difficultés à mémoriser du code ? Ne vous inquiétez pas, tout a été conçu pour vous aider au mieux.
                    </p>
                <div class="row two-grids mt-5">
                    <div class="col-sm-6 grids_info d-flex">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <div class="detail ms-3">
                            <h4 class="w3l-subtitle">Etudiants</h4>
                            <p>Vous êtes étudiant ? cette formation est faite pour vous.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 grids_info d-flex mt-sm-0 mt-4">
                        <i class="fa-solid fa-bed"></i>
                        <div class="detail ms-3">
                            <h4 class="w3l-subtitle">Sans emploi</h4>
                            <p>Si vous êtes actuellement sans emploi, cette formation est spécialement conçue pour répondre à vos besoins.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 grids_info d-flex mt-md-5 mt-4">
                        <i class="fa-solid fa-person"></i>
                        <div class="detail ms-3">
                            <h4 class="w3l-subtitle">autodidacte</h4>
                            <p>Vous êtes autodidacte ? Cette formation est faite pour vous.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 grids_info d-flex mt-md-5 mt-4">
                        <i class="fa-solid fa-heart"></i>
                        <div class="detail ms-3">
                            <h4 class="w3l-subtitle">Passionné de l'informatique</h4>
                            <p>Vous êtes passionné de l'informatique?  Cette formation est faite pour vous.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-lg-0 mt-5 position-relative">
                <img src="{{asset('assets/images/etudian.png')}}" alt="les etudians" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- //Why Choose Us Section-->



<!-- Stats Section-->
<section class="w3l-stats-section py-5" id="stats">
    <div class="container py-lg-5 py-md-4 py-3">
        <div class="w3l-stats-inner-inf py-lg-4">
            <h3 class="w3l-title-main mb-2">Les compétences pratiques que vous développerez d'ici la fin de la formation.</h3>
            <div class="row stats-con">
                <div class="col-lg-3 col-6 stats_info counter_grid"> 
                    <h3>Créer un E-commerce</h3>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid">
                    
                    <h3>Créer un réseau social.</h3>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-sm-5 mt-5">
                    
                    <h3>Créer un Blog</h3>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-sm-5 mt-5">
                    
                    <h3>Créer un porfolio</h3>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- //Stats Section-->


 <!--/testimonials-->
 <section class="w3l-clients py-5" id="testimonials">
    <div class="container py-sm-5 py-2">
        <div class="text-center mb-sm-5 mb-4">
            <h6 class="w3l-title-small mb-2">Témoignages</h6>
            <h3 class="w3l-title-main mb-2">
                Qu'est-ce que les gens disent à notre sujet ?</h3>
        </div>
        <div class="w3-testimonial-grids align-items-center pt-md-4">
            <div class="w3-testimonial-content-top">
                <div id="owl-demo1" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="test-img"><img src="{{asset('assets/images/team1.png')}}" class="img-fluid" alt="temoignages d'un ex-etudiant">

                            </div>
                            <div class="testimonial">
                                <blockquote>
                                    <q>
                                        Si je vous avais connu plus tôt, je n'allais jamais perdre mon temps à faire une licence en informatique ou on nous apprend juste à composer des devoirs.</q>

                                </blockquote>
                                <div class="testi-des">

                                    <div class="peopl align-self">
                                        <h3>Amine Rahmon</h3>
                                        <p class="indentity">Developpeur font-end</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="test-img"><img src="{{asset('assets/images/team2.png')}}" class="img-fluid" alt="temoignages d'un ex-etudiant">

                            </div>
                            <div class="testimonial">
                                <blockquote>
                                    <q>
                                        Merci encore vous, une telle formation a un prix pareil, c'est du jamais vu ,J'ai décroché mon premier emploie juste 2 semaine après la formation.</q>

                                </blockquote>
                                <div class="testi-des">

                                    <div class="peopl align-self">
                                        <h3>IBRAHIM-CISSE</h3>
                                        <p class="indentity">Developpeur fullstack</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="test-img"><img src="{{asset('assets/images/team3.png')}}" class="img-fluid" alt="temoignages d'un ex-etudiant">

                            </div>
                            <div class="testimonial">
                                <blockquote>
                                    <q>
                                        Franchement repect pour votre cours HTML. votre l'avez l'art de bien expliquer. Et je ne me suis même pas ennuyé un seul fois.J'avais quelques bases et pourtant vous m'avez fait apprendre plein de chose. Je vous remercie et facilite pour ce cours..</q>

                                </blockquote>
                                <div class="testi-des">

                                    <div class="peopl align-self">
                                        <h3>Sadia Diallo</h3>
                                        <p class="indentity">apprenante</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <div class="test-img"><img src="assets/images/team4.jpg" class="img-fluid" alt="client-img">

                            </div>
                            <div class="testimonial">
                                <blockquote>
                                    <q>
                                        Des cours très stimulants, un sens (inné) de la pédagogie, un sens de l'humour (sans être trop lourd) et une sensation de progression à chaque minute.</q>

                                </blockquote>
                                <div class="testi-des">

                                    <div class="peopl align-self">
                                        <h3>David Samuel</h3>
                                        <p class="indentity">apprenant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //testimonials -->


<!-- Blog Section -->

<!-- //Blog Section -->

<!-- call block -->
<section class="w3l-call-to-action-6">
    <div class="container py-5">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="left-content-call">
                <span class="mb-2 text-italic">Vous aimeriez connaître le contenu de ce que vous allez apprendre ?</span>
                <h3 class="w3l-title-main text-white">Accédez aux catalogues de formations</h3>
            </div>
            <div class="right-content-call mt-lg-0 mt-4">
                <ul class="buttons">
                    <li class="phone-sec me-lg-4">
                        Ne perdez pas votre temps
                    </li>
                    <li><a href="{{route('formation')}}" class="btn btn-style transparent-btn mt-lg-0 mt-3">Formation</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- //call block --> 
@endsection