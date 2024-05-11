<?php
include "header_siswa.php";
include "koneksi.php";

$qry_detail_buku = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku = '" . $_GET['id_buku'] . "'");
$dt_buku = mysqli_fetch_array($qry_detail_buku);
?>

<div class="container content">
    <h2>Pinjam Buku</h2>

    <div class="row">
        <div class="col-md-4">
            <img src="assets/foto_produk/<?= $dt_buku['foto_buku'] ?>" class="card-img-top">
        </div>

        <div class="col-md-8">
            <form action="masukkankeranjang.php?id_buku=<?= $dt_buku['id_buku'] ?>" method="post">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama Buku</th>
                            <th><?= $dt_buku['nama_buku'] ?></th>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <th><?= $dt_buku['deskripsi'] ?></th>
                        </tr>
                        <tr>
                            <th>Jumlah Pinjam</th>
                            <th><input type="number" name="jumlah_pinjam" value="1"></th>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="btn btn-primary" type="submit" value="PINJAM"></td>
                        </tr>
                    </thead>
                </table>
            </form>
        </div>
    </div>
</div>

<?php
include "footer_siswa.php";
?>
