<?php
require 'functions.php';
?>

<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styleku.css">
</head>

<body>
    <div class="navbar-fixed">
        <nav class="white">
            <div class="container">
                <div class="nav-wrapper">

                    <a href="" class="brand-logo"><img src="logo.png" width="80px"><img>
                        <span class="pink-text">ARKADEMY</span><span class="black-text"> COFFEE SHOP</span>
                    </a>
                    <a href="" data-target="mobile-nav" class="sidenav-trigger">a</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#overlay" class="btn pink">ADD</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section>
        <div class="container">
            <div class="card-panel">
                <table>
                    <tr class="grey">
                        <th>No</th>
                        <th>Cashier</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    <?php $no = 1;
                    $data = query("SELECT tp.id AS ID, tch.name AS KASIR, tp.name AS PRODUCT, tc.name AS KATEGORI,tp.price AS PRICE from tabel_product AS tp left join tabel_category tc ON tp.id_category = tc.id left join table_cashier tch ON tp.id_cashier = tch.id WHERE tp.id_category = tc.id AND tp.id_cashier = tch.id");
                    ?>
                    <?php foreach ($data as $value) : ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $value["KASIR"] ?></td>
                            <td><?= $value["PRODUCT"] ?></td>
                            <td><?= $value["KATEGORI"] ?></td>
                            <td>Rp. <?= $value["PRICE"] ?></td>
                            <td><a href="?id=<?= $value['ID'] ?>#overlayEdit" class="edit">Edit</a> |
                                <a href="hapus.php?id=<?= $value['ID'] ?>" onclick="
						return confirm ('Yakin ingin menghapus data?');" class="delete">Delete</a></td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </section>

<!-- ADD -->
    <div class="overlay" id="overlay">
        <div class="container">
            <div class="row">
                <div class="col l12 card-panel">
                    <h4>ADD</h4>
                    <a class="close" href="#">X</a>
                    <div class="row">
                        <div class="col l1"></div>
                        <div class="col l10">
                            <form action="" method="POST">

                                <div class="input-field col s12">
                                    <?php $data = query("SELECT * FROM table_cashier"); ?>
                                    <select name="cashier" required>
                                        <option value="" disabled selected>Pilih Kasir!</option>
                                        <?php foreach ($data as $value) : ?>
                                            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php $data = query("SELECT * FROM tabel_product"); ?>
                                    <select id="prod" name="product" required onchange="kunci()">
                                        <option value="" disabled selected>Pilih Produk!</option>
                                        <?php foreach ($data as $value) : ?>
                                            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>


                                    <div id="container">
                                        <input class="kat" type="text" name="kategori" value="" placeholder="Pilih product!" disabled>
                                        <input name="price" value="" placeholder="Pilih product!" type="text" class="validate" disabled> 
                                    </div>

                                </div>
                                <button name="add" class="add btn pink">ADD</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['add'])) {
        $produk = $_POST['product'];
        $prod = query("SELECT tabel_product.name FROM tabel_product WHERE tabel_product.id = $produk")[0]['name'];
        $price = query("SELECT tabel_product.price FROM tabel_product WHERE tabel_product.id = $produk")[0]['price'];
        $id_kat = query("SELECT tabel_category.id FROM tabel_product LEFT JOIN tabel_category ON tabel_product.id_category = tabel_category.id WHERE tabel_product.id = $produk")[0]['id'];
        $id_kasir = $_POST['cashier'];

        $add = mysqli_query($con, "INSERT INTO tabel_product VALUES(
                '','$prod','$price', '$id_kat', '$id_kasir'
            )");

        echo "
        <script>window.location.href = 'index.php';</script>
        ";
    }
    ?>

<!-- EDIT -->
    <div class="overlayEdit" id="overlayEdit">
        <div class="container">
            <div class="row">
                <div class="col l12 card-panel">
                    <h4>EDIT</h4>
                    <a class="close" href="#">X</a>
                    <div class="row">
                        <div class="col l1"></div>
                        <div class="col l10">
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                <?php $data = query("SELECT * FROM table_cashier"); ?>
                                <?php $data = query("SELECT * FROM table_cashier"); ?>
                                <select name="cashier" required>
                                    <option value="" disabled selected>Pilih Kasir!</option>
                                    <?php foreach ($data as $value) : ?>
                                        <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php $data = query("SELECT * FROM tabel_product"); ?>
                                <select id="prod2" name="product" required onchange="kunci2()">
                                    <option value="" disabled selected>Pilih Produk!</option>
                                    <?php foreach ($data as $value) : ?>
                                        <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div id="container2">
                                        <input class="kat" type="text" name="kategori" value="" placeholder="Pilih product!" disabled>
                                        <input name="price" value="" placeholder="Pilih product!" type="text" class="validate" disabled> 
                                </div>
                        </div>
                        <button name="edit" type="submit" class="add btn pink">EDIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $produk = $_POST['product'];
        $prod = query("SELECT tabel_product.name FROM tabel_product WHERE tabel_product.id = $produk")[0]['name'];
        $price = query("SELECT tabel_product.price FROM tabel_product WHERE tabel_product.id = $produk")[0]['price'];
        $id_kat = query("SELECT tabel_category.id FROM tabel_product LEFT JOIN tabel_category ON tabel_product.id_category = tabel_category.id WHERE tabel_product.id = $produk")[0]['id'];
        $id_kasir = $_POST['cashier'];

        $edit = mysqli_query($con, "UPDATE tabel_product SET tabel_product.name='$prod', price='$price',
        id_category = '$id_kat', id_cashier = '$id_kasir'
        WHERE id=$id
        ");

        echo "
        <script>window.location.href = 'index.php';</script>
        ";
    }
    ?>


    <div class="overlayDelete" id="overlayDelete">
        <div class="container">
            <div class="row">
                <div class="col l12 card-panel">
                    <a class="close" href="#">X</a>
                    <div class="center">
                        <h5><?= $_GET['nama'] ?> <span class="id"> ID #<?= $_GET['id'] ?></span></h5>
                        <i class="material-icons large teal-text text-darken-2">check_circle</i>
                        <h5>Berhasil dihapus</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var select = document.querySelectorAll('select');
            var instances = M.FormSelect.init(select);
            // document.querySelector('.kat').value = "halo"
        });
                                        
    </script>

</body>

</html>