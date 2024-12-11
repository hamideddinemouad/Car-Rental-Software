<?php
function rendercontracts($db)
{
    $query_contracts = $db->query("SELECT * FROM contracts");
    while ($contract = $query_contracts->fetch_assoc())
    {
        echo "<div>". $contract['plate_c'] ."</div>";
    }
}
function rendercars($db)
{
    echo "<div>Cars</div>";
    $query_contracts = $db->query("SELECT * FROM cars");
    while ($contract = $query_contracts->fetch_assoc())
    {
        
        echo "<div>". $contract['plate'] ."</div>";
    }   
}
function renderclients($db)
{
    echo "<div>Clients</div>";
    $query_clients = $db->query("SELECT * FROM clients");
    while ($client = $query_clients->fetch_assoc())
    {
       
        // echo "<div>". $client['name'] ."</div>".
        //      "<div>" . $client['adress'] . "</div>" ;
    echo "<div id='{$client['name']}' class='name-icon'> <span>{$client['name']}</span> <span><img src='images/info.svg' alt=''></span></div>
         <div class='to-hide'><span>{$client['adress']}</span></div>
         <div class='to-hide'><span>{$client['phone']}</span></div>";
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