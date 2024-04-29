<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css">
</head>
<body>
    <!-- PHP -->
    <?php
    $namaDpn = $_POST['First-nama'];
    $NamaLengkap = $_POST['First-nama'] . " " . $_POST['last-name'];
    $jenisKelamin = isset($_POST['input-gender']) ? $_POST['input-gender'] : 'Tidak ketahui';
    $negara = $_POST['negara'];
    $bahasa = isset($_POST['bahasa']) ? implode(", ", $_POST['bahasa']) : "bahasa tidak ditemukan";
    $bio = $_POST['bio-textarea'];
    ?>
    <div align="center" style="align-items: center; margin: 17rem;">
        <H1 style="font-family: poppins, sans-serif;">SELAMAT DATANG! <?= $NamaLengkap?></H1>
        <h3>Data anda</h3>
        <h3>Nama Lengkap : <?= $NamaLengkap ?></h3>
        <h3>Jenis Kelamin : <?= $jenisKelamin ?></h3>
        <h3>Negara : <?= $negara ?></h3>
        <h3>Bahasa yang dikuasai : <?= $bahasa ?></h3>
        <h3><i>Quotes</i> : <?= $bio ?></h3>
        <h3>Terimakasih <i><?= $namaDpn ?></i> telah bergabung di website kami. Media Belajar kita bersama</h3>
    </div>
</body>
</html>