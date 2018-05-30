<?php include "../chk_login.php";include "../conn.php";
$id = $_GET["idv"];
echo $id;

try {
    // sql to delete a record
    $sql = "DELETE FROM videos WHERE id=".$id;

    // use exec() because no results are returned
    $db->exec($sql);
    echo "VIdeo Excluido";
}
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?><br /><a href="../videos.php">Voltar para Videos</a><br />