<?php
    $result = $conn->query($sql);
    // hien thi len bang
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["makp"] . "</td>";
            echo "<td>" . $row["toanha"] . "</td>";
            echo "<td>" . $row["tang"] . "</td>";
            echo "<td>" . $row["tenkp"] . "</td>";
            echo "<td>" . $row["loai"] . "</td>";
            echo "</tr>";          
        }
    }
?>