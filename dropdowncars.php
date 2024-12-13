<?php
function renderDropCars($db)
{
    $cars = $db->query("SELECT *FROM cars WHERE NOT EXISTS (SELECT 1 FROM contracts WHERE cars.plate = contracts.plate_c);");
    while ($car = $cars->fetch_assoc())
    {
        $car_plate = $car['plate'];
        echo "<option style='font-family: Poppins, serif;' value={$car_plate} name='dropPlate'>{$car_plate}</option>";
    }   
}
function renderDropCarsEdit($db)
{
    $cars = $db->query("SELECT *FROM cars WHERE NOT EXISTS (SELECT 1 FROM contracts WHERE cars.plate = contracts.plate_c);");
    while ($car = $cars->fetch_assoc())
    {
        $car_plate = $car['plate'];
        echo "<option style='font-family: Poppins, serif;' value={$car_plate} name='plateeditcontract'>{$car_plate}</option>";
    }   
}
function renderDropClientsEdit($db)
{
    $clients = $db->query("SELECT * FROM clients");
    while ($client = $clients->fetch_assoc())
    {
        $clientName = $client['name'];
        echo "<option style='font-family: Poppins, serif; font-size: 15px' value={$clientName} name={nameeditcontract}>{$clientName}</option>";
    }   
}
function renderDropClients($db)
{
    $clients = $db->query("SELECT * FROM clients");
    while ($client = $clients->fetch_assoc())
    {
        $clientName = $client['name'];
        echo "<option style='font-family: Poppins, serif; font-size: 15px' value={$clientName} name={dropName}>{$clientName}</option>";
    }   
}
?>
