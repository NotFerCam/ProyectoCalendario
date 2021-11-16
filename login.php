<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    
    <title>Sign In Calendar</title>

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Inicia Sesión!</h2>
                    <form method="POST">     
                        <div class=" ">
                            <div class="">
                                <div class="">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" id="email" required>
                                </div>
                            </div>                                                       
                        </div> 
                        <div class=" ">
                            <div class="">
                                <div class="">
                                    <label class="label">Contraseña</label>
                                    <input class="input--style-4" type="password" name="pass" id="pass" required>
                                </div>
                            </div>                                                       
                        </div>      
                        <a class="rojo">
                            <?php
                                error_reporting(0);

                                if(isset($_REQUEST['login'])){

                                    $base = "calendario";

                                    $tabla = "profesor";
                            
                                    $conexion = mysqli_connect("localhost","root","toor");
                            
                                    mysqli_select_db($conexion,$base);
                            
                                    $pass = $_REQUEST['pass'];
                                    $email= $_REQUEST['email'];                                          
                                                                    
                                    $contraseña = mysqli_query($conexion,"SELECT Contraseña FROM profesor WHERE Email='$email'");
                                    while ($registro = mysqli_fetch_row($contraseña)){                        
                                        foreach($registro  as $clave){
                                            if($clave==$pass){
                                                session_start();
                                                $_SESSION['email'] = $email;

                                                header("Location: calendario.php");
                                                exit;
                                            }else{
                                                echo "Correo electronico o contraseña inválidos";
                                            } 
                                        }
                                    }

                                }
                                                               
                                mysqli_close($conexion)  
                            ?>
                        </a>                                                                                                  
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" id="login" name="login">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/login.js"></script>
</html>