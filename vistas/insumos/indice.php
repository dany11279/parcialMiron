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
            <form action="/PARCIALMIRON/controladores/insumos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre_insumo">Nombre del Insumo</label>
                        <input type="text" name="nombre_insumo" id="nombre_insumo" class="form-control" placeholder="Insumo">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="existencia">Cantidad en Existencia</label>
                        <input type="number" name="existencia" id="existencia" class="form-control" placeholder="10" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="marca_producto">Marca del Producto</label>
                        <input type="text" name="marca_producto" id="marca_producto" class="form-control" placeholder="marca patito" >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre_proveedor">Nombre del Proveedor</label>
                        <input type="text" name="nombre_proveedor" id="nombre_proveedor" class="form-control" placeholder="software" >

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="precio_insumo">Precio del Insumo</label>
                        <input type="number" name="precio_insumo" id="precio_insumo" class="form-control" placeholder="180" >
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