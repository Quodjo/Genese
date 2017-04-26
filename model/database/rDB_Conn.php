<?php

/*
* Database connection classs

*/

/*
*include database credentials
*/
require_once('dbcred.php');

class DB_Connection
{

	/*
	* Database connection properties
	*/


	public $databaseconnector;

	public $databaseResults;

	private $databaseRecords;


//constructor


/*
* Database connection methods
* @ return return true or false
*/

public function dbconnect()
{

	$this-> databaseconnector = mysqli_connect(SERVER,USERNAME,PASSWORD,DBNAME);

	if(mysqli_connect_errno())
	{
		return false;
	}
	else{
		return true;
	}



}

/*
* Database fetch methods
* @ return return true or false
*/

public function dbQuery($sql)
{
	if(!$this -> dbconnect())
	{
		return false;
	}

	$this -> databaseResults= mysqli_query($this-> databaseconnector, $sql);

	// check if any record was returned
	if($this->databaseResults== false)
	{
		return false;
	}
	else
	{
		return true;
	}
}
/*
* Database fetch methods
* @ return return true or false
*/

public function dbResult()
{
	
}

// fetch or display method

/*
* Database connection methods
* @ return return true or false
*/

public function dbFetch($arrayType)
{
	

	$result = $this-> databaseResults;

	if($result == false)
	{
		return false;
	}

	else{

		$this->orgData($result,$arrayType);
   		 return true ;

	}

}

/*Formatting my data, can be used as JSON data when parsed*/
private function orgData($result, $arrayType){
	$records = array();
	if(mysqli_num_rows($result) > 0){
		if($arrayType == 0 || $arrayType === NULL){
			while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
			array_push($records,$row);
			} 
		}
		

		elseif($arrayType == 1){
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			array_push($records,$row);
			} 
		}
		

		elseif($arrayType == 2){
			while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
			array_push($records,$row);
			} 
		}
		

		else{
			while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
			array_push($records,$row);
			} 
		}
		

	
	$this->databaseRecords = $records;
	}

	else $this->databaseRecords = null;

	
}

public function getDB_records(){
	return $this->databaseRecords;
}

public function get_numDB_records(){
	
	return sizeof($this->databaseRecords);
}


//Database mysqli real escape 
public function realEscape($ar0){

if($this->dbconnect()){
	$connection = $this->databaseconnector;

foreach($ar0 as $key => $value){
        $ar0[$key] = mysqli_real_escape_string($connection,$value) ;
       
    }

return $ar0;
}

else {
	return false;
}
    
    
}


//Prepared statement
public function preparestatement($sql,$param,$data){
$records = '';

if($this->dbconnect()){
	$connection = $this->databaseconnector;
$dataAttach = $connection;

/* create a prepared statement */
$statement = mysqli_stmt_init($dataAttach);
if (mysqli_stmt_prepare($statement, $sql)) {

    /* bind parameters*/
	$vab = 'Gaze';
    mysqli_stmt_bind_param($statement, $param, $data);

    /* execute query */
    mysqli_stmt_execute($statement);
global $preparedResult;
$preparedResult = mysqli_stmt_get_result($statement);
$records = mysqli_fetch_array($preparedResult, MYSQLI_ASSOC);
   
    /* close statement */
    mysqli_stmt_close($statement);
}

/* close connection */
mysqli_close($dataAttach);

}


return $records;



}



}






/*$mytestdatabase = new DB_Connection;

var_dump($mytestdatabase->dbQuery('SELECT* FROM allmajor'));
var_dump ($mytestdatabase-> dbFetch(1));
*/
?>