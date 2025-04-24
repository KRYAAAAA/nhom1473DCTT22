<?php  
    $result = $conn->query($sql);
    // hien thi len bang
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["matb"] . "</td>";
            echo "<td>" . $row["tentb"] . "</td>";
            echo "<td>" . $row["monnganh"] . "</td>";
            echo "<td>" . $row["loai"] . "</td>";
            echo "<td>" . $row["dvt"] . "</td>";
            echo "<td>" . $row["soluong"] . "</td>";
            echo "<td>" . $row["hong"] . "</td>";
            echo "<td>" . $row["mat"] . "</td>";
            echo "<td>" . $row["conlai"] . "</td>";
            echo "</tr>";          
        }
    }
?>