<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php include 'database.php';?>
    <?php include 'dropdowncars.php';?>
    <script src="script.js" defer> </script>
    <title>Rental Car</title>
</head>
<body>
    <h1>Rental Car</h1>

    <main>
    <form class="car-form" action="forms/form_handler.php" method="post">
        <input type="hidden" value="car-form" name="form-type">
        <label for="brand">Car brand</label>
        <input type="text" id="brand" name="brand" required maxlength="50">
        <label for="plate">Plate number</label>
        <input type="text" id="plate" name="plate" required maxlength="50">
        <label for="model">Model</label>
        <input type="text" id="model" name="model" required maxlength="50">
        <label for="purchase">Purchase Date:</label>
        <input type="date" id="purchase" name="purchase" required>
        <div class="form-buttons">
        <button type="submit">ADD</button>
        <button type="button" onclick="window.location.href='index.php'">BACK</button>
        </div>
    </form>
    <form class="client-form" action="forms/form_handler.php" method="post">
        <input type="hidden" value="client-form" name="form-type">

        <label for="name">Client name:</label>
        <input type="text" id="name" name="name" required maxlength="50">

        <label for="adress">Adress:</label>
        <input type="text" id="adress" name="adress" required maxlength="50">

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required maxlength="10">
        <div class="form-buttons">
        <button type="submit">ADD</button>
        <button type="button" onclick="window.location.href='index.php'">BACK</button>
        </div>
    </form>
    <form class="contract-form" action="forms/form_handler.php" method="post">
        <input type="hidden" value="contract-form" name="form-type">

        <label for="carsdrop">Choose a car:</label>
        <select id="carsdrop" name="carsdrop">
            <?php renderDropCars($db)?>
        </select>

        <button type="submit">ADD</button>
    </form>
    <div class="contracts">
        <div class="titlecontracts">
            <p>contracts</p>
        <div class="pluscontracts"><img src="images/plus.svg" alt=""></div>
        </div>
        <?php rendercontracts($db);?>
    </div>
    <div class="cars">
        <div class="titlecars"><p>Cars</p><div class="pluscars"><img src="images/plus.svg" alt=""></div></div>
        <?php rendercars($db);?>
    </div>
    <div class="clients">
        <div class="titleclients"><p>Clients</p><div class="plusclients"><img src="images/plus.svg" alt=""></div></div>
        <?php renderclients($db);?>
    </div>
    </main>

</body>
</html> 