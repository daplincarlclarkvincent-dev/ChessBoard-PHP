<!DOCTYPE html>
<html>
<head>
    <title>Chessboard in PHP</title>
</head>
<body>

<?php
echo "<table width='270px' cellspacing='0' cellpadding='0' border='1'>";

for ($row = 1; $row <= 9; $row++) {   
    echo "<tr>";
    for ($col = 1; $col <= 9; $col++) {
      
        if (($row + $col) % 2 == 0) {
            $color = "#FFFFFF"; 
        } else {
            $color = "#000000";  
        }
        echo "<td height='30px' width='30px' bgcolor='$color'></td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>

