<?php

require_once("./db.php");
$region_id = $_POST["region_id"];
$conn->set_charset("utf8"); // necessary otherwise cannot show some special charactcher
$sql = "SELECT id, nome FROM province WHERE id_regione=$region_id ORDER BY nome";
$result = $conn->query($sql);
while($row = mysqli_fetch_assoc($result)) {
    echo "<option value=\"".$row['id']."\">".$row['nome']."</option>";
}
?>