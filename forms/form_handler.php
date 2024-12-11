<?php include '../database.php';
function insert_car($db)
{
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $purchase = $_POST['purchase'];
    $plate = $_POST['plate'];
    $insert_query = "INSERT INTO cars (plate, brand, model, purchase_date) VALUES (?, ?, ?, ?);";
    $statement = $db->prepare($insert_query);
    $statement->bind_param("ssss", $plate, $brand, $model, $purchase);
    $statement->execute();
}
    if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        switch($_POST['form-type'])
        {
            case 'car-form':
                insert_car($db);
                header("location: ../index.php");
                exit();
            case 'client-form':
                header("location: ../index.php");
                exit();
            case 'contract-form':
                header("location: ../index.php");
                exit();
        }
    }
?>