<?php
function renderDropCars($db)
{
    $cars = $db->query("SELECT * FROM cars");
    while ($car = $cars->fetch_assoc())
    {
        $car_plate = $car['plate'];
        echo "<option value={$car_plate}>{$car_plate}</option>";
    }
}
?>