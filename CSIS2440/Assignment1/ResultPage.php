<!DOCTYPE html>
<?php
include 'CharacterFormatter.php';

//print_r($_POST);

$heroName = $_POST['HeroName'];
$class = $_POST['Class'];
$race = $_POST['Race'];
$age = $_POST['Age'];
$gender = $_POST['Gender'];
$kingdomName = $_POST['KingdomName'];


$classInfo = explode('}', file_get_contents("ClassInfo.txt"));
$raceInfo = explode('}', file_get_contents("RaceInfo.txt"));

$charImage = "images/";
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>A made Adventurer</title>
        <!-- Custom fonts for this theme -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->

        <link href="../../../css/freelancer.min.css" rel="stylesheet" type="text/css"/>
        <style>
            img {
                height: 250px;
                padding: 3pt;
            }
            p{
                margin-left: 8px;
            }
            
            .hero-info {
              text-align: center;
            }
        </style>
    </head>

    <body>
        <div id="CharacterSheet" class="container">
            <div class="row">
                <h3 class="Content">The Brave Adventurer</h3>
            </div>
            <div class="row">
                 <div class="col-md-3">
                    <?php
                    //print random stats here
                    $str = rand(3, 18);
                    $con = rand(3, 18);
                    $dex = rand(3, 18);
                    $wis = rand(3, 18);
                    $int = rand(3, 18);
                    $cha = rand(3, 18);
                    print("Str: $str <br>"
                            . "Con: $con <br>"
                            . "Dex: $dex <br>"
                            . "Wis: $wis <br>"
                            . "Int: $int <br>"
                            . "Cha: $cha <br>");
                    ?>
                </div>
                <div class="col-md-5">
                    <?php
                   //print character info here
                    
                    //print_r($classInfo);
                    //print_r($raceInfo);
                    
                    print("<div class='hero-info'><b>$heroName</b> from <b>$kingdomName</b><br>"
                            . "<b>$race $class</b> at the age of $age<br></div>");
                    
                    
                    switch ($race) {
                      case 'Human':
                        print(str_replace('{', '', $raceInfo[0]));
                        $charImage = $charImage . "Hu";
                        break;
                      case 'Elf':
                        print(str_replace('{', '',$raceInfo[1]));
                        $charImage = $charImage . "El";
                        break;
                      case 'Dwarf':
                        print(str_replace('{', '', $raceInfo[2]));
                        $charImage = $charImage . "Dw";
                        break;
                      case 'Halfling':
                        print(str_replace('{', '', $raceInfo[3]));
                        $charImage = $charImage . "Ha";
                        break;
                      default:
                        break;
                    }
                    
                    switch ($class) {
                      case 'Fighter':
                        print(str_replace('{', '', $classInfo[0]));
                        $charImage = $charImage . "Fi";
                        break;
                      case 'Cleric':
                        print(str_replace('{', '', $classInfo[1]));
                        $charImage = $charImage . "Cl";
                        break;
                      case 'Thief':
                        print(str_replace('{', '', $classInfo[2]));
                        $charImage = $charImage . "Th";
                        break;
                      case 'Magic-User':
                        print(str_replace('{', '', $classInfo[3]));
                        $charImage = $charImage . "Ma";
                        break;
                      default:
                        break;
                    }
                    
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                    switch ($gender) {
                      case 'Male':
                        $charImage = $charImage . "Ma.jpg";
                        break;
                      case 'Female':
                        $charImage = $charImage . 'Fe.jpg';
                        break;
                      default:
                        break;
                    }
                    //print($charImage);
                    print("<img src=$charImage>")
                    ?>
                </div>
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
