<?php 
    $sql2 = "SELECT * FROM `phongban` ";
    $result = $conn->query($sql2);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li class='dropdown-item'><input type='radio' name='phongban' id='phongban' value='".$row["mapb"]."'>&nbsp".$row["tenpb"]."</li>";
        }
    }
?>