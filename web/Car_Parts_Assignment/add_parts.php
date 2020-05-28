<?
session_start();

// get the data from the POST
$carMake = $_POST['txtMake'];
$carModel = $_POST['txtModel'];
$carYear = $_POST['txtYear'];
$carBrake = $_POST['txtBrake'];

require("dbConnect.php");
$db = get_db();

try
{
	// We do this by preparing the query with placeholder values
    $carQuery = 'INSERT INTO carType(carMake, carModel, carYear) VALUES(:carMake, :carModel, :carYear)';
    $brakeQuery = 'INSERT INTO carBrakes(brakePad) VALUES(:carBrake)';
    $carStatement = $db->prepare($carQuery);
    $brakeStatement = $db->prepare($brakeQuery);

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$carStatement->bindValue(':carMake', $carMake);
	$carStatement->bindValue(':carModel', $carModel);
	$carStatement->bindValue(':carYear', $carYear);
	$brakeStatement->bindValue(':carBrake', $carBrake);

    $carStatement->execute();
    $brakeStatement->execute();

	// get the new id
    $carId = $db->lastInsertId("carType_id_seq");
    $brakeId = $db->lastInsertId("carBrakes_id_seq");

    // Again, first prepare the statement
    $carStatement = $db->prepare('INSERT INTO carType_carBrakes(carTypeId, carBrakesId) VALUES(:carTypeId, :carBrakesId)');

    // Then, bind the values
    $carStatement->bindValue(':carTypeId', $carId);
    $carStatement->bindValue(':carBrakesId', $brakeId);

    $carStatement->execute();


}
catch (Exception $ex)
{
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}


header("Location: showTopics.php");

die();

?>