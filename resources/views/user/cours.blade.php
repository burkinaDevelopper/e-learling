@extends('layouts.main')
@section('content')
   <!-- banner section -->
<!-- Services banner -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="banner-info-grid px-md-5">
                <h2 class="w3l-title-breadcrumb mb-3">Pourquoi choisir cette formation ?</h2>
                <p class="inner-page-para px-lg-5">C'est bien de suivre une formation, mais c'est encore mieux de trouver du travail après sa formation</p>
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
            <h3 class="w3l-title-main">Choisir sont parcours</h3>
            <p>
                Des les premier jours de formations nous allons vous  explique le fonctionnement du marcher de l'emploie pour vous aider a  trouver rapidement du travail en tanque developpeur junior ou travailler en  freelance
                </p>
        </div>
        <div class="infos">
            <h4 style="color: red; margin-bottom: 20px;">Information Important</h4>
            <p>Ce n'est pas le catalogue complète de formation qui se trouve sur le site, les sections comme MySQL, Illustrator,gestion de projet, Photoshop,
                VirtualBox (qui permet de créer des environnements virtuels Homestead pour les utilisateurs de Windows) se feront en fonction des préférences de l'apprenant , la demande du marché de l'emploi et en fonction de sa localité</p>
        </div>      
    </div>
</section>
<!-- //Services Section -->
<section class="w3l-contacts-12">
    <div class="contact-top pt-5">
        
        <div class="container py-lg-4">
            <div class="d-grid cont-main-top mt-lg-5 mt-4">
                <!-- contact form -->
                    
                <div class="contacts12-main form-contact" id="success-formation">
                    <h5 style="margin-bottom: 30px"> Choisissez votre parcours pour recevoir les frais de formations</h5>
                    <form action="{{route('user.post')}}" method="post" class="main-input">
                        @csrf
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="entre votre pays" id="country" name="country" required >                          
                            <label for="country">Pays</label>
                        </div>
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="activité actuelle" name="status" id="status" required >                          
                            <label for="status">Occupation actuel</label>
                        </div>
                        <div class="top-inputs d-grid">
                            <select name="cours" id="cours">
                                <option value="front-end">Front-end</option>
                                <option value="back-end">Back-end</option>
                                <option value="fullstack">Fullstack</option>
                                <option value="Infographie">Infographie</option>
                            </select>                          
                            <label for="country">Formation</label>
                        </div>
                        <div class="text-left">
                            <button type="submit" class="btn btn-primary btn-style">Envoyer</button>
                        </div>
                    </form>
                    @if (session('success'))
                        <div class="success-formation">{{session('success')}}</div>
                    @endif
            
                </div>
                <!-- //contact form -->
                <!-- contact address -->
                
                <!-- //contact address -->
            </div>
        </div>
        <!-- map -->
    </div>
</section>      
        <!-- //map -->
        <!-- About Section -->
<!-- call block -->
<section class="w3l-call-to-action-6">
    <div class="container py-5">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="left-content-call">
                <span class="mb-2 text-italic">Bienvenue dans la formation</span>
                <h3 class="w3l-title-main text-white">Nous allons vous aidez atteindre vos objectifs</h3>
            </div>
           
        </div>
    </div>
</section>
<!-- //call block -->
<section class="w3l-content-6" id="skills">
    <div class="content-6-mian py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="content-info-in row">
                <div class="content-gd col-lg-6 pe-lg-5">
                    <img src="assets/images/about4.jpg" alt="" class="img-fluid" />
                </div>
                <div class="content-gd col-lg-6 mt-lg-0 mt-5 align-self ps-lg-5">
                    <h6 class="w3l-title-small mb-1">Quelques conseils</h6>
                    <h3 class="w3l-title-main mb-lg-4 mb-3">Apprendre plus</h3>
                    <p class="my-4 pe-lg-5">Planifier des heures d'apprentissage régulier.</p>
                    <h5 class="w3l-subtitle mb-md-5 mb-4">N'hésitez pas de poser des questions à votre mentor avec le plus de détails pour qu'il puisse mieux vous déboguer </h5>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->

<!-- //call block --> 
<!-- call block -->
<section class="w3l-call-to-action-6">
    <div class="container py-5">
        <div class="d-lg-flex align-items-center justify-content-between">
            <div class="left-content-call">
                <span class="mb-2 text-italic">Connexion internet</span>
                <h3 class="w3l-title-main text-white">Vous n'avez pas besoin d'un grand débit ou obligatoirement un wifi pour suivre la connexion</h3>
            </div>
        </div>
    </div>
</section>
<!-- //call block -->
@endsection