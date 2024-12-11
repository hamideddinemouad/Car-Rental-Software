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
    $query_contracts = $db->query("SELECT * FROM clients");
    while ($contract = $query_contracts->fetch_assoc())
    {
       
        echo "<div>". $contract['name'] ."</div>";
        
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="script.js" defer> </script>
    <title>Rental Car</title>
</head>
<body>
    <h1>Rental Car</h1>
    <main>
    <div class="contracts">
        <div class="title">
        <div>contracts</div>
        <div class="plus">+</div>
        </div>
        <?php rendercontracts($db);?>
    </div>
    <div class="cars">
        <?php rendercars($db);?>
    </div>
    <div class="clients">
        <?php renderclients($db);?>
    </div>
    </main>
    <form class="car-form" action="" method="post">
        <label for="brand">Car brand</label>
        <input type="text" id="brand" name="bran">
        <label for="plate">Plate number</label>
        <input type="text" id="plate" name="plate">
        <label for="model">Model</label>
        <input type="text" id="model" name="model">
        <label for="purchase">Purchase Date:</label>
        <input type="text" id="purchase" name="purchase">
        <button type="submit">ADD</button>
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo htmlspecialchars($_POST['model']);
    }
    ?>
</body>
</html>