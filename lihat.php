<?php
include "service/database.php";
$result = mysqli_query($db, "SELECT * FROM user");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa/Guru</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include "layout/header.html" ?>
    <div class="container">
        <table class="table table-responsive table-striped table-bordered mt-5 mx-auto text-center shadow-lg">
            <th>ID</th>
            <th>Nama</th>
            <th>NIS/NIP</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Sebagai</th>
            <th>Aksi</th>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nisn'] ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['jeniskelamin'] ?></td>
                <td><?= $row['jurusan'] ?></td>
                <td><?= $row['sebagai'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']?>" class="btn btn-info btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $row['id']?>" onclick="return confirm ('Yakin Hapus? Ga bisa dibalikkin lho')" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <?php include "layout/footer.html" ?>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>