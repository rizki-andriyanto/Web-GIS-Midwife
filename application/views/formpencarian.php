<form action="<?php echo site_url('search/search_keyword');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" />
</form>

<table>
<?php
foreach($results as $row){
?>
    <tr>
        <td><?php echo $row->nama_midwife?></td>
        <!-- <td><?php echo $row->nama_hospital?></td> -->
       
    </tr>
<?php   
}
?>
</table>