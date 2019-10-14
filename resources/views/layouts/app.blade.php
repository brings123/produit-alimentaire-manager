<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Produits Alimentaire</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
  <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

  <ul id="dropdown2" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
  <div class="navbar-fixed">
    <nav class="cyan">
       <div class="nav-wrapper container">
         <a href="#" class="brand-logo">Logo</a>
         <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <li><a href="sass.html">Accueil</a></li>
           <li><a href="badges.html">Notre Compagnie</a></li>
           <li><a class="dropdown-trigger" data-target="dropdown2" href="collapsible.html">Produits<i class="material-icons right">arrow_drop_down</i></a></li>
           <li><a href="badges.html">Contact</a></li>
         </ul>
       </div>
     </nav>
  </div>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Accueil</a></li>
    <li><a href="badges.html">Notre Compagnie</a></li>
    <li><a class="dropdown-trigger" data-target="dropdown1" href="collapsible.html">Produits<i class="material-icons right">arrow_drop_down</i></a></li>
    <li><a href="badges.html">Contact</a></li>
</ul>
@Yield('content')

<!-- Footer -->
<footer class="page-footer cyan darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Logo</h5>
                <p class="grey-text text-lighten-4">description de la compagnie Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright cyan darken-4">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">Made with <i class="material-icons red-text">favorite</i> By Chakib</a>
            </div>
          </div>
        </footer>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.slider');
var instances = M.Slider.init(elems, {
  indicators:false,
  height: 500,

});
});
$(document).ready(function(){
$('input.autocomplete').autocomplete({
  data: {
    "Sirop": null,
    "Mégamass": null,
    "Whey Gold": 'https://contents.mediadecathlon.com/p1636145/k$cf6308a348b878a8e519da65037d7cfb/sq/Proteine+whey+Gold+Standard+vanille+2+2kg.webp?f=1000x1000'
  },
});
$('.parallax').parallax();
$(".dropdown-trigger").dropdown();
$('.sidenav').sidenav();
});
</script>



</body>
</html>
