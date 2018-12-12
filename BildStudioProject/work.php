<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="js/app.js" type="text/javascript" defer></script>
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
            <div class="jumbotron" id="about">
                <div class="container">
                    <h3>CHECK OUT WHAT I CAN DO</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="breadcrumb">
                        <li>
                            <a href="">ALL</a>
                        </li>
                        <li>
                            <a href="">PRINT</a>
                        </li>
                        <li>
                            <a href="">PHOTOGRAPHY</a>
                        </li>
                        <li>
                            <a href="">WEB</a>
                        </li>
                        <li>
                            <a href="">APPLICATIONS</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <button type="button" name="" class="navbar-right" id="lista"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
                    <button type="button" name="" class="navbar-right" id="mreza"><span class="glyphicon glyphicon-th-large"></span></button>
                </div>
            </div>
            <div class="grid">
                <div class="row" style="padding-left: 105px;padding-right: 105px">
                	 <div class="col-sm-4">
                        <img src="home-assets/work1.jpg"style="padding-bottom: 20px" alt="" class="img-responisve" />
                    </div>

                    <div class="col-sm-4">
                        <img src="home-assets/project-buttons.jpg"style="padding-bottom: 20px "  alt="" class="img-responisve" />
                    </div>

                   <div class="col-sm-4">
                   <img src="home-assets/project-boy-and-girl.jpg" style="padding-bottom: 20px "alt="" class="img-responisve" />
                    </div>
                   <div class="col-sm-4">
                        <img src="home-assets/project-jezik.jpg" style="padding-bottom: 20px "alt="" class="img-responisve" />
                    </div>
                     <div class="col-sm-4">
                        <img src="home-assets/project-social-media.jpg" style="padding-bottom: 20px "alt="" class="img-responisve" />
                    </div>
                    <div class="col-sm-4">
                        <img src="home-assets/project-jes.jpg" style="padding-bottom: 20px "alt="" class="img-responisve" />
                    </div>
                    <div class="col-sm-4">
                        <img src="home-assets/work2.jpg" style="padding-bottom: 20px "alt="" class="img-responisve" />
                    </div>
                      <div class="col-sm-4">
                        <img src="home-assets/work3.jpg" style="padding-bottom: 20px "alt="" class="img-responisve" />
                    </div>
                     <div class="col-sm-4">
                        <img src="home-assets/work4.jpg" style="padding-bottom: 20px "alt="" class="img-responisve" />
                    </div>
                </div>
                <br>

            <div class="list sakriti">
                <div class="">
                    <img src="home-assets/project-boy-and-girl.jpg" alt="" class="img-responisve" />
                </div>
                <br>
                <div class="">
                    <img src="home-assets/project-buttons.jpg" alt="" class="img-responisve" />
                </div>
                <br>
                <div class="">
                    <img src="home-assets/project-jes.jpg" alt="" class="img-responisve" />
                </div>
                <br>
                <div class="">
                    <img src="home-assets/project-jezik.jpg" alt="" class="img-responisve" />
                </div>
                <br>
                <div class="">
                    <img src="home-assets/project-social-media.jpg" alt="" class="img-responisve" />
                </div>
                <br>
            </div>
        </div>
        <br><br>
        <?php
                include 'fajlovi/footer.php';
            ?>
    </body>
</html>
