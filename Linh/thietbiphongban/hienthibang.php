<?php  
    $result = $conn->query($sql);
    // hien thi len bang
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["mapb"] . "</td>";
            echo "<td>" . $row["tenpb"] . "</td>";
            echo "<td style='width: 82px;'><button class='btn btn-warning' style='color: white; background-color: rgb(245, 155, 0);height: 30px; font-size: 75%;' type='submit' name ='btnchitiet'>Chi tiết</button></td>";
            echo "</tr>";          
        }
    }
?>