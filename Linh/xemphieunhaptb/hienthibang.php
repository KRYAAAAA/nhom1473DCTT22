<?php
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style='width: 100px'><input type='text' value='" . $row["matb"] . "' readonly style='background-color: transparent; border: none;' name='matb[]'></td>";
            echo "<td>" . $row["tentb"] . "</td>";
            echo "<td>" . $row["loai"] . "</td>";
            echo "<td>" . $row["monnganh"] . "</td>";
            echo "<td>" . $row["dvt"] . "</td>";
            echo "<td style='width: 100px'><input type='text' value='" . $row["soluong"] . "' readonly style='background-color: transparent; border: none; width: 100px;' name='soluong[]'></td>";
            echo "</tr>";          
        }
    }
?>