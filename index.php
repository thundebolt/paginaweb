<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <div class="container"> 
   
    <div class="col">

    </div>
     <div class="col">
            <div class="text-end">
                <img src="imagenes/logomuni.jpg" width="48px" alt="">
            </div>
        
            <h2 class="fw-blod text-center py-5">Sistema de logeo Inventario</h2>
                    <form action="validar.php" method="post">
                        <div class="mb-4">
                                <label for="user" class="form-label">Ingrese su nombre de usuario</label>
                                <input type="text" class="form-control" name="usuario">
                        </div>
                        <div class="mb-4">
                                <label for="user" class="form-label">Ingrese su contraseña</label>
                                <input type="password" class="form-control" name="contraseña">
                        </div>
                    
                        <div class="mb-4 form-check">
                               <input type="checkbox" name="connected" class="form-check-input"> 
                                <label for="connected" class="form-check-label">Mantenerme conectado</label>
                        </div>
                        <div class="d-grid">
                                <button type="submit" class="btn btn-primary "value="ingresar" >Inicio sesion</button>
                        </div>
                     
                    </form>
                </div>
          </div>
   
</body>
</html>