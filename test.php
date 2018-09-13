<?php 




?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Accueil</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="Fonctions.js"></script>
</head>
    <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:500px;color: #fff; background-image: url("../images/WordItOut-word-cloud-2626826.png");}
  #section2 {padding-top:50px;height:500px;color: #fff;  background-image: url("../images/WordItOut-word-cloud-2626826.png");}
  #section3 {padding-top:50px;height:500px;color: #fff;  background-image: url("../images/WordItOut-word-cloud-2626826.png");}
  #section5 {padding-top:50px;height:500px;color: #fff; background-color: #ffff;}
  #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
  #section42 {padding-top:50px;height:500px;color: #fff; background-color: #009688;}
  </style>
  
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">Urvoy Yvon</a>
      <button class="btn btn-outline-warning mr-1" type="button">
          <i class="fas fa-download"></i>
               Mon CV
                   <a href="CV_yvon_urvoy_V3.pdf">
                    </a>
         </i>
      </button>
    </div>
    <div>
      <div>
        <ul class="nav navbar-nav">
          <li><a href="#section1">Informations</a></li>
          <li><a href="#section2">Mon parcours</a></li>
          <li><a href="#section3">Mes compétences</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="section1" class="container-fluid">
  <h1>Informations</h1>
  <p></p>
  <p></p>
</div>
<div id="section5" class="container-fluid">
  <h1></h1>
  <p></p>
  <p></p>
</div>

<div id="section2" class="container-fluid">
  <h1>Mon parcours</h1>
  <p></p>
  <p></p>
</div>
<div id="section5" class="container-fluid">
  <h1></h1>
  <p></p>
  <p></p>
</div>
<div id="section3" class="container-fluid">
  <h1>Mes compétences</h1>
  <p></p>
  <p></p>
</div>
<div id="section5" class="container-fluid">
  <h1></h1>
  <p></p>
  <p></p>
</div>
<div id="section41" class="container-fluid">
  <h1>Section 4 Submenu 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section42" class="container-fluid">
  <h1>Section 4 Submenu 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>


  </body>
</<html>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Urvoy Yvon</title>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="Fonctions.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">Yvon Urvoy</span>
        <form class="form-inline mb-0">
            <a href="CV_yvon_urvoy_V3.pdf">
                <button class="btn btn-warning mr-1" id="menu-ajout" type="button">
                    <i class="fas fa-download"></i>
                        <a href="CV_yvon_urvoy_V3.pdf">Télécharger mon CV</a>
                </button>
            </a>
           
        </form>
 </nav>    
  
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Informations</h4>
      <ul >
        <li class="active"><i class="fas fa-birthday-cake"></i>   21 ans</li>
        <br>
        <li><i class="fas fa-phone-square"></i>   07 83 21 58 25</li>
        <br>
        <li><i class="fas fa-envelope"></i>   urvoy-y@saint-louis29.net</li>
        <br>
        <li><i class="fas fa-road"></i>    Permis B</li>
        <br>
        <li><i class="fas fa-check"></i>    Véhicule personnel</li>
        <br>
        <hr>
        <li>    Anglais niveau C1</li>
      </ul>
      <br>
    </div>

    <div class="col-sm-9">
      <h2>A propos</h2>
      <hr>
      
      
      
      <p>Etudiant en BTS SIO (Services Informatiques aux Organisations), actuellement dans le parcours SISR (réseau)</p>
      <br><br>
      
      <h2>Compétences</h>
      <hr>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="../images/13888_doctor_who.jpg" alt="background-1">
    </div>

    <div class="item">
      <img class="img-responsive" src="../images/eecs_1250x450px.jpg" alt="background-2"  width="1024" height="800">
    </div>

    <div class="item">
      <img src="../images/images.jpg" alt="background-3">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
     
      
     
      
      
      

</body>
</html>
