<?php
    
    $result = $conn->query($sql);
    // hien thi len bang
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {     
            if($row["role"] != "admin"){
            echo "<tr>";
            echo "<td>" . $row["macb"] . "</td>";
            echo "<td>" . $row["matkhau"] . "</td>";
            echo "<td>" . $row["tencb"] . "</td>";
            echo "<td>" . $row["tenpb"] . "</td>";
            echo " <td>  <button type='submit' class='btn btn-info' onclick ='kiemtra' name='btnxoa' >Xóa</button> </td>";
            echo "</tr>";  
            }
                    
        }
    }
?>