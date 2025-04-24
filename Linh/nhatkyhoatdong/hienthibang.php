<?php
    $result = $conn->query($sql);
    // hien thi len bang
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["macb"] . "</td>";
            echo "<td>" . $row["tencb"] . "</td>";
            echo "<td>" . $row["hoatdong"] . "</td>";
            echo "<td>" . $row["thoigian"] . "</td>";
            echo "</tr>";          
        }
    }
?>