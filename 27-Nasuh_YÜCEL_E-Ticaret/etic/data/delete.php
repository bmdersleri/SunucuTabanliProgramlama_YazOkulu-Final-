<?php
$db_connection = "";
include 'db.php';

if ($_POST["request"] == "fotoSil") {


    $stmt2 = $db_connection->prepare("SELECT fotoYol FROM tbl_foto WHERE foto_id= :foto_id");
    $stmt2->execute(array("foto_id" => $_POST['foto_id'],));
    $data2 = $stmt2->fetchAll();

    unlink($data2[0][0]);

    $stmt = $db_connection->prepare("DELETE FROM tbl_foto WHERE foto_id= :foto_id");
    $stmt->execute(array("foto_id" => $_POST['foto_id'],));
    $data = $stmt->fetchAll();


    echo json_encode($data);
}

?>