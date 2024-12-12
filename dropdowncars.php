<?php
function renderDropCars($db)
{
    $cars = $db->query("SELECT * FROM cars");
    while ($car = $cars->fetch_assoc())
    {
        $car_plate = $car['plate'];
        echo "<option style='font-family: Poppins, serif; font-size: 15px' value={$car_plate}>{$car_plate}</option>";
    }   
}
function renderDropClients($db)
{
    $clients = $db->query("SELECT * FROM clients");
    while ($client = $clients->fetch_assoc())
    {
        $clientName = $client['name'];
        echo "<option style='font-family: Poppins, serif; font-size: 15px' value={$clientName}>{$clientName}</option>";
    }   
}
?>
