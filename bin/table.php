<h4>Tabla de multiplicar</h4>

<table border="1">
<?php
for ($x=1; $x<=10; $x++){
    echo "<tr>";
    for ($y=1; $y<=10 ; $y++){
        echo "<td>". $x*$y . "</td>";
    }
    echo "</tr>";
}
?>
</table>