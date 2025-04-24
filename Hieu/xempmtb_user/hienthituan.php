<?php 
    $sql2 = "SELECT DISTINCT tuan FROM `ngaymuon` WHERE maphieu = '$mp'";
    $result = $conn->query($sql2);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li class='dropdown-item'><input type='checkbox' disabled checked>&nbsp".$row["tuan"]."</li>";
        }
    }
?>