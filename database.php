<?php
include 'dropdowncars.php';
function getNameFromId($db, $contractRow)
{
    $id = $contractRow['client_id_c'];
    // echo $id;
    $client_name = $db->query("SELECT name FROM clients WHERE client_id = {$id};");
    $client_name = $client_name->fetch_assoc();
    return $client_name['name'];
}
function getId($db, $contractRow)
{
    $id = $contractRow['client_id_c'];
    return $id;
}
function rendercontracts($db)
{
    $query_contracts = $db->query("SELECT * FROM contracts");
    
    while ($contract = $query_contracts->fetch_assoc())
    {
        $name = getNameFromId($db, $contract);
        echo 
"<div id='{$client['name']}_client' class='clientInfo'>
    <div  class='name-icon'>
        <span class='namespan'>{$client['name']}</span>
        <div>
            <span class='infospan'><img src='images/info.svg' alt=''></span>
            <span class='deletespan'>
                <form id='deleteform' action='forms/form_handler.php' method='post'>
                    <input type='hidden' value='deleteclient' name='form-type'>
                    <input type='hidden' value='{$client['name']}' name='clientname'>
                    <button type='submit'><span class='deletespan'><img src='images/delete.svg' alt=''></span></button>
                </form>
            </span>
            <span class='editspan'>
            <button class='editbuttonevent'><span ><img src='images/edit.svg' alt=''></span></button>
            </span>
        </div>
    </div>
    <div>
        <form id='editcontract' action='forms/form_handler.php' method='post'>
            <input type='hidden' value='editcontract' name='form-type'>
            <input type='hidden' value='{$client['contract_number']}' name='contractidedit'>


            <label for='namesdrop'>Choose a client:</label>
            <select name='namesdrop' id='namesdrop' name='namesdrop'>
                renderDropClientsEdit($db)?>
            </select>

            <label for='carsdrop' >Choose a car:</label>
            <select id='carsdrop' name='carsdrop'>
                renderDropCarsEdit($db);
            </select>
            
            <label for='startdate' >Start Date:</label>
            <input type='date' id='startdate' name='startdateedit'>
    
            <label for='enddate'>End Date:</label>
            <input type='date' id='enddate' name='enddateedit'>
            
            <button type='submit'><span class='editspan'><img src='images/edit_final.svg' alt=''></span></button>
        </form>
        </div>
         <div class='to-hide'>
            <span>Adress: {$client['adress']}</span>
        </div>
         <div class='to-hide'>
            <span>Phone: {$client['phone']}</span>
        </div>
        
    </div>
    <div class='theline'></div>"; 
    }
}
function rendercars($db)
{
    $query_cars = $db->query("SELECT * FROM cars");
    while ($car = $query_cars->fetch_assoc())
    {
    echo
"<div id='{$car['plate']}' class='clientInfo'>
        <div  class='name-icon'>
            <span class='namespan'>{$car['plate']}</span>
            <div>
                <span class='infospan'><img src='images/info.svg' alt=''></span>
                <form id='deleteform' action='forms/form_handler.php' method='post'>
                    <input type='hidden' value='deletecar' name='form-type'>
                    <input type='hidden' value='{$car['plate']}' name='carplate'>
                    <button type='submit'><span class='deletespan'><img src='images/delete.svg' alt=''></span></button>
                </form>
                <span class='editspan'>
                    <button class='editbuttonevent'><span ><img src='images/edit.svg' alt=''></span></button>
                </span>
            </div>
        </div>
        <div>
            <form id='editcarform' action='forms/form_handler.php' method='post'>
                <input type='hidden' value='editcar' name='form-type'>
                <input type='hidden' value='{$car['plate']}' name='plateedit'>
    
                <label for='brandedit'>Brand:</label>
                <input type='text' id='brandedit'  name='brandedit' required maxlength='50' value='{$car['brand']}'>
    
                <label for='modeledit'>Model:</label>
                <input type='text' id='modeledit' name='modeledit' required maxlength='50' value='{$car['model']}'>
    
                <label for='purchaseedit'>Purchase Date:</label>
                <input type='date' id='purchaseedit' name='purchaseedit' required value='{$car['purchase_date']}'>
    
                <button type='submit'><span class='editspan'><img src='images/edit_final.svg' alt=''></span></button>
            </form>
        </div>
        <div class='to-hide'>
            <span>Brand: {$car['brand']}</span>
        </div>
        <div class='to-hide'>
            <span>Model: {$car['model']}</span>
        </div>
        <div class='to-hide'>
            <span>Purchase date: {$car['purchase_date']}</span>
        </div>
        </div>
    <div class='theline'></div>";
    }   
}
function renderclients($db)
{
    $query_clients = $db->query("SELECT * FROM clients");
    while ($client = $query_clients->fetch_assoc())
    {
    echo

"<div id='{$client['name']}_client' class='clientInfo'>
    <div  class='name-icon'>
        <span class='namespan'>{$client['name']}</span>
        <div>
            <span class='infospan'><img src='images/info.svg' alt=''></span>
            <span class='deletespan'>
                <form id='deleteform' action='forms/form_handler.php' method='post'>
                    <input type='hidden' value='deleteclient' name='form-type'>
                    <input type='hidden' value='{$client['name']}' name='clientname'>
                    <button type='submit'><span class='deletespan'><img src='images/delete.svg' alt=''></span></button>
                </form>
            </span>
            <span class='editspan'>
            <button class='editbuttonevent'><span ><img src='images/edit.svg' alt=''></span></button>
            </span>
        </div>
    </div>
    <div>
        <form id='editclientform' style='width: 100%' action='forms/form_handler.php' method='post'>
            <input type='hidden' value='editclient' name='form-type'>
            <input type='hidden' value='{$client['name']}' name='previousclientnameedit'>

            <label for='clientnameedit'>Name:</label>
            <input type='text' id='clientnameedit'  name='clientnameedit' required maxlength='50' value='{$client['name']}'>

            <label for='clientadressedit'>Adress:</label>
            <input type='text' id='clientadressedit' name='clientadressedit' required maxlength='50' value='{$client['adress']}'>

            <label for='clientphonedit'>Phone:</label>
            <input type='text' id='clientphoneedit' name='clientphonedit' required maxlength='50' value='{$client['phone']}'>

            <button type='submit'><span class='editspan'><img src='images/edit_final.svg' alt=''></span></button>
        </form>
        </div>
         <div class='to-hide'>
            <span>Adress: {$client['adress']}</span>
        </div>
         <div class='to-hide'>
            <span>Phone: {$client['phone']}</span>
        </div>
        
    </div>
    <div class='theline'></div>"; 
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