<?
session_start();

// get the data from the POST
$carBrake = $_POST['brakesD'];

require("dbConnect.php");
$db = get_db();

try
{
    // Prepping the queries. We must delete the row with the foreign key first before we delete the row with the brakes.
    $brakeQuery = "DELETE FROM carBrakes WHERE brakePad = :carBrake";
    $brakeStatement = $db->prepare($brakeQuery);
    $IdStatement = $db->prepare("DELETE FROM carType_carBrakes WHERE carBrakesId = (SELECT id FROM carType_carBrakes, carBrakes WHERE carType_carBrakes.carBrakesId = carBrakes.id AND carBrakes.brakePad = :carBrake)");

    foreach ($carBrake as $row)
    {
        $cleanedRow = htmlspecialchars($row);
        $brakeStatement->bindValue(':carBrake', $cleanedRow);
        $IdStatement->bindValue(':carBrake', $cleanedRow);
    }

    // Delete the referenced ID first.
    $IdStatement->execute();

    // Delete the brake pad second.
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