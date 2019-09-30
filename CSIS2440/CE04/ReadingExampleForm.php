<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Captain Maker</title>
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
                <form class="form-group" action="ReadingExampleResult.php" method="post">

                    <fieldset>

                        <!-- Form Name -->
                        <legend><h3>Random Captain Generator</h3></legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-8 control-label" for="CapName">Captain Name</label>  
                            <div class="col-md-8">
                                <input id="CapName" name="CapName" type="text" placeholder="Kirk" class="form-control input-md" name="CapName">
                                <span class="help-block">This is the name your Captain will go by</span>  
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-8 control-label" for="CapAge">Age</label>  
                            <div class="col-md-8">
                                <input id="CapAge" name="CapAge" type="number" min="18" max="36" placeholder="22" class="form-control input-md" name="CapAge">
                                <span class="help-block">The age should be between 19 and 35</span>  
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-8 control-label" for="ShipName">Ship Name</label>  
                            <div class="col-md-8">
                                <input id="ShipName" name="ShipName" type="text" placeholder="Serinity" class="form-control input-md" name="ShipName">
                                <span class="help-block">This is the name your ship will use</span>  
                            </div>
                        </div>

                        <div class="form-group">
 
                            <div class="col-md-8">
                                <input id="Submit" name="Submit" type="submit"  class="form-control input-group-btn" name="Submit">
                                 
                            </div>
                        </div>
                    </fieldset>
                </form>
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
