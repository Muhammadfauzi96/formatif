<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Bioskop Almahhyra</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Form Pembelian Tiket Bioskop</h2>
    <form method="post" action="proses.php">
        <label for="hari">Hari:</label>
        <select name="hari" id="hari" required>
            <option value="Senin-Kamis">Senin-Kamis</option>
            <option value="Jumat-Minggu">Jumat-Minggu</option>
        </select><br><br>

        <label for="idPelanggan">ID Pelanggan:</label>
        <select name="idPelanggan" id="idPelanggan" required>
            <option value="MBV">MBV - Member VIP</option>
            <option value="MBR">MBR - Member Reguler</option>
            <option value="MBN">MBN - Non Member</option>
        </select><br><br>
        <label for="jumlahBeli">Jumlah Beli:</label>
        <input type="number" name="jumlahBeli" id="jumlahBeli" required min="1"><br><br>
        <input type="submit" name="submit" value="Cetak Struk">
    </form>
</body>

</html>