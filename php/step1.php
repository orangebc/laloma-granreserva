<?
$txEmail = isset($_POST['email']) ? $_POST['email'] : null;
if(!is_null($txEmail)){
	ini_set('display_errors', 1);
	error_reporting(E^ALL);
	date_default_timezone_set('America/Mexico_City');
	ini_set('date.timezone', 'America/Mexico_City');
	require_once("config.default.php");
	require_once("functions.php");
	$rq=$_POST;
	$dCreated=date(FORMAT);
	$table=TABLE;
	$pdo = new PDO(
		'mysql:host=' . URL . ';dbname=' . DB,
		UZZ,
		UPZ
		);
	$sqlDuplicates = "SELECT count(txEmail) as total
	FROM {$table}
	WHERE txEmail=:txEmail";
	try {
		$stmt = $pdo->prepare($sqlDuplicates);
		$stmt->bindParam(":txEmail", $txEmail, PDO::PARAM_STR);
		$stmt->execute();
		$dup = $stmt->fetch(2);
		$pdoerror = $stmt->errorInfo();
		$stmt->closeCursor();
	} catch (PDOException $pdoException) {
		die('Database error.');
	}
	//var_dump($dup);
	//exit();
	if ((int) $dup[total] > 0) {
		$duplicated = 1;
		$state = "invalid";
		$argmon = "DUPLICATED";
	} else {
		$duplicated = 0;
		$state = "valid";
		$argmon = "";
	}
	$sql = "INSERT INTO {$table}
	VALUES('0','".$rq[nombre]."','".$rq[apellido]."','".$txEmail."','".$rq[telefono]."','".$duplicated."','0','".$state."','".$dCreated."','".$_SERVER[HTTP_REFERER]."','".$_SERVER[REMOTE_ADDR]."','".$_SERVER[HTTP_USER_AGENT]."','1','".$argmon."')";
	try {
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$arr = array();
		$pdoerror = $stmt->errorInfo();
		$arr[nID] = $pdo->lastInsertId();
		$arr[txEmail] = $txEmail;
		$arr[pdoerror] = implode(",", $pdoerror);
		if ($pdoerror[0] == "00000") {
			$arr[message] = "success";
			$arr["conv"] = '<iframe src="php/tracking.php" frameborder="0" width="1" height="1"></iframe>';
			$data_sendEmailLead[nID] = $arr[nID];
			$data_sendEmailLead[argmon] = $argmon;
			$data_sendEmailLead[nombre]=$rq[nombre];
			$data_sendEmailLead[apellido]=$rq[apellido];
			$data_sendEmailLead[telefono]=$rq[telefono];
			$data_sendEmailLead[email]=$txEmail;
			sendEmailLead($data_sendEmailLead);
			$update = "UPDATE {$table} SET
			send='1'
			WHERE nID=:nID";
			try {
				$stmt = $pdo->prepare($update);
				$stmt->bindParam(":nID", $arr[nID], PDO::PARAM_STR);
				$stmt->execute();
				$pdoerror = $stmt->errorInfo();
				$stmt->closeCursor();
			} catch (PDOException $pdoException) {
				die('Database error.');
			}
		} else {
			$arr[message] = "error";
		}
	} catch (PDOException $pdoException) {
		die('Database error.');
	}
	echo json_encode($arr);
}
?>