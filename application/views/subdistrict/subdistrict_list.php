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
        <h2 style="margin-top:0px">Subdistrict List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('subdistrict/create'),'Create', 'class="btn btn-primary"'); ?>
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
                <form action="<?php echo site_url('subdistrict/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('subdistrict'); ?>" class="btn btn-default">Reset</a>
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
		<th>Name Subdistrict</th>
		<th>Content</th>
		<th>Amount Village</th>
		<th>Amount Population</th>
		<th>Province</th>
		<th>Area</th>
		<th>District</th>
		<th>Action</th>
            </tr><?php
            foreach ($subdistrict_data as $subdistrict)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $subdistrict->name_subdistrict ?></td>
			<td><?php echo $subdistrict->content ?></td>
			<td><?php echo $subdistrict->amount_village ?></td>
			<td><?php echo $subdistrict->amount_population ?></td>
			<td><?php echo $subdistrict->province ?></td>
			<td><?php echo $subdistrict->area ?></td>
			<td><?php echo $subdistrict->district ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('subdistrict/read/'.$subdistrict->id_subdistrict),'Read'); 
				echo ' | '; 
				echo anchor(site_url('subdistrict/update/'.$subdistrict->id_subdistrict),'Update'); 
				echo ' | '; 
				echo anchor(site_url('subdistrict/delete/'.$subdistrict->id_subdistrict),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
		<?php echo anchor(site_url('subdistrict/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>