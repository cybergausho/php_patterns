<?php
echo "<h4>Piramide</h4>";
for ($i=0; $i < 10 ; $i++) { 
    for ($j=0; $j < $i; $j++) { 
        echo " * ";
    }
    echo "<br />";
}
echo "<br /> ";
for ($i=0; $i < 10 ; $i++) { 
    for ($j=9; $j > $i; $j--) { 
        echo " * ";
    }
    echo "<br />";
}

?>