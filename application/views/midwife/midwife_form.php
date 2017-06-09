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
        <h2 style="margin-top:0px">Midwife <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="nama_midwife">Nama Midwife <?php echo form_error('nama_midwife') ?></label>
            <textarea class="form-control" rows="3" name="nama_midwife" id="nama_midwife" placeholder="Nama Midwife"><?php echo $nama_midwife; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="double">X <?php echo form_error('x') ?></label>
            <input type="text" class="form-control" name="x" id="x" placeholder="X" value="<?php echo $x; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Y <?php echo form_error('y') ?></label>
            <input type="text" class="form-control" name="y" id="y" placeholder="Y" value="<?php echo $y; ?>" />
        </div>
	    <div class="form-group">
            <label for="alamat">Alamat <?php echo form_error('alamat') ?></label>
            <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">No Telpon <?php echo form_error('no_telpon') ?></label>
            <input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="No Telpon" value="<?php echo $no_telpon; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" value="<?php echo $foto; ?>" />
        </div>
	    <div class="form-group">
            <label for="kecamatan">Kecamatan <?php echo form_error('kecamatan') ?></label>
            <textarea class="form-control" rows="3" name="kecamatan" id="kecamatan" placeholder="Kecamatan"><?php echo $kecamatan; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Id Post <?php echo form_error('id_post') ?></label>
            <input type="text" class="form-control" name="id_post" id="id_post" placeholder="Id Post" value="<?php echo $id_post; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Fg1 <?php echo form_error('fg1') ?></label>
            <input type="text" class="form-control" name="fg1" id="fg1" placeholder="Fg1" value="<?php echo $fg1; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Fg2 <?php echo form_error('fg2') ?></label>
            <input type="text" class="form-control" name="fg2" id="fg2" placeholder="Fg2" value="<?php echo $fg2; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Fg3 <?php echo form_error('fg3') ?></label>
            <input type="text" class="form-control" name="fg3" id="fg3" placeholder="Fg3" value="<?php echo $fg3; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Layer <?php echo form_error('layer') ?></label>
            <input type="text" class="form-control" name="layer" id="layer" placeholder="Layer" value="<?php echo $layer; ?>" />
        </div>
	    <input type="hidden" name="id_midwife" value="<?php echo $id_midwife; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('midwife') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>