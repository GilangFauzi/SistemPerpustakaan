<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/styleBuku.css">
</head>

<body>
    <div id="container">
        <div id="header-top">
            <div id="title-container">
                <div class="subtitle-container">
                    <h1 class="judul">PERPUSTAKAAN UMUM</h1>
                </div>
                <div class="subtitle-container">
                    Jl. Pendidikan No.10 Desa Babakan Kelurahan Rumpin Kota Tangerang Kabupaten Bogor
                </div>
            </div>
        </div>
        <div id="header2-top">
            <h3>
                <marquee behavior="alternate" height="50" scrollamount="6">Hallo Gilang Fauzi
                </marquee>
            </h3>
        </div>
        <div id="sidebar">
            <a href="../../index.php">Beranda</a>
            <p class="label-navigasi">Data Master</p>
            <ul>
                <li><a href="../anggota/dataAnggota.php">Data Anggota</a></li>
                <li><a href="../buku/dataBuku.php">Data Buku</a></li>
            </ul>
            <p class="label-navigasi">Data Transaksi</p>
            <ul>
                <li><a href="../pinjaman/dataPinjaman.php">Transaksi Pinjaman</a></li>
                <li><a href="../pengembalian/dataPengembalian.php">Transaksi Pengembalian</a></li>
            </ul>
            <p class="label-navigasi">Laporan Transaksi</p>
            <ul>
                <li><a href="../../cetakTransaksi.php">Cetak Laporan Transaksi</a></li>
            </ul>
            <a href="#">Logout</a>
        </div>
        <div id="content-container">
            <div class="container">
                <div class="row">
                    <br>
                    <div id="label-page">
                        <h3>Input Data Buku</h3>
                    </div>
                    <div id="beranda-konten">

                        <form action="../../proses/addBuku.php" method="post">
                            <div class="row">
                                <label>Kode Buku</label>
                                <input type="text" name="kd_buku" value="BKU" required>
                            </div>
                            <div class="row">
                                <label>Judul Buku</label>
                                <input type="text" name="judul_buku" required placeholder="Masukan Judul Buku"><br>
                            </div>
                            <div class="row">
                                <label>Penulis Buku</label>
                                <input type="text" name="penulis_buku" required placeholder="Masukan Penulis Buku"><br>
                            </div>
                            <div class="row">
                                <label>Tahun Terbit</label>
                                <input type="text" name="tahun_terbit" required placeholder="Masukan Tahun Terbit"
                                    onkeypress="return hanyaAngka(event)"><br>
                            </div>
                            <button class="button" type="Submit" name="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">Sistem Informasi Perpustakaan</div>
    </div>
    <script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
    </script>
</body>

</html>