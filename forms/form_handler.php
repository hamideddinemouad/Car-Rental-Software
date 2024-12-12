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
function insert_client($db)
{
    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    // echo "name = " . $name;
    // var_dump($_POST);
    $insert_query = "INSERT INTO clients (name, adress, phone) VALUES (?, ?, ?);";
    $statement = $db->prepare($insert_query);
    $statement->bind_param("sss", $name, $adress, $phone);
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
                insert_client($db);
                header("location: ../index.php");
                exit();
            case 'contract-form':
                // header("location: ../index.php");
                exit();
        }
    }
?>