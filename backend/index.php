<?php
    require "Aircraft.php";
    require "Destination.php";

    echo "meow";

    function addFour($x){
        $rezultats = $x + 4;
        echo "<br> $rezultats";
    }
    
    addFour(5);
    addFour(8);

    $manaLidmasina = new Aircraft("Airbus", "A220-300", 120, 850);
    var_dump($manaLidmasina);

    $manaDestination = new Destination("RIX", 56.924, 23.971);
    var_dump($manaDestination);
?>
