<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@author Selasi Afi Gborglah
*@version 0.0.0.1
**/

require_once(dirname(__FILE__).'/../../model/VoucherReseller/vrModel.php');

if(isset($_POST['idEnter'])){
	proceedTransAmt();
}


function proceedTransAmt(){

	$idNumber = $_POST['idNumber'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];

$sql = "SELECT (firstname, lastname) FROM user WHERE user_id = '?";

$vModel = new VoucherReseller;
	 
	  $params = array($idNumber);

	  $exec = $vModel->getUserDetails($sql, "i", $params);

	  if($exec){
		    echo '<p>User Added.</p>';
	  }
	  else{
		    echo '<p>User Not Added.</p>';
	  }
}
	/*$idNumber= $_POST['idNumber'];
	$Outcome=array('$idNumber');
	$sql = "SELECT * user(firstname, lastname) VALUES(?,?)";

	// create instance of databse class
	$proceedTransAmt = new VoucherReseller;

	// execute query
	$dbexec= $proceedTransAmt->getUserDetails($sql, $Outcome);
	var_dump($dbexec);
}*/

?>
