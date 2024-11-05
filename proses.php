<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Struk Pembelian Tiket Bioskop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hargaHari = [
            "Senin-Kamis" => 30000,
            "Jumat-Minggu" => 50000,
        ];
        $pelanggan = [
            "MBV" => ["status" => "Member VIP", "diskon" => 20],
            "MBR" => ["status" => "Member Reguler", "diskon" => 10],
            "MBN" => ["status" => "Non Member", "diskon" => 0],
        ];
        $hari = $_POST['hari'];
        $idPelanggan = $_POST['idPelanggan'];
        $jumlahBeli = $_POST['jumlahBeli'];
        $hargaTiket = $hargaHari[$hari];
        $status = $pelanggan[$idPelanggan]["status"];
        $diskonPersen = $pelanggan[$idPelanggan]["diskon"];
        $diskon = ($hargaTiket * $jumlahBeli) * ($diskonPersen / 100);
        $totalHarga = ($hargaTiket * $jumlahBeli) - $diskon;
        echo "<h1>Bioskop Saya</h1>";
        echo "<p>Jl. Siliwangi 127A, Kel.Seipanjang Jaya, Kota Bekasi</p>";
        echo "<hr>";
        echo "<p>Hari: $hari</p>";
        echo "<p>ID Pelanggan: $idPelanggan</p>";
        echo "<p>Status: $status</p>";
        echo "<p>Harga Tiket per Satuan: Rp. " . number_format($hargaTiket, 0, ',', '.') . "</p>";
        echo "<p>Diskon yang Didapat: $diskonPersen% (Rp. " . number_format($diskon, 0, ',', '.') . ")</p>";
        echo "<p>Jumlah Beli: $jumlahBeli</p>";
        echo "<hr>";
        echo "<p>Total: Rp. " . number_format($totalHarga, 0, ',', '.') . "</p>";
        echo "<h3>Terima Kasih</h3>";
    }
    ?>
    <br><br>
    <a href="index.php">Input Lagi</a>
</body>

</html>