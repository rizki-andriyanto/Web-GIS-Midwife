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
        <h2 style="margin-top:0px">Subdistrict <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="name_subdistrict">Name Subdistrict <?php echo form_error('name_subdistrict') ?></label>
            <textarea class="form-control" rows="3" name="name_subdistrict" id="name_subdistrict" placeholder="Name Subdistrict"><?php echo $name_subdistrict; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Content <?php echo form_error('content') ?></label>
            <input type="text" class="form-control" name="content" id="content" placeholder="Content" value="<?php echo $content; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">Amount Village <?php echo form_error('amount_village') ?></label>
            <input type="text" class="form-control" name="amount_village" id="amount_village" placeholder="Amount Village" value="<?php echo $amount_village; ?>" />
        </div>
	    <div class="form-group">
            <label for="float">Amount Population <?php echo form_error('amount_population') ?></label>
            <input type="text" class="form-control" name="amount_population" id="amount_population" placeholder="Amount Population" value="<?php echo $amount_population; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Province <?php echo form_error('province') ?></label>
            <input type="text" class="form-control" name="province" id="province" placeholder="Province" value="<?php echo $province; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Area <?php echo form_error('area') ?></label>
            <input type="text" class="form-control" name="area" id="area" placeholder="Area" value="<?php echo $area; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">District <?php echo form_error('district') ?></label>
            <input type="text" class="form-control" name="district" id="district" placeholder="District" value="<?php echo $district; ?>" />
        </div>
	    <input type="hidden" name="id_subdistrict" value="<?php echo $id_subdistrict; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('subdistrict') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>