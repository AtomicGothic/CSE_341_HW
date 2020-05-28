<?
session_start();

// get the data from the POST
$carBrake = $_POST['item'];

require("dbConnect.php");
$db = get_db();

try
{

    // Delete the referenced ID first.
    $carId = $db->lastInsertId("carTypeId_id_seq");
    $brakeId = $db->lastInsertId("carBrakesId_id_seq");

    // Again, first prepare the statement
    $carStatement = $db->prepare('DELETE FROM carType_carBrakes WHERE carBrakesId = :carBrakesId');

    // Then, bind the values
    $brakeStatement->bindValue(':carTypeId', $carId);
    $brakeStatement->bindValue(':carBrakesId', $brakeId);

    $brakeStatement->execute();

    // Delete the brake pad second.
    $brakeQuery = "DELETE FROM carBrakes WHERE brakePad = :carBrake";
    $brakeStatement = $db->prepare($brakeQuery);


	$brakeStatement->bindValue(':carBrake', $carBrake);

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