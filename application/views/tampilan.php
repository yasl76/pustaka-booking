<!DOCTYPE html>
<html>
<head>
    <title>Penjumlahan</title>
</head>
<body>
    <h2>Form Penjumlahan</h2>

    <form action="<?= site_url('Latihan1/penjumlahan'); ?>" method="post">
        <label>Angka 1:</label>
        <input type="number" name="nilai1" required><br><br>

        <label>Angka 2:</label>
        <input type="number" name="nilai2" required><br><br>

        <button type="submit">Jumlahkan</button>
    </form>

    <?php if (isset($hasil)): ?>
        <h3>Hasil: <?= $hasil; ?></h3>
    <?php endif; ?>
</body>
</html>
