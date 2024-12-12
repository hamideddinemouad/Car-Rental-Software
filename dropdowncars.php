<?php
function renderDropCars($db)
{
    $cars = $db->query("SELECT * FROM cars");
    while ($cars->fetch_assoc())
    {
        $car_plate = $cars['plate'];
        echo "<option value={$car_plate}>{$car_plate}</option>";
    }
}
?>