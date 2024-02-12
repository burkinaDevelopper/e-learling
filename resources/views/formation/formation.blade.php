@extends('layouts.main')
@section('content')
   <!-- banner section -->
<!-- Services banner -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="banner-info-grid px-md-5">
                <h2 class="w3l-title-breadcrumb mb-3">Poser des question 24h/24 et 7j/7</h2>
                <p class="inner-page-para px-lg-5">Apprendre a son rythme avec un mentor spécialisé</p>
            </div>
        </div>
    </div>
</section>
<!-- //Services banner -->


<div class="service-section py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6 item">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="services.html">
                            <img class="d-block img-responsive" src="{{asset('assets/images/js.png')}}" alt="javascript">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <a href="#" class="service-heading">Front-end</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4 pt-sm-0 pt-2">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="services.html">
                            <img class="d-block img-responsive" src="{{asset('assets/images/php.png')}}" alt="php">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <a href="services.html" class="service-heading">Back-end</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 pt-lg-0 pt-2">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="services.html">
                            <img class="d-block img-responsive" src="{{asset('assets/images/uml.png')}}" alt="uml">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <a href="services.html" class="service-heading">Modelisation</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 pt-lg-0 pt-2">
                <div class="card">
                    <div class="card-header p-0 position-relative border-0">
                        <a href="services.html">
                            <img class="d-block img-responsive" src="{{asset('assets/images/cpanel.png')}}" alt="cpanel">
                        </a>
                    </div>
                    <div class="card-body service-details">
                        <a href="services.html" class="service-heading">Seo&Hebergement</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Services Section -->
<section class="about-section py-5">
    <div class="container py-lg-5 py-4">
        <div class="title-heading-w3 mx-auto text-center mb-5 pb-xl-4">
            <h3 class="w3l-title-main">Détails sur les formations</h3>
            <p>Les formations telles que Merise, UML, SEO, design, hébergement
                seront alternés après chaque grand projet afin de rendre l'apprentissage agréable et passionnant</p>
        </div>
        <div class="font-end">
            <h4>Front-end</h4>
            <p>En fin de formation, vous serez un développeur junior extrêmement compétant et surtout <strong style="color: rgb(50, 154, 135)">employable</strong></p>
            <ul>
                <li>HTML5</li>
                <li>CSS3 <i>(SASS)</i></li>
                <li>javascript</li>
                <li>jquery <i>(optionel)</i></li>
                <li><em>React JS</em> ou <em>VUE JS</em> (aux choix)</li>
            </ul>
        </div>
        <hr>
        <div class="back-end">
            <h4>Back-end</h4>
            <p>En fin de formation, vous serez un développeur junior extrêmement compétant  et surtout <strong style="color: rgb(50, 154, 135)">employable</strong></p>
            <ul>
                <li>PHP <i>(Procedural)</i></li>
                <li>PHP <i>(Programmation orientée objet)</i></li>
                <li>PHP <i>(Architecture MVC)</i></li>
                <li>Laravel</li>
            </ul>
        </div>
        <hr>
        <div class="conception">
            <h4>Modelisation</h4>
            <p>Vous serrez capable de concevoir et modélise tout système informatique les plus complexe</p>
            <ul>
                <li>diagrammes UML</li>
                <li>MERISE</li>
                <li>canvas(Il permet de faire des maquettes graphique rapidement à
                    défaut d'un désigner)</li>  
            </ul>
        </div>
        <hr>
        <div class="seo">
            <h4>Seo&Hebergement</h4>
            <p>Des domaines d'hébergement cPanel son disponible et <strong>gratuit</strong> pour vous rendre autonome </p>
            <ul>
                <li> File Transfer Protocol (FTP)</li>  
                <li>Le protocole Secure Shell (SSH)</li>  
                <li>gestion de cpanel</li>  
                <li>adresse de messagerie cpanel</li>  
                <li>Instalation de Let's Encrypt™ SSL</li>  
            </ul>
        </div>
        
    </div>
</section>
<!-- //Services Section -->
<!-- //call block --> 
@endsection