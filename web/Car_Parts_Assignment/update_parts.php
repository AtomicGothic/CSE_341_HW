<?
session_start();

// get the data from the POST
$carBrake = $_POST['brakesU'];
$newBrake = $_POST['txtNew'];

require("dbConnect.php");
$db = get_db();

try
{

    // Delete the brake pad second.
    $brakeQuery = "UPDATE carBrakes SET brakePad = :newBrake WHERE brakePad = :carBrake";
    $brakeStatement = $db->prepare($brakeQuery);

    $brakeStatement->bindValue(':newBrake', $newBrake);
    foreach ($carBrake['brakesU'] as $row)
    {
        $brakeStatement->bindValue(':carBrake', $row);
        echo $row;
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