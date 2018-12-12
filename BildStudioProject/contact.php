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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <h3>GOT A QUESTION OR INQUIRY?</h3>
                </div>
            </div>
        </div>
    	<p><iframe src="https://www.google.com/maps/embed?pb=" width="1350" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>"></iframe>
    	</p>
   <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <h4>CONTACT FORM</h4>
                    <p>Proin pharetra volutpat quam, nec malesuada elit lobortis id. Curabitur mauris sem, scelerisque et sem et, auctor lobortis felis. Nulla tincidunt rutrum tempus.</p>
                    <br>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <input type="text" name="tekst" placeholder="Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Subject" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="10"></textarea>
                    </div>
                    <button type="button" name="send" class="btn" style="background-color: rgb(45,204,114); color: white;">SEND MESSAGE</button>
                </div>
                <div class="col-sm-5">
                    <h4>CONTACT INFO</h4>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor neque, euismod sed ante in, bibendum ornare orci.</h5>
                    <b>email:</b><span>info@display.com</span><br>
                    <b>phone:</b><span>1.306.222.4545</span><br>
                    <h5>
                        222 2nd Ave South
                    </h5>
                    <h5>
                        Saskabush, SK S7M 1T6
                    </h5>
                    <br>
                    <h4>STORE HOURS</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Monday - Thursday</h5>
                            <h5>Friday</h5>
                            <h5>Saturday</h5>
                            <h5>Sunday & Holiday</h5>
                        </div>
                        <div class="col-sm-6">
                            <h5>8am - 5pm</h5>
                            <h5>8am - 6pm</h5>
                            <h5>9am - 5pm</h5>
                            <h5>Closed</h5>
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