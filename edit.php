<?php
include "service/database.php";

if (isset($_GET['id'])){
$id = $_GET['id'];
$query = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);
} else {
    echo "GAGAL WOI";
    exit();
}

if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $kelas = $_POST['kelas'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $jurusan = $_POST['jurusan'];
    $sebagai = $_POST['sebagai'];
    $sql = "UPDATE user SET nama='$nama', nisn='$nisn', kelas='$kelas', jeniskelamin='$jeniskelamin', jurusan='$jurusan', sebagai='$sebagai' WHERE id='$id'";
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
    <title>Edit Data Siswa/Guru</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include "layout/header.html" ?>
    <div class="container">
    <form class="card m-5 p-4 align-content-center bg-success bg-opacity-25 shadow-lg" action="" method="POST">
        <h3 class="text-center">Edit Data Siswa/Guru</h3>
        <label class="form-label">Nama</label>
        <input value="<?= $data['nama']?>" class="form-control form-text" type="text" name="nama" autofocus>

        <label class="form-label">NIS/NIP</label>
        <input value="<?= $data['nisn']?>" class="form-control form-text" type="number" name="nisn" placeholder="Masukkan Nisn/Nip">

        <label class="form-label">Kelas</label>
        <select name="kelas" class="form-select">
            <option value="X" <?php if ($data['kelas'] == 'X') echo "selected" ?>>X</option>
            <option value="XI" <?php if ($data['kelas'] == 'XI') echo "selected" ?>>XI</option>
            <option value="XII" <?php if ($data['kelas'] == 'XII') echo "selected" ?>>XII</option>
        </select>

        <label class="form-label">Jenis Kelamin</label>
        <select value="<?= $data['jeniskelamin']?>" name="jeniskelamin" class="form-select">
            <option value="Laki-laki" <?php if ($data['jeniskelamin'] == 'Laki-laki') echo "selected" ?>>Laki-laki</option>
            <option value="Perempuan" <?php if ($data['jeniskelamin'] == 'Perempuan') echo "selected" ?>>Perempuan</option>
        </select>

        <label class="form-label">Jurusan</label>
        <input value="<?= $data['jurusan']?>" class="form-control form-text" type="text" name="jurusan" placeholder="jurusan">

        <label class="form-label">Sebagai</label>
        <select class="form-select" name="sebagai">
            <option value="Siswa" <?php if ($data['sebagai'] == 'Siswa') echo "selected" ?>>Siswa</option>
            <option value="Guru" <?php if ($data['sebagai'] == 'Guru') echo "selected" ?>>Guru</option>
        </select>
        <button type="submit" name="edit" class="btn btn-success bg-opacity-50 mt-3 text-white mx-auto px-5">edit data</button>
    </form>
    </div>
    <?php include "layout/footer.html" ?>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>