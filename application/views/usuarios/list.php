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
                <div class="col-md-12">
                    <table class="table">
                        <tr>
                            <form action="/index.php/usuarios/create/" method="POST">
                                <?php foreach ($f[0] as $field => $value) : ?>
                                <th>
                                    <input class="form-control" placeholder="<?php echo $field; ?>" id="<?php echo $field; ?>" name="<?php echo $field; ?>" />
                                </th>
                                <?php endforeach; ?>
                                <th>
                                    <input class="form-control" type="submit" value="Guardar" />
                                </th>
                            </form>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <tr>
                            <?php foreach ($f[0] as $field => $value) : ?>
                            <th><?php echo $field; ?></th>
                            <?php endforeach; ?>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                        <?php foreach ($f as $i => $record) : ?>
                        <tr>
                            <form action="/index.php/usuarios/modificar/" method="POST">
                            <?php foreach($record as $field => $value): ?>
                            <td>
                                <input class="form-control" id="<?php echo $field; ?>" name="<?php echo $field; ?>" value="<?php echo $value; ?>" />
                            </td>
                            <?php endforeach; ?>
                            <td>
                                <input type="submit" value="Guardar" />
                            </td>
                            <td>
                                <input class="btnEliminar" type="submit" value="Eliminar" />
                            </td>
                            </form>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        
        <script
			  src="https://code.jquery.com/jquery-2.2.3.min.js"
			  integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
			  crossorigin="anonymous"></script>
        <script>
            
            $('.btnEliminar').click(function() {
                
                var form = $(this).parent().parent().find('form');
                
                form.attr('action', '/index.php/usuarios/eliminar/');
                
            });
            
        </script>
        
    </body>
</html>
