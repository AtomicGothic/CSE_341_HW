<?
session_start();

// get the data from the POST
$carBrake = $_POST['brakesD'];

require("dbConnect.php");
$db = get_db();

try
{

    // Delete the referenced ID first.
    $carId = $db->lastInsertId("carTypeId_seq");
    $brakeId = $db->lastInsertId("carBrakesId_seq");

    $carStatement = $db->prepare('DELETE FROM carType_carBrakes WHERE carBrakesId = :carBrakesId');

    $brakeStatement->bindValue(':carTypeId', $carId);
    $brakeStatement->bindValue(':carBrakesId', $brakeId);

    $brakeStatement->execute();

    // Delete the brake pad second.
    $brakeQuery = "DELETE FROM carBrakes WHERE brakePad = :carBrake";
    $brakeStatement = $db->prepare($brakeQuery);

    foreach ($carBrake as $row)
    {
        $cleanedRow = htmlspecialchars($row);
        $brakeStatement->bindValue(':carBrake', $cleanedRow);
    }

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