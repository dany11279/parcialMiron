<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>App de Tienda</title>
</head>
<style>
    body {
        background-color: #f8f9fa;
        background-color: orange;
    }

    .container {
        margin-top: 50px;
    }

    h1 {
        color: #333;
        font-size: 28px;
        font-weight: bold;
    }

    form {
        background-color: blue;
        background-repeat: no-repeat;
        background-size: cover;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
       
    }
</style>

<body>
    <div class="container">
        <h1 class="text-center">Formulario del Curso de Informatica 2023</h1>
        <div class="row justify-content-center">
            <form action="/TAREACRUD.PHP/controladores/alumnos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_nom">Nombre</label>
                        <input type="text" name="alum_nom" id="alum_nom" class="form-control" placeholder="Juan">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_apelli">Apellido</label>
                        <input type="text" name="alum_apelli" id="alum_apelli" class="form-control" placeholder="Perez" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_fecha_naci">Fecha de nacimiento</label>
                        <input type="text" name="alum_fecha_naci" id="alum_fecha_naci" class="form-control" placeholder="03 de Julio de 1994" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_tel">Numero de Telefono</label>
                        <input type="number" name="alum_tel" id="alum_tel" class="form-control" placeholder="64883344" >

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="alum_correo">Correo electronico</label>
                        <input type="email" name="alum_correo" id="alum_correo" class="form-control" placeholder="ejemplo@gmail.com" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>