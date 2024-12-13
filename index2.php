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
            <span class='editspan'>
                <button class='editbuttonevent'><span ><img src='images/edit.svg' alt=''></span></button>
            </span>
            </div>
        </div>
        <div>
        <form id='editcontract' action='forms/form_handler.php' method='post'>
            <input type='hidden' value='editcontract' name='form-type'>
            <input type='hidden' value='{$contract['contract_number']}' name='contractidedit'>


            <label for='namesdrop'>Choose a client:</label>
            <select name='namesdrop' id='namesdrop' name='namesdropedit'>
          
       
            </select>

            <label for='carsdrop' >Choose a car:</label>
            <select id='carsdrop' name='carsdropedit'>
            
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
        ";