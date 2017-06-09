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
        <h2 style="margin-top:0px">Midwife List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('midwife/create'),'Create', 'class="btn btn-primary"'); ?>
                 <a href="<?php echo site_url('beranda') ?>" class="btn btn-default">Beranda</a>
                
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('midwife/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('midwife'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Midwife</th>
		<th>X</th>
		<th>Y</th>
		<th>Alamat</th>
		<th>No Telpon</th>
		<th>Foto</th>
		<th>Kecamatan</th>
		<th>Id Post</th>
		<th>Fg1</th>
		<th>Fg2</th>
		<th>Fg3</th>
		<th>Layer</th>
		<th>Action</th>
            </tr><?php
            foreach ($midwife_data as $midwife)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $midwife->nama_midwife ?></td>
			<td><?php echo $midwife->x ?></td>
			<td><?php echo $midwife->y ?></td>
			<td><?php echo $midwife->alamat ?></td>
			<td><?php echo $midwife->no_telpon ?></td>
			<td><?php echo $midwife->foto ?></td>
			<td><?php echo $midwife->kecamatan ?></td>
			<td><?php echo $midwife->id_post ?></td>
			<td><?php echo $midwife->fg1 ?></td>
			<td><?php echo $midwife->fg2 ?></td>
			<td><?php echo $midwife->fg3 ?></td>
			<td><?php echo $midwife->layer ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('midwife/read/'.$midwife->id_midwife),'Read'); 
				echo ' | '; 
				echo anchor(site_url('midwife/update/'.$midwife->id_midwife),'Update'); 
				echo ' | '; 
				echo anchor(site_url('midwife/delete/'.$midwife->id_midwife),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('midwife/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>