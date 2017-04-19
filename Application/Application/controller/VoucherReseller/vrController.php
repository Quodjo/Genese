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
	$Outcome=array('$idNumber');
	$sql = "SELECT * user(firstname, lastname) VALUES(?,?)";

	// create instance of databse class
	$proceedTransAmt = new VoucherReseller;

	// execute query
	$dbexec= $proceedTransAmt->getUserDetails($sql, $Outcome);
	var_dump($dbexec);
}

?>
