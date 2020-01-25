<?php
if (isset($_GET['id'])) {
    require 'functions.php';
    $id = $_GET['id'];
    $na = query("SELECT id_cashier from tabel_product
    WHERE id=$id")[0]['id_cashier'];
    $nama = query("SELECT name FROM table_cashier WHERE id=$na")[0]['name'];
    $delete = mysqli_query($con, "DELETE FROM tabel_product WHERE id=$id");




    if ($delete) {
        header("Location:index.php?nama=$nama&id=$id#overlayDelete");
    } else {
        echo "Ada kesalahan";
    }
}
