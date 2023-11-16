<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="center">PENCARIAN DATA NASABAH</h1>
        <form style="padding-bottom:20px;" action="search.php" method="GET">
            <div class="mb-3">
                <label class="form-label">Masukkan ID Nasabah</label>
                <input type="text" class="form-control" name="nid" placeholder="Masukkan ID Nasabah">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="index.php" class="btn btn-primary">Input Data</a>
        </form>
        <?php
include "koneksi.php";
require('polyalpha.php');
$key = "KEY";

$result = null; // Inisialisasi $result dengan nilai default

if (isset($_GET['nid'])) {
    $nid = $_GET['nid'];
    $query = mysqli_query($connection, "SELECT * FROM nasabah WHERE nid='$nid'");
    $result = mysqli_fetch_array($query);
}
?>
<div class="card">
    <div class="card-header">
        Detail Nasabah
    </div>
    <div class="card-body">
        <?php if ($result): ?>
            <h5 class="card-title"><?php echo decrypt($result['nid'], $key); ?></h5>
            <p class="card-text"><?php echo decrypt($result['nama'], $key); ?></p>
            <p class="card-text"><?php echo decrypt($result['email'], $key); ?></p>
            <p class="card-text"><?php echo decrypt($result['nohp'], $key); ?></p>
            <p class="card-text"><?php echo decrypt($result['alamat'], $key); ?></p>
        <?php else: ?>
            <p>Nasabah tidak ditemukan</p>
        <?php endif; ?>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
