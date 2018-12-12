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
                    <h3>ABOUT MY BUSINESS</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="about-assets/about.jpg" alt="" class="img-responsive"/>
                </div>
                <div class="col-sm-6" style="padding-left: -10px;padding-right: -70px">
                    <p><font size="2">
                    	Mauris ut malesuada ligula, non congue metus. Cras sit amet consectetur sapien. Fusce interdum nec erat sit amet posuere. Aenean fermentum nisl at nisl euismod, sit amet lobortis purus consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse ornare gravida turpis, eget egestas orci ornare sit amet. Quisque pellentesque, turpis efficitur euismod venenatis, est tortor tempus ante, sit amet ornare diam diam accumsan ligula.
                    </br> </br>
                    	 Cras nec fermentum orci. Duis placerat nisi nibh, in suscipit quam porta sit amet. Vivamus feugiat eros non vulputate tempus. Quisque non neque a dolor finibus posuere. Aenean nec mi sit amet massa pharetra feugiat vitae malesuada metus.Pellentesque dapibus massa sapien, interdum cursus purus sollicitudin non. Nam vel interdum nunc. Quisque imperdiet fermentum est, et iaculis justo. Fusce eget risus nisi. Vivamus quis augue laoreet, imperdiet nisi id, commodo ligula. Maecenas pretium consequat facilisis. Nulla feugiat dapibus sollicitudin.
                    </font>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h4>MISSION STATEMENT</h4>
                    <p><font size="2">
                    	Curabitur pretium tempus viverra. Maecenas tincidunt mollis arcu et pellentesque. Cras vitae massa vitae nibh aliquam gravida. Integer elementum ultrices libero. Curabitur tincidunt pretium nulla in condimentum. Suspendisse ornare augue id tincidunt hendrerit. Curabitur accumsan mauris libero, bibendum tincidunt risus dictum ac. Vivamus at sollicitudin elit. Ut eu eros pretium, pulvinar turpis id, ultricies nibh. Integer egestas enim vel placerat facilisis. Phasellus eros purus, egestas eget tincidunt ac, ullamcorper id neque. Nam at nisi aliquam, molestie ipsum non, semper augue.is.
                    </font>
                    </p>
                </div>
                <div class="col-sm-6">
                    <h4>FUN FACTS</h4>
                    <p><font size="2">
                    	Mauris blandit mi fringilla nisi laoreet gravida. Sed porttitor pulvinar mi, vel finibus augue fermentum nec. Pellentesque augue sapien, maximus quis eros at, pharetra volutpat sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Donec accumsan posuere augue, eu molestie ex blandit ut. Sed blandit convallis elit in tempor. Quisque dignissim consectetur hendrerit. Curabitur leo dolor, tristique ut gravida rutrum, consectetur eu diam.
                    </font>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <h4>SERVICES</h4>
            </div>
            <div class="jumbotron">
                <div class="container">
                    <ul class="nav nav-tabs">
                        
                        <!-- u svaki od narednih IMG tagova dodati sliku
                            u src dodati putanju do slike-->
                        
                        <li>
                            <a href="#websites" data-toggle="tab">
                              <img src="about-assets/about1.jpg" alt="" class="img-responsive"/>
                            </a>
                        </li>
                        <li>
                            <a href="#photography" data-toggle="tab">
                               <img src="about-assets/about2.jpg" alt="" class="img-responsive"/>
                            </a>
                        </li>
                        <li>
                            <a href="#seo" data-toggle="tab">
                               <img src="about-assets/about3.jpg" alt="" class="img-responsive"/>
                            </a>
                        </li>
                        <li>
                            <a href="#applications" data-toggle="tab">
                               <img src="about-assets/about4.jpg" alt="" class="img-responsive"/>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div id="websites" class="tab-pane">
                            <h4>WEBSITES</h4>
                            <p><font size="2">
                    	Mauris blandit mi fringilla nisi laoreet gravida. Sed porttitor pulvinar mi, vel finibus augue fermentum nec. Pellentesque augue sapien, maximus quis eros at, pharetra volutpat sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Donec accumsan posuere augue, eu molestie ex blandit ut. Sed blandit convallis elit in tempor. Quisque dignissim consectetur hendrerit. Curabitur leo dolor, tristique ut gravida rutrum, consectetur eu diam.
                    	        </font>
                           </p>
                        </div>
                        <div id="photography" class="tab-pane">
                            <h4>PHOTOGRAPHY</h4>
                            <p><font size="2">
                            	Donec facilisis commodo turpis. Aenean et porttitor nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus maximus efficitur ligula, sed convallis urna vestibulum sed. Pellentesque placerat et risus mollis sagittis. Curabitur quis ipsum at lectus fringilla luctus. Curabitur libero mauris, placerat sed hendrerit eu, auctor vel elit. Sed sagittis justo in vehicula fermentum.
                            </font>
                            </p>
                        </div>
                        <div id="seo" class="tab-pane">
                            <h4>SEO</h4>
                            <p><font size="2">
                    	Vivamus vel viverra ante. Aliquam convallis mauris purus, a tempor metus viverra aliquet. Quisque scelerisque lorem nec vulputate gravida. Praesent bibendum, felis a auctor porttitor, felis ligula scelerisque turpis, at pharetra lectus odio in justo. Curabitur luctus justo sit amet nisi consequat fringilla eget ac mauris. Ut porta placerat ipsum eget dictum. Pellentesque eget velit auctor, luctus libero sit amet, pretium ante. Mauris accumsan metus id dolor aliquam vestibulum. Nullam nec turpis lorem. Pellentesque nisi risus, egestas vehicula mi in, dignissim egestas dolor. Vivamus quis erat urna. Nam tincidunt quis mi quis elementum. Integer faucibus pulvinar rutrum.
                              </font>
                            </p>
                        </div>
                        <div id="applications" class="tab-pane">
                            <h4>APPLICATIONS</h4>
                            <p><font size="2">
                    	Proin rhoncus felis et suscipit dapibus. Nunc enim leo, viverra vel lorem sit amet, fermentum ornare nulla. Sed mattis, neque ac condimentum ullamcorper, urna justo dignissim massa, ut mollis tortor augue in dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel rutrum leo, ultrices fringilla odio. Nunc eu erat nibh. Maecenas lobortis euismod turpis vel sagittis. Fusce et euismod felis. In in tellus et nisi blandit facilisis.
                    </font>
                    </p>
                        </div>
                   </div>
                </div>
                </div>
            </div>
        </div>
        <?php
                include 'fajlovi/footer.php';
            ?>
    </body>
</html>
