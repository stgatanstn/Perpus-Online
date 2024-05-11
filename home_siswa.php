<?php 
    include "header_siswa.php";
?>
 <style>
    body{
      background-color: white;
    }
    .card {
            background-color: #333333 !important;
            color: #fff !important;
            border: none !important;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-weight: bold;
            color: #fff;
            font-size: 1.2rem;
            /* Ukuran judul card */
        }

        .card-text {
            color: #fff;
            font-size: 0.9rem;
            /* Ukuran teks card */
        }

        .btn-primary {
            background-color: #007bff !important;
            border-color: #007bff !important;
            color: #fff !important;
            font-weight: bold;
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
            padding: 8px 16px;
            font-size: 0.9rem;
            /* Ukuran font dan padding tombol */
        }

        .btn-primary:hover {
            background-color: #ADB64E;
            border-color: #ADB64E;
            color: #fff !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

 </style>
<body>
    <div class="container content">
            <div class="row">
                <div class="col-md-10   ">
                <h2 class="display-4 mb-4 fw-bold">Selamat datang, 
    </br>
                <?= $_SESSION['nama_siswa'] ?>!</h2>

                <p class="lead mb-4 fw-bold">Terima kasih telah mengunjungi Perpus kami. Di sini Anda dapat menemukan berbagai Buku-buku yang anda butuhkan dan anda dapat melakukan transaksi dengan mudah.</p>
                
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/foto_produk/Logo_Telkom.png" class="d-block w-100" alt="..." style="height: 650px; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="./assets/foto_produk/31_01_2023 08_34_09.png" class="d-block w-100" alt="..." style="height: 650px; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="./assets/foto_produk/Screenshot 2024-05-07 080939.png" class="d-block w-100" alt="..." style="height: 650px; object-fit: cover;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
     <i class="fa-solid fa-circle-chevron-right"></i> </span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Daftar Produk</h5>
                                <p class="card-text">Jelajahi daftar lengkap buku-buku yang tersedia di perpustakaan kami.</p>
                                <a href="show_buku.php" class="btn btn-primary"><i class="fas fa-tag"></i> Lihat Buku</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Riwayat Pembelian</h5>
                                <p class="card-text">Pantau riwayat peminjaman buku Anda dan detail transaksi.</p>
                                <a href="histori_peminjaman.php" class="btn btn-primary"><i class="fas fa-history"></i> Lihat Riwayat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    include "footer_siswa.php";
?>
