<?php
include_once('php/con-equ.php');
$result = run_query();
?>

<!DOCTYPE html>
<html>
    <head>
    	<!-- Bootstrap v3.3.7, jQuery v3.1.0, Angular v1.5.8 y Font Awesome v4.6.3-->
    	<meta charset="utf-8">
    	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="dist/css/font-awesome.min.css" />
        <script src="dist/js/jquery.min.js"></script>
    </head>

    <body>
        <div class="container">
        <h3>EQUIPOS EN INVENTARIO</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Serial</th>
                        <th>MAC</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    while($a = $result->fetch_assoc())
                    {
                ?>
                    <tr>
                        <td><?php echo $a['modelo']; ?></td>
                        <td><?php echo $a['serial']; ?></td>
                        <td><?php echo $a['mac']; ?></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>