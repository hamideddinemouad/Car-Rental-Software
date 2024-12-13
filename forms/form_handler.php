<?php include '../database.php';
// function getNameFromId($db, $contractRow)
// {
//     $id = $contractRow['client_id_c'];
//     // echo $id;
//     $client_name = $db->query("SELECT name FROM clients WHERE client_id = {$id};");
//     $client_name = $client_name->fetch_assoc();
//     return $client_name['name'];
// }
function getIdFromName($db, $name)
{
    $sqliobj = $db->query("select client_id from clients where name='$name'");
    // var_dump($sqliobj);
    $id= $sqliobj->fetch_assoc();
    // var_dump($id);
    $id = $id['client_id'];
    return $id;
    // $array = $sqliobj->fetch_assoc();
}
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
function delete_client($db)
{
    $client_name = $_POST['clientname'];
    $db->query("DELETE FROM clients WHERE name='$client_name'");
}
function delete_car($db)
{
    $plate= $_POST['carplate'];
    $db->query("DELETE FROM cars WHERE plate='$plate'");
}
function delete_contract($db)
{
    $contractid = $_POST['contractid'];
    $db->query("DELETE FROM contracts WHERE contract_number=$contractid");
}
function insert_contract($db)
{
    // var_dump($_POST);
    $start_date = $_POST['startdate'];
    $end_date = $_POST['enddate'];
    $plate_c = $_POST['carsdrop'];
    $client_name = $_POST['namesdrop'];
    // echo "start_date" . $start_date;
    // echo "end_date" . $end_date;
    // echo "plate_c" . $plate_c;
    // echo "client_name" . $client_name;
    $id= getIdFromName($db, $client_name);
    // echo "id from name = ". $name;
    // echo "name = " . $name;
    // var_dump($_POST);
    $insert_query = "INSERT INTO contracts (Start_date, End_date, client_id_c, plate_c) VALUES (?, ?, ?, ?);";
    $statement = $db->prepare($insert_query);
    $statement->bind_param("ssis", $start_date, $end_date, $id, $plate_c);
    $statement->execute();
}
function edit_client($db)
{
    // var_dump($_POST);
    // echo 
    $prev_name = $_POST['previousclientnameedit'];
    $name = $_POST['clientnameedit'];
    $adress = $_POST['clientadressedit'];
    $phone = $_POST['clientphonedit'];
    $id = getIdFromName($db, $prev_name);
    // echo $name, $adress, $phone;
    $db->query("UPDATE clients SET name='$name', adress='$adress', phone='$phone' where client_id='$id'; ");
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
                insert_contract($db);
                header("location: ../index.php");
                exit();
            case 'deleteclient':
                delete_client($db);
                header("location: ../index.php");
                exit();
            case 'deletecar':
                delete_car($db);
                header("location: ../index.php");
                exit();
            case 'deletecontract':
                delete_contract($db);
                header("location: ../index.php");
                exit();
            case 'editclient':
                edit_client($db);
                header("location: ../index.php");
                exit();
    }
    }
?>