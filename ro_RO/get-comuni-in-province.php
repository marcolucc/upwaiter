<?php

require_once("./db.php");
$province_id = $_POST["province_id"];
$conn->set_charset("utf8"); // necessary otherwise cannot show some special charactcher
$sql = "SELECT id, nome FROM comuni WHERE id_provincia=$province_id ORDER BY nome";
$result = $conn->query($sql);
while($row = mysqli_fetch_assoc($result)) {
    echo "<option value=\"".$row['id']."\">".$row['nome']."</option>";
}
?>