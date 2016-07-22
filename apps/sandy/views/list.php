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
                    <h1>Listado de <?php echo $title; ?> (<?php echo $tf; ?>)</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <tr>
                            <form action="<?php echo "/$baseUrl/$url"; ?>/create/" method="POST">
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
                        <?php if( !$tf) : ?>
                            
                        <th>No hay <?php echo $title; ?></th>

                        <?php else : ?>
                        <tr>
                            <?php foreach ($f[0] as $field => $value) : ?>
                            <th><?php echo $field; ?></th>
                            <?php endforeach; ?>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                        <?php foreach ($f as $i => $record) : ?>
                        <tr>
                            <form action="<?php echo "/$baseUrl/$url"; ?>/modificar/" method="POST">
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
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
        <script>
            
            $('.btnEliminar').click(function() {
                
                var form = $(this).parent().parent().find('form');
                
                form.attr('action', '<?php echo "/$baseUrl/$url"; ?>/eliminar/');
                
            });
            
        </script>
        
    </body>
</html>
