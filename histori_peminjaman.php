<?php
include "header_siswa.php";
?>



<div class="container content">
    <h2>Histori Peminjaman Buku</h2>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Harus Kembali</th>
                <th>Buku Dipinjam</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";

            $qry_histori = mysqli_query($conn, "SELECT * FROM peminjaman_buku ORDER BY id_peminjaman_buku DESC");
            $no = 0;

            while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                $no++;

                // Get borrowed books
                $buku_dipinjam = "<ol>";
                $qry_buku = mysqli_query($conn, "SELECT * FROM detail_peminjaman_buku JOIN buku ON buku.id_buku=detail_peminjaman_buku.id_buku WHERE id_peminjaman_buku = '" . $dt_histori['id_peminjaman_buku'] . "'");
                while ($dt_buku = mysqli_fetch_array($qry_buku)) {
                    $buku_dipinjam .= "<li>" . $dt_buku['nama_buku'] . "</li>";
                }
                $buku_dipinjam .= "</ol>";

                // Get return status
                $qry_cek_kembali = mysqli_query($conn, "SELECT * FROM pengembalian_buku WHERE id_peminjaman_buku = '" . $dt_histori['id_peminjaman_buku'] . "'");
                if (mysqli_num_rows($qry_cek_kembali) > 0) {
                    $dt_kembali = mysqli_fetch_array($qry_cek_kembali);
                    $denda = "Denda Rp. " . $dt_kembali['denda'];
                    $status_kembali = "<label class='alert alert-success'>Sudah kembali <br>" . $denda . "</label>";
                    $button_kembali = "";
                } else {
                    $status_kembali = "<label class='alert alert-danger'>Belum kembali</label>";
                    $button_kembali = "<a href='kembali.php?id=" . $dt_histori['id_peminjaman_buku'] . "' class='btn btn-warning' onclick='return confirm(\"Yakin ingin mengembalikan?\")'>Kembalikan</a>";
                }

                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $dt_histori['tanggal_peminjaman'] ?></td>
                    <td><?= $dt_histori['tanggal_kembali'] ?></td>
                    <td><?= $buku_dipinjam ?></td>
                    <td><?= $status_kembali ?></td>
                    <td><?= $button_kembali ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include "footer_siswa.php";
?>
