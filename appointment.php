<?php

$db = new mysqli("localhost", "root","","med");

?>


<form action="appointment.php">
Imię: <input type="text" name="firstName">
Nazwisko: <input type="text" name="lastName">
Telefon: <input type="text" name="phone">
<input type="submit" value="Zapisz wizytę">
</form>