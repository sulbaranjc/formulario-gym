
<?php
$nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';

$color = ($sexo === 'femenino') ? '#ffb6d9' : '#b6d9ff'; // rosa o azul
$mensaje = $nombre ? "¡Bienvenido(a) al Gym, $nombre!" : "¡Bienvenido(a) al Gym!";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <style>
        body { font-family: Arial, sans-serif; background: <?= $color ?>; margin: 0; }
        .container { max-width: 500px; margin: 100px auto; background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 2px 12px #0002; text-align: center; }
        .nombre { font-size: 2.5em; font-weight: bold; color: <?= $color ?>; margin-bottom: 20px; }
        .mensaje { font-size: 1.3em; color: #333; }
    </style>
</head>
<body>
    <div class="container">
        <div class="nombre"><?= $nombre ?></div>
        <div class="mensaje">¡Bienvenido(a) al Gym!</div>
    </div>
</body>
</html>
