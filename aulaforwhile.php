<?php
echo "<h1>usando o for</h1>";
for ($i=0; $i<10; $i++) {
    for ($j=0; $j<$i; $j++){
        echo "0";
    }
    echo "<br>";
}

echo "<h1>usando o while</h1>";
$i=0;
while ($i < 10) {
    $j=0;
    while ($j < $i) {
    echo "0";
    $j++;    
    }
    echo "<br>";
    $i++;
}
?>