<!DOCTYPE html>
<html>
<head>
    <title>Chessboard in PHP</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            text-align: center;
            vertical-align: middle;
            font-size: 24px;
            font-family: "Segoe UI Symbol", "Arial Unicode MS", sans-serif;
        }
    </style>
</head>
<body>

<?php
// Unicode chess pieces
$pieces = [
    "black" => ["♜","♞","♝","♛","♚","♝","♞","♜"],
    "white" => ["♖","♘","♗","♕","♔","♗","♘","♖"]
];

echo "<table width='240px' cellspacing='0' cellpadding='0' border='1'>";

for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        // Alternate square colors
        $color = (($row + $col) % 2 == 0) ? "#FFFFFF" : "#000000";
        $piece = "";

        // Place black pieces
        if ($row == 1) $piece = $pieces["black"][$col - 1];
        if ($row == 2) $piece = "♟";

        // Place white pieces
        if ($row == 7) $piece = "♙";
        if ($row == 8) $piece = $pieces["white"][$col - 1];

        // Set text color so pieces are visible
        $textColor = ($color == "#000000") ? "white" : "black";

        echo "<td height='30px' width='30px' bgcolor='$color' style='color:$textColor;'>$piece</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
