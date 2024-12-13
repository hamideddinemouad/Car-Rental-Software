<?php
function rendercontracts($db)
{
    $query_contracts = $db->query("SELECT * FROM contracts");
    
    while ($contract = $query_contracts->fetch_assoc())
    {
        $name = getNameFromId($db, $contract);
        echo 
        "<div id='{$name}' class='clientInfo'>
        <div class='name-icon'>
            <span class='namespan'>{$name}</span>
            <div>
                <span class='infospan'><img src='images/info.svg' alt=''></span>
            <form id='deleteform' action='forms/form_handler.php' method='post'>
                <input type='hidden' value='deletecontract' name='form-type'>
                <input type='hidden' value='{$contract['contract_number']}' name='contractid'>
                <button type='submit'><span class='deletespan'><img src='images/delete.svg' alt=''></span></button>
            </form>
                <span class='editspan'><img src='images/edit.svg' alt=''></span>
            </div>
            <div class='to-hide'>
                <span>Duration: {$contract['duration']} days</span>
            </div>
            <div class='to-hide'>
                <span>Start date: {$contract['Start_date']}</span>
            </div>
            <div class='to-hide'>
                <span>End date: {$contract['End_date']}</span>
            </div>
            <div class='to-hide'>
                <span>Car: {$contract['plate_c']}</span>
            </div>
        </div>
        <div class='theline'></div>
        </div>";
    }
}
?>
<?php
function rendercontracts($db)
{
    $query_contracts = $db->query("SELECT * FROM contracts");
    
    while ($contract = $query_contracts->fetch_assoc())
    {
        $name = getNameFromId($db, $contract);
        echo 
        "<div id='{$name}' class='clientInfo'>
        <div class='name-icon'>
            <span class='namespan'>{$name}</span>
            <div>
                <span class='infospan'><img src='images/info.svg' alt=''></span>
            <form id='deleteform' action='forms/form_handler.php' method='post'>
                <input type='hidden' value='deletecontract' name='form-type'>
                <input type='hidden' value='{$contract['contract_number']}' name='contractid'>
                <button type='submit'><span class='deletespan'><img src='images/delete.svg' alt=''></span></button>
            </form>
                <span class='editspan'><img src='images/edit.svg' alt=''></span>
            </div>
        <div>
        <form id='editcontract' action='forms/form_handler.php' method='post'>
            <input type='hidden' value='editcontract' name='form-type'>
            <input type='hidden' value='{$contract['contract_number']}' name='contractidedit'>


            <label for='namesdrop'>Choose a client:</label>
            <select name='namesdrop' id='namesdrop' name='namesdropedit'>
                renderDropClientsEdit($db)?>
            </select>

            <label for='carsdrop' >Choose a car:</label>
            <select id='carsdrop' name='carsdropedit'>
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
                <span>Duration: {$contract['duration']} days</span>
            </div>
            <div class='to-hide'>
                <span>Start date: {$contract['Start_date']}</span>
            </div>
            <div class='to-hide'>
                <span>End date: {$contract['End_date']}</span>
            </div>
            <div class='to-hide'>
                <span>Car: {$contract['plate_c']}</span>
            </div>
        </div>
        <div class='theline'></div>
        </div>";
    }
}
?>