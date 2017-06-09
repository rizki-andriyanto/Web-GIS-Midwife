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
        <h2 style="margin-top:0px">Midwife Read</h2>
        <table class="table">
	    <tr><td>Nama Midwife</td><td><?php echo $nama_midwife; ?></td></tr>
	    <tr><td>X</td><td><?php echo $x; ?></td></tr>
	    <tr><td>Y</td><td><?php echo $y; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>No Telpon</td><td><?php echo $no_telpon; ?></td></tr>
	    <tr><td>Foto</td><td><?php echo $foto; ?></td></tr>
	    <tr><td>Kecamatan</td><td><?php echo $kecamatan; ?></td></tr>
	    <tr><td>Id Post</td><td><?php echo $id_post; ?></td></tr>
	    <tr><td>Fg1</td><td><?php echo $fg1; ?></td></tr>
	    <tr><td>Fg2</td><td><?php echo $fg2; ?></td></tr>
	    <tr><td>Fg3</td><td><?php echo $fg3; ?></td></tr>
	    <tr><td>Layer</td><td><?php echo $layer; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('midwife') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>