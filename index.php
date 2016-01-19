<?php
    error_reporting(0);
    include_once 'class/Connector.php';
    $db = new Connector();
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Start DevWorms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="navbar navbar-fixed-top header" id="subnav">
        <div class="col-md-12">
            <div class="navbar-header">                
                <img src="img/logo.png">               
            </div>
        </div> 
    </div>

                <br><br><br><br>
    <!--main-->
    <div class="container" id="main">
        <div class="panel panel-default">
            <div class="panel-body">

                <!-- **********************  FORM 1  **********************-->
                <div class="step well">
                    <h2>Form I</h2>
                    <br><br>

                    <div class="row">
                        <div class="col-md-4">
                            Nombre
                            <input type="text" id="name" placeholder="John Doe" class="form-control">
                            <br>

                            Correo
                            <input type="text" id="mail" placeholder="ejemplo@devworms.com" class="form-control">
                            <br>

                            Contraseña
                            <input type="password" id="pass" placeholder="pass1234"  class="form-control">
                            <br>
                        </div>
                    </div>                    

                    <button class="btn btn-success" id="btn_form1"> LISTO </button>
                </div> 
                
                <button class="action back btn btn-info" id="btnSiguiente" style="display:none">Back</button>               
            </div> 
        </div>

        <!-- **********************  FOOTER  ********************** -->
        <div class="row">
            <div class="clearfix"></div>
                <hr>
                <div class="col-md-12 text-center">
                    <p style="color:#545B60">
                        <a href="http://devworms.com" target="_blank">DevWorms</a>
                    </p>
                </div>
        </div>

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/postform.js"></script>
</body>
</html>