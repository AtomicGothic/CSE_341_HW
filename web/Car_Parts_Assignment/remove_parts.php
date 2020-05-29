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
                           // "SELECT cb.brakePad FROM carBrakes AS cb JOIN carType_carBrakes AS ctcb ON ctcb.carBrakesID = cb.id JOIN carType AS ct ON ct.id = ctcb.carTypeID WHERE ct.carMake = :name"
    $brakeId = $db->prepare("SELECT ctcb.carBrakesId FROM carType_carBrakes AS ctcb JOIN carBrakes AS cb ON cb.brakePad = cb.id WHERE ctcb.id = cb.id");

    $IdStatement = $db->prepare('DELETE FROM carType_carBrakes WHERE carBrakesId = :brakeId');

    //$brakeStatement->bindValue(':carTypeId', $carId);
    $idStatement->bindValue(':brakeId', $brakeId);

    $IdStatement->execute();

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