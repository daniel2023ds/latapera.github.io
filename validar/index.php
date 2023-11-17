<?php
$conexion=mysqli_connect("localhost","root","","validar");


?>
<!DOCTYPE <html>
    <head>
    
        <meta>
        <meta charset="UTF-8">
        <meta http-equiv="x-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>
            la tapera tienda online
        </title>
    </head>
    <body>
        <div class="form">
        <h1>
            iniciar sesion
         </h1>
       
               <form  action="validar.php" method="POST">
       
         
           
              

                    <div class="username">
                        <input type="text" class="box" placeholder="enter username" name="usuario"> 
                        
                        

                    </div>
                    <div class="password">
                        <input type="password"class="box" placeholder="enter password" name="password" >
                        
                   
                    <div>
                        <input type="submit" value="enviar" id="submit">
                    </div>
                 
                    <div class="registro">
                        ¿no te registraste? <a href="#">registrarme</a>
                    </div>


               </form>







        </div>
    </body>

</html>
