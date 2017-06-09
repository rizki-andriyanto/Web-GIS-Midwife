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
        <h2 style="margin-top:0px">Subdistrict Read</h2>
        <table class="table">
	    <tr><td>Name Subdistrict</td><td><?php echo $name_subdistrict; ?></td></tr>
	    <tr><td>Content</td><td><?php echo $content; ?></td></tr>
	    <tr><td>Amount Village</td><td><?php echo $amount_village; ?></td></tr>
	    <tr><td>Amount Population</td><td><?php echo $amount_population; ?></td></tr>
	    <tr><td>Province</td><td><?php echo $province; ?></td></tr>
	    <tr><td>Area</td><td><?php echo $area; ?></td></tr>
	    <tr><td>District</td><td><?php echo $district; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('subdistrict') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>