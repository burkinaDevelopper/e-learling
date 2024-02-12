@extends('layouts.main')
@section('content')
   <!-- banner section -->
<!-- Services banner -->
<section class="w3l-about-breadcrumb text-center">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="banner-info-grid px-md-5">
                <h2 class="w3l-title-breadcrumb mb-3">Gestions des utilisateur</h2>
                <p class="inner-page-para px-lg-5">List des etudian</p>
            </div>
        </div>
    </div>
</section>
<!-- //Services banner -->




<!-- Services Section -->
<section class="about-section py-5">
    <div class="container py-lg-5 py-4">
        <div class="title-heading-w3 mx-auto text-center mb-5 pb-xl-4">
            <h3 class="w3l-title-main">Détails sur les inscript</h3>
            <p>Les etudian deja abonner</p>
        </div>
        <div class="font-end">
            <h4>Etudian cour pays</h4>
            <p>En fin de formation, vous serez un développeur junior extrêmement compétant et surtout <strong style="color: rgb(50, 154, 135)">employable</strong></p>
            <ul>
                @forelse ($users as $user)
                <li>{{$user->name}}</li>  
                @empty
                   <li>Pas encore d'etudiant</li> 
                @endforelse
                
            </ul>
        </div>
        <hr>
        <div class="newspaper">
            <h4>newspaper</h4>
            <p>Etudian inscript aux newspaper  <strong style="color: rgb(50, 154, 135)">employable</strong></p>
            <ul>
                @forelse ($newspapers as $newspaper)
                <li>{{$newspaper->email}}</li>  
                @empty
                   <li>Pas encore d'inscript aux newspaper</li> 
                @endforelse
                
            </ul>
        </div>
    
    </div>
</section>
<!-- //Services Section -->
<!-- //call block --> 
@endsection