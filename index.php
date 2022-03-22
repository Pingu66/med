<?php

$db = new mysqli("localhost", "root","","med");

$q = $db->prepare("SELECT * FROM staff");

if($q->execute()){
    //ta czesc wykona sie jesli kwerenda bedzie poprwanie przetworzona przez serwer
    $result = $q->get_result();
    while($row = $result->fetch_assoc()){
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        echo "Lekarz $firstName $lastName<br>";
    }
} else {
    echo "bład podczas wyszukiwania w bazie danych";
}



?>