<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$planetArray = array(0=>"Ares",1=>"Ariel",2=>"Beaumonde",3=>"Bellerophon",4=>"Haven",5=>"Hera",
    6=>"Higgins' Moon",7=>"Jiangyin",8=>"Lilac",9=>"Miranda",10=>"Osiris",11=>"Persephone",
    12=>"Regina",13=>"Santo",14=>"St. Albans",15=>"Triumph",16=>"Whitefall");
$shipsArray= array(0=>"Crate",1=>"Lightening",2=>"Starliner",3=>"VD Tug", 4=>"Biel-Corp II", 5=>"VD Behemoth");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Post Example</title>
        <!-- Custom fonts for this theme -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->

        <link href="../../../css/freelancer.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"><header class="h2">Distance Calculator</header></div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form method = "post" action = "ResultPage.php">
                        <div class="form-group">
                            <label for="ship">The Ship you will use</label>
                            <select id="ship" name="ship">
                                <option vlaue="--">--</option>
                                <?php
                                for($i=0;$i<6;$i++){
                                print("<option value=".$i.">".$shipsArray[$i]."</option>");
                                }
                                ?>
                            </select >
                            <label for="planet1">The departure planet</label>
                            <select id="planet1" name="departure">
                                <option vlaue="--">--</option>
                                <?php
                                for($i=0;$i<17;$i++){
                                    print("<option value=".$i.">".$planetArray[$i]."</option>");
                                }
                                ?>
                            </select>
                            <lable for="planet2">Destination planet</lable>
                            <select id="planet2" name="arrival">
                                <option vlaue="--">--</option>
                                <?php
                                for($i=0;$i<17;$i++){
                                    print("<option value=".$i.">".$planetArray[$i]."</option>");
                                }
                                ?>
                            </select>
                            <input type="submit" name="Create" value="Get the Estimate">              
                            
                        </div>
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="../../../vendor/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- Plugin JavaScript -->
        <script src="../../../vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>

        <!-- Contact Form JavaScript -->
        <script src="../../../js/jqBootstrapValidation.min.js" type="text/javascript"></script>
        <script src="../../../js/contact_me.min.js" type="text/javascript"></script>

        <!-- Custom scripts for this template -->
        <script src="../../../js/freelancer.min.js" type="text/javascript"></script>
    </body>
</html>
