<?
session_start();

// get the data from the POST
$carBrake = $_POST['brakesD'];

require("dbConnect.php");
$db = get_db();

try
{

    // Delete the referenced ID first.
    //$carId = $db->lastInsertId("carTypeId_seq");

    $brakeId = $db->prepare("SELECT carBrakesId, id FROM carType_carBrakes, carBrakes WHERE carType_carBrakes.carBrakesId = carBrakes.id AND carBrakes.brakePad = :carBrake");
    $brakeQuery = "DELETE FROM carBrakes WHERE brakePad = :carBrake";
    $brakeStatement = $db->prepare($brakeQuery);

    foreach ($carBrake as $row)
    {
        $cleanedRow = htmlspecialchars($row);
        $brakeStatement->bindValue(':carBrake', $cleanedRow);
        $brakeId->bindValue(':carBrake', $cleanedRow);
    }

    $Id = $brakeId->execute();
    log($Id);

    $IdStatement = $db->prepare("DELETE FROM carType_carBrakes WHERE carBrakesId = $Id");
    //$IdStatement->bindValue(':brakeId', $Id);
    //$brakeStatement->bindValue(':carTypeId', $carId);


    // Delete the brake pad second.


    $IdStatement->execute();
    $brakeStatement->execute();

}
catch (Exception $ex)
{
	echo "Error with DB. Details:<br> $ex";
	die();
}


header("Location: goff_car_parts.php");

die();

?>