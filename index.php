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
    <script src="script.js" defer> </script>
    <title>Rental Car</title>
</head>
<body>
    <h1>Rental Car</h1>
    <main>
    <div class="contracts">
        <div class="title">
            <p>contracts</p>
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
    <form class="car-form" action="forms/form_handler.php" method="post">
        <input type="hidden" value="car-form" name="form-type">
        <label for="brand">Car brand</label>
        <input type="text" id="brand" name="brand" required>
        <label for="plate">Plate number</label>
        <input type="text" id="plate" name="plate" required>
        <label for="model">Model</label>
        <input type="text" id="model" name="model" required>
        <label for="purchase">Purchase Date:</label>
        <input type="date" id="purchase" name="purchase" required>
        <button type="submit">ADD</button>
    </form>
</body>
</html> 