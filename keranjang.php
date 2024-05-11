<?php
include "header_siswa.php";
?>

<div class="container content">
    <h2>Daftar Buku di Keranjang</h2>

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['cart'])) {
                $no = 1;
                foreach ($_SESSION['cart'] as $key_produk => $val_produk) {
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $val_produk['nama_buku'] ?></td>
                        <td><?= $val_produk['qty'] ?></td>
                        <td><a href="hapus_cart.php?id=<?= $key_produk ?>" class="btn btn-danger"><strong>X</strong></a></td>
                    </tr>
                    <?php
                    $no++;
                }
            } else {
                echo '<tr><td colspan="4">Keranjang kosong</td></tr>';
            }
            ?>
        </tbody>
    </table>

    <?php if (isset($_SESSION['cart'])) { ?>
        <a href="checkout.php" class="btn btn-primary">Check Out</a>
    <?php } ?>

    <?php
    include "footer_siswa.php";
    ?>
