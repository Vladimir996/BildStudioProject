<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>



<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>


<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/carousel.css" rel="stylesheet" type="text/css"/>
<link href="css/modal.css" rel="stylesheet" type="text/css"/>
<link href="css/animacija.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class="container">
            <?php
                include 'fajlovi/header.php';
            ?>
            <hr>
            <?php
                include 'fajlovi/navbar.php';
            ?>
        </div>
        <div class="container-fluid">
            <div id="" class="hero img-animationRL">
                <img src="home-assets/slider-background.jpg" alt="" class=" " id="pozadina"/>
                <img src="home-assets/slider-overimage.png" alt="" class="img-responsive  " id="uredjaji"/>
            </div>
            <div class="jumbotron" id="portfolio">
                <div class="row"  >
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-8" style="text-align: center">
                        <p>
                        	<font size="3">
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas enim ac est feugiat, at tristique justo dignissim. Nam quis ligula faucibus, finibus arcu eu
                        </font>
                        </p>  
                    </div>
                    <div class="col-sm-2">
                    </div>
                </div>
                <div style="width: 100%; text-align: center; padding-right: 270px"><button type="button" " name="" class="btn" id="browsePortfolio">BROWSE PORTFOLIO</button></div>
            </div>
            <div class="jumbotron" id="video">
                <div class="row">

                    <div class="col-sm-6">
                        <button id="myBtn" class="img-responsive navbar-right"><img src="home-assets/video-player-placeholder.jpg" alt="" class="img-responsive navbar-right slikaYou"/></button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <iframe class="a" src="https://www.youtube.com/embed/tgbNymZ7vqY" ></iframe>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
                        
                    </div>
                    <div class="col-sm-6">
                        <h4>GET TO KNOW US A LITTLE BETTER</h4>
                        <p ><font size="2"> Praesent ut ligula massa. Vivamus vel mi eget mauris tempor imperdiet. Quisque tempor, neque in venenatis consequat, magna sapien viverra ante, quis sagittis nulla urna nec mauris. Etiam vehicula justo mollis pretium sollicitudin.
                        </br>
                       </br>
                       Nulla sodales malesuada neque, consequat eleifend odio commodo eget. Sed nulla arcu, dictum ac odio vel, rutrum dignissim quam. Etiam ac facilisis eros, at eleifend mi.
                        </font> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="jumbotron" id="portfolio">
                <div class="row"  >
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6">
                        <h4 class="text-center">A COUPLE OF OUR FEATURED PROJECTS</h4>
                        <h5 class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eu erat lacus, vel congue mauris. Fusce velit justo, faucibus eu sagittis ac, gravida quis tortor. Suspendisse non urna mi, quis tincidunt eros.</h5>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
            <div class="">
                <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-2">
                        <img src="home-assets/project-boy-and-girl.jpg" alt="" class="img-responsive opacity"/>
                    </div>
                    <div class="col-sm-2">
                        <img src="home-assets/project-buttons.jpg" alt="" class="img-responsive opacity"/>
                    </div>
                    <div class="col-sm-2">
                        <img src="home-assets/project-jes.jpg" alt="" class="img-responsive opacity"/>
                    </div>
                    <div class="col-sm-2">
                        <img src="home-assets/project-jezik.jpg" alt="" class="img-responsive opacity"/>
                    </div>
                    <div class="col-sm-2">
                        <img src="home-assets/project-social-media.jpg" alt="" class="img-responsive opacity"/>
                    </div>
                    <div class="col-sm-1">
                    </div>
                </div>
            </div>
            
            <br><br>
        </div>

        <?php
                include 'fajlovi/footer.php';
            ?>





    <script src="js/modal.js"></script> 
    <script src="js/carousel.js"></script>       
    </body>
</html>
