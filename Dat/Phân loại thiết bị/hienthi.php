<?php
    
    $result = $conn->query($sql);
    // hien thi len bang
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["mapl"] . "</td>";
            echo "<td>" . $row["tenpl"] . "</td>";
            echo "<td>" . $row["ghichu"] . "</td>";
            echo " <td>  <button type='submit' class='btn btn-info' onclick ='kiemtra' name='btnxoa' >Xóa</button> </td>";
            echo "</tr>";          
        }
    }
?>