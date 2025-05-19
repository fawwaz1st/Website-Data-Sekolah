<?php
include "service/database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $kelas = $_POST['kelas'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $jurusan = $_POST['jurusan'];
    $sebagai = $_POST['sebagai'];
    $sql = "INSERT INTO user (nama, nisn, kelas, jeniskelamin, jurusan, sebagai)
    VALUES ('$nama', '$nisn', '$kelas', '$jeniskelamin', '$jurusan', '$sebagai')";
    mysqli_query($db, $sql);
    
    header("location: lihat.php");
    exit();
}

$result = mysqli_query($db, "SELECT * FROM user");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa/Guru</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include "layout/header.html" ?>
    <div class="container">
    <form class="card m-5 p-4 align-content-center bg-secondary bg-opacity-25 shadow-lg" action="" method="POST">
        <h3 class="text-center">Tambah Data Siswa/Guru</h3>
        <label class="form-label">Nama</label>
        <input class="form-control form-text" type="text" name="nama" placeholder="Masukkan nama" required autofocus>

        <label class="form-label">NIS/NIP</label>
        <input class="form-control form-text" type="number" name="nisn" placeholder="Masukkan Nisn/Nip" required>

        <label class="form-label">Kelas</label>
        <select name="kelas" class="form-select" required>
            <option>X</option>
            <option>XI</option>
            <option>XII</option>
        </select>

        <label class="form-label">Jenis Kelamin</label>
        <select name="jeniskelamin" class="form-select" required>
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>

        <label class="form-label">Jurusan</label>
        <input class="form-control form-text" type="text" name="jurusan" placeholder="jurusan" required>

        <label class="form-label">Sebagai</label>
        <select class="form-select" name="sebagai" required>
            <option>Siswa</option>
            <option>Guru</option>
        </select>
        <button type="submit" class="btn btn-primary mt-3 text-white mx-auto px-5">tambah data</button>
    </form>
    </div>
    <?php include "layout/footer.html" ?>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>