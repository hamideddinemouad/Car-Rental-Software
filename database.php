<?php
function getNameFromId($db, $contractRow)
{
    $id = $contractRow['client_id_c'];
    // echo $id;
    $client_name = $db->query("SELECT name FROM clients WHERE client_id = {$id};");
    $client_name = $client_name->fetch_assoc();
    return $client_name['name'];
}
function rendercontracts($db)
{
    $query_contracts = $db->query("SELECT * FROM contracts");
    
    while ($contract = $query_contracts->fetch_assoc())
    {
        $name = getNameFromId($db, $contract);
        echo "<div id='$name' class='clientInfo'> <div  class='name-icon'> <span>$name</span> <span><img src='images/info.svg' alt=''></span></div>
        <div class='to-hide'><span>Duration: {$contract['duration']} days</span></div>
        <div class='to-hide'><span>Start date: {$contract['Start_date']}</span></div>
        <div class='to-hide'><span>End date: {$contract['End_date']}</span></div>
        <div class='to-hide'><span>Car: {$contract['plate_c']}</span></div>
        </div>";
    }
}
function rendercars($db)
{
    $query_cars = $db->query("SELECT * FROM cars");
    while ($car = $query_cars->fetch_assoc())
    {
        
        echo "<div id='{$car['plate']}' class='clientInfo'> <div  class='name-icon'> <span>{$car['plate']}</span> <span><img src='images/info.svg' alt=''></span></div>
        <div class='to-hide'><span>Brand: {$car['brand']} </span></div>
        <div class='to-hide'><span>Model: {$car['model']}</span></div>
        <div class='to-hide'><span>Purchase date: {$car['purchase_date']}</span></div>
        </div>";
    }   
}
function renderclients($db)
{
    $query_clients = $db->query("SELECT * FROM clients");
    while ($client = $query_clients->fetch_assoc())
    {
    echo "<div id='{$client['name']}' class='clientInfo'> <div  class='name-icon'> <span>{$client['name']}</span> <span><img src='images/info.svg' alt=''></span></div>
         <div class='to-hide'><span>Adress: {$client['adress']}</span></div>
         <div class='to-hide'><span>Phone: {$client['phone']}</span></div> </div>";
    }
}
function accessdb()
{
    $database = new mysqli("localhost", "root", "123456", "location");
    if($database->connect_error) {
        die($database->connect_error);
    }
    return ($database);
}
$db = accessdb();
?>