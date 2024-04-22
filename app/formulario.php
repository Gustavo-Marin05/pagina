<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Formulario Tarjetas</h1>
    <form class="row" method="POST" action="guardar.php">
        <div class="mb-3 row">
            <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="titulo" name="titulo" value="">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="descripcion" name="descripcion">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="imagen" class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="imagen" name="imagen">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="url" class="col-sm-2 col-form-label">URL</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="url" name="url">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="estado" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="estado" name="estado">
            </div>
        </div>
        <div class="mb-3 row">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>