<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@author Selasi Afi Gborglah
*@version 0.0.0.1
**/


require_once(dirname(__FILE__).'/../database/dbconnection.php');

class VoucherReseller extends dbconnection {

	function getUserDetails($sql, $Parameterarray){	
		if(!$this->dbconnect())
		{
			return false;
		}
		else{
			$total = count($Parameterarray);
			$dataTypes = '';
			for ($i=0; $i < $total; $i++) { 
				if(is_string($Parameterarray[$i])){
					$dataTypes .= "s";
				}
				if(is_float($Parameterarray[$i])){
					$dataTypes .= "d";
				}if(is_int($Parameterarray[$i])){
					$dataTypes .= "i";
				}
			}
			$prepared = $this->databaseconnector->prepare($sql);
			$prepared->bind_param($dataTypes, ...$Parameterarray);
			if($prepared->execute()){
				return true;
			}

		}
	}

	function updateAmount(){

	}

	function getTransactions(){

	}
}
?>
