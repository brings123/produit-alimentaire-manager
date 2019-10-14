@extends('layouts.app')
@section('content')
<!-- Slider -->
<div class="slider">
    <ul class="slides">
      <li>
        <img src="https://cache.magazine-avantages.fr/data/photo/w1000_ci/52/equilibre_alimentaire_sport_repas.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Produits Naturel</h3>
          <h5 class="light grey-text text-lighten-3">Nos produits sont 100% naturel qui garantissent une meilleure santé</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
<!-- Section : recherche -->

<section class="section section-search cyan darken-2 white-text center scrollspy">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h3>Rechercher des produits</h3>
        <div class="input-field">
          <input type="text" class="white grey-text autocomplete" id="autocomplete-input" placeholder="Sirop, Aliment ..etc" name="" value="">
        </div>
      </div>
    </div>
  </div>

</section>
<!-- Performance -->
<div class="performance section section-icons grey lighten-4 center">
  <div class="container">
    <div class="row">
      <div class="col s12 m4">
        <div class="card-panel">
          <i class="material-icons large cyan-text">high_quality</i>
          <h5>Bonne Qualité (HQ)</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

        </div>

      </div>
      <div class="col s12 m4">
        <div class="card-panel">
          <i class="material-icons large cyan-text">monetization_on</i>
          <h5>Bon prix</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

        </div>

      </div>
      <div class="col s12 m4">
        <div class="card-panel">
          <i class="material-icons large cyan-text">room_service</i>
          <h5>Bon service</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

        </div>

      </div>
    </div>
  </div>
</div>
<!--Parallax -->
<div class="parallax-container">
    <div class="parallax"><img src="https://observatoire-des-aliments.fr/wp-content/uploads/2017/06/594997-abrogation-reglementation-formats-permettra-entre.jpg"></div>
  </div>
<!-- Nos Produits -->
<div class="section nosProduits-section grey lighten-4 center">
<div class="container">
  <div class="row">
    <div class="col s12">
      <h3>Produits du <span class="cyan-text">mois</span></h3>
      <hr class="ligne">
    </div>
    <div class="col s12 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="https://www.pour-nourrir-demain.fr/wp-content/uploads/2017/09/Sans-titre-1.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Flexagène<i class="material-icons right">more_vert</i></span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Flexagène<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="https://www.pour-nourrir-demain.fr/wp-content/uploads/2017/09/Sans-titre-1.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Magnésium B+<i class="material-icons right">more_vert</i></span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Magnésium B+<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="card hoverable">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="https://www.pour-nourrir-demain.fr/wp-content/uploads/2017/09/Sans-titre-1.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">B-feron<i class="material-icons right">more_vert</i></span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">B-feron<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
@endsection
