<!DOCTYPE html>
<html>
<head>
	<title>tampil makanan</title>
</head>
<body>
	 <a href="<?= base_url() ?>menu/tambah" class=" btn btn-primary pull-left">Tambah Makanan</a><br><br>

	<table border="1">
		<tr>
        	<th>Id makanan</th>
        	<th>nama makanan</th>
        	<th>harga makanan</th>
        	<th>foto makanan</th>
        </tr>
       	<?php foreach ($makanan as $key):?>
        <tr>
        	<td><?=$key->id_makanan;?></td>
        	<td><?=$key->nama_makanan;?></td>
        	<td><?=$key->harga_makanan;?></td>
        	<td><img src="<?=base_url()?>foto/<?= $key->foto_makanan?>" width="100px"></td>
        </tr>
   		 <?php endforeach; ?>
	</table>

</body>
</html>