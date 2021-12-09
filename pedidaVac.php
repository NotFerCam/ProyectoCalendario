<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>Pedida de Vacaciones</title>

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href="fullcalendar/calendario.css" rel="stylesheet" media="all">
    <link href="css/nav.css" rel="stylesheet" media="all">
    <link href="css/pedidaVac.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="nav">
        <img src="img/mycalendar.png" class="logo">
        <div class="center">
            <a href="index.php">Cerrar Sesion</a>
        </div>   
    </div>
    <div class="page-wrapper bg-gra-03 p-t-130 p-b-100 font-poppins todo">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Pedida de Vacaciones</h2>
                    <form id="formulario" method="POST">
                        <div class="">
                            <div class="">
                                <div class="input-group">
                                    <label class="label">Dia Inicio de Vacaciones</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="primera" id="primera" autocomplete="off" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <label class="label">Dia Final de Vacaciones</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="secundaria" id="secundaria" autocomplete="off">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>                            
                        </div>          
                        <a href="calendario.php">Volver al Calendario</a>              
                        <div class="p-t-15">
                            <input type="submit" class="btn btn--radius-2 btn--blue" name="pedirvac" value="Enviar" id="pedirvac" src="calendario.php">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/pedidaVac.js"></script>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>    
</body>
</html>
<?php    
?>