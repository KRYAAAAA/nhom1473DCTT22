<?php
    $result = $conn->query($sql);
    // hien thi len bang
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><input type='text' value='" . $row["matb"] . "' readonly style='background-color: transparent; border: none;' name='matb[]'></td>";
            echo "<td>" . $row["tentb"] . "</td>";
            echo "<td>" . $row["khophong"] . "</td>";
            echo "<td>" . $row["monnganh"] . "</td>";
            echo "<td>" . $row["soluong"] . "</td>";
            echo "<td>" . $row["hong"] . "</td>";
            echo "<td>" . $row["mat"] . "</td>";
            echo "<td>" . $row["conlai"] . "</td>";            
            echo "<td>" . $row["dvt"] . "</td>";
            echo "<td>" . $row["loai"] . "</td>";
            echo "<td>" . $row["nguongoc"] . "</td>";
            echo "<td><input style ='width: 120px;' type='number' name = 'soluong[]' min='0' max='". $row["hong"] ."'></td>";
            echo "</tr>";          
        }
    }
?>
