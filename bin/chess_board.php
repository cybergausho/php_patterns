<h4>Chess board</h4>

<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    echo "<tr>";
    echo "<td></td>";
    for ($i = 65; $i <= (65 + 7); $i++) {
        $letra = chr($i);
        echo "<td height=30px>";
        echo $letra;
        echo "</td>";
    }
    echo "</tr>";

    for ($row = 8; $row >= 1; $row--) {
        echo "<td width=30px>" . $row . "</td>";
        for ($col = 1; $col <= 8; $col++) {
            $par = $row + $col;
            if ($par % 2 == 0) {
                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            } else {
                echo "<td height=30px width=30px bgcolor=#000000></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>