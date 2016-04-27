<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Saludo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Listado de usuarios (<?php echo $tf; ?>)</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <tr>
                            <?php foreach ($f[0] as $field => $value) : ?>
                            <th><?php echo $field; ?></th>
                            <?php endforeach; ?>
                        </tr>
                        <?php foreach ($f as $i => $record) : ?>
                        <tr>
                            <form action="/index.php/usuarios/create/" method="POST">
                            <?php foreach($record as $field => $value): ?>
                            <td>
                                <input class="form-control" name="<?php echo $field; ?>" value="<?php echo $value; ?>" />
                            </td>
                            <?php endforeach; ?>
                            </form>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        
        
            
<!--            <label for="nombre">Nombre</label>
            <input name="nombre" />
            <label for="pass">Pass</label>
            <input name="pass" type="password" />
            <input type="submit" value="Enviar" />-->
            
        
        
    </body>
</html>
