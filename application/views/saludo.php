<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Saludo</title>
    </head>
    
    <body>
        <h1>Saludo <?php echo $idioma; ?></h1>
        
        <ul>
            <?php foreach ($idiomas as $i => $value) : ?>
            <li><?php echo $value['nombre'] . ' - ' . $i; ?></li>
            <?php endforeach; ?>
        </ul>
        
    </body>
</html>
