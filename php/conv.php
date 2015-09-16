<?
    /*ini_set('display_errors', 1);
	error_reporting(E^ALL);*/
	/*date_default_timezone_set('America/Mexico_City');
	ini_set('date.timezone', 'America/Mexico_City');*/
	require_once("config.default.php");
	/*require_once("functions.php");*/
/*	$rq=$_POST;
	$dCreated=date(FORMAT);*/
	$table=TABLE;
	$pdo = new PDO(
		'mysql:host=' . URL . ';dbname=' . DB,
		UZZ,
		UPZ
		);
	$sqlDuplicates = "SELECT * FROM {$table}";
	try {
		$stmt = $pdo->prepare($sqlDuplicates);
		$stmt->execute();
		$dup = $stmt->fetchAll();
		$pdoerror = $stmt->errorInfo();
		$stmt->closeCursor();
		echo "<meta charset='UTF-8'>";
		echo "<table align='center' width='100%' border='1'>";
		echo "<tr align='center'><td>ID</td><td>NOMBRE</td><td>EMAIL</td><td>TELEFONO</td><td>ESTADO</td></tr>";
		foreach ($dup as $reg) {
			echo "<tr>";
			echo "<td>".$reg[nID]."</td><td>".$reg[txNombre]." ".$reg[txApellido]."</td><td>".$reg[txEmail]."</td><td>".$reg[txTelefono]."</td><td>".$reg[state]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	} catch (PDOException $pdoException) {
		die('Database error.');
	}
?>