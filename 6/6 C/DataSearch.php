<?php

	require 'functions.php';
	$keyword = $_GET['keyword'];
	$query = "SELECT tabel_product.price FROM tabel_product WHERE tabel_product.id = $keyword";
	$harga = query($query)[0]['price'];

	$query2 = "SELECT tabel_category.name FROM tabel_product LEFT JOIN tabel_category ON tabel_product.id_category = tabel_category.id WHERE tabel_product.id = $keyword";
	$jenis = query($query2)[0]['name'];

?>
<input class="kat" type="text" name="kategori" value="" placeholder="<?= $jenis ?>" disabled>
<input name="price" value="" placeholder="Rp. <?= $harga ?>" type="text" class="validate" disabled> 