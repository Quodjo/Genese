<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@author Selasi Afi Gborglah
*@version 0.0.0.1
**/

require_once(dirname(__FILE__).'/../../model/VoucherReseller/vrModel.php');

if(isset($_POST['idEnter'])){

}


function proceedTransAmt(){
	$Outcome=array('$idNumber');

	$sql = "SELECT * user(firstname, lastname) VALUES(?,?)";

// create instance of databse class
	$registerUser = new databaseConnect;

// execute query
	$dbexec= $registerUser->Prepstatement($sql, $Outcome);
}

?>
