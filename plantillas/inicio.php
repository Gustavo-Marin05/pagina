
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  if(!isset($titulo)|| empty($titulo)){//defide la variable titulo esta no esta definida o si esta vacia ,si es el caso sera true
  $titulo='Facultad de medicina';
  }


  echo "<title>$titulo</title>";
  ?>
  <link rel="stylesheet" href="css/styles.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




</head>

<body>