<!doctype html>
<html>
    <head>
        <title>CRUD WEBGIS</title>
       
        <link rel="stylesheet" href="<?php echo base_url('assets-crud/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Poin Read</h2>
        <table class="table">
	    <tr><td>Jenis</td><td><?php echo $jenis; ?></td></tr>
	    <tr><td>Foto</td><td><?php echo $foto; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('poin') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>