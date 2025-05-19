<?php
include 'service/database.php';

$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id= ?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i", $id);

if($stmt->execute()) {
    header("location: lihat.php");
    exit;
} else {
    echo "ada yang salah tuh";
}
mysqli_close($db);

?>