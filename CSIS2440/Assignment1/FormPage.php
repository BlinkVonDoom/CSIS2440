<!DOCTYPE html>
<!--
Author: David Rankin
Project: Assignment 1
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fantasy Character Generator</title>
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
                <div class="col-sm-8"><header class="h2">Character Creator</header></div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form method = "post" action = "ResultPage.php">
                        <div class="form-group">
                            <lable for="HeroName">Name</lable>
                            <input type="text" name="HeroName" id="HeroName"><br>
                            <lable for="Race">Race</lable>
                            <select name="Race" id="Race">
                                <option value ="Human">Human</option>
                                <option value ="Elf">Elf</option>
                                <option value ="Halfling">Halfling</option>
                                <option value ="Dwarf">Dwarf</option>
                            </select>
                            <br>
                            <lable for="Class">Class</lable>
                            <select name="Class" id="Class">
                                <option value ="Cleric">Cleric</option>
                                <option value ="Fighter">Fighter</option>
                                <option value ="Magic-User">Magic-User</option>
                                <option value ="Thief">Thief</option>
                            </select>
                            <br>
                            <lable for="Age">Age</lable>
                            <input type="text" name="Age" id="Age">
                            <br>
                            <lable for="Gender">Gender:</lable>
                            <div id="Gender" class="form-check form-check-inline">
                                <input type="radio" value="Male" name="Gender" class="form-check-input" id="genderM"><lable for="genderM">Male</lable>  
                                <input type="radio" value="Female" name="Gender" class="form-check-input" id="genderF"><lable for="genderF">Female</lable>
                            </div>
                            <br>
                            <lable for="KingdomName">Kingdom</lable>
                            <input type="text" name="KingdomName" id="KingdomName">
                            <br>
                            <input type="submit" name="Create" value="Create Me">              
                            
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
