<?php
/**
*@author Benedict Quartey
*@author Kojo Nyamekye Anyinam-Boateng
*@version 0.0.0.1
**/

/*
*include database credentials file
*/
require_once('dbcred.php');

class dbconnection
{
  /*
  *database connection properties
  */
  public $dbconnect;
  public $dboutcomes;

  /*
  *database connection method
  *@return true or false
  */
  public function connect()
  {
    //set connection to dbconnector property
    $this->dbconnect = mysqli_connect(SERVER,USERNAME,PASSWORD,DBNAME);
    if(mysqli_connect_errno())
    {
      return false;
    }
    else {
      return true;
    }
    //$this->dbresults = dbresu
  }
  //fucnction to get number of rows affected
  public function getTheRows(){
    if($this->dboutcomes == false){
      return false;
    }
    //get the total number of rows affected
    return mysqli_num_rows($this->dboutcomes);
  }
  /*
  *database query method
  *@param sql tobe executed
  *@return true or false
  */
  public function query($sql)
  {
    //check if the connection works
    if(!$this->connect())
    {
      return false;
    }

    //run the query
    $this->dboutcomes = mysqli_query($this->dbconnect,$sql);

    //check if any record return
    if($this->dboutcomes == false)
    {
      return false;
    }
    else {
      return true;
    }
  }

  /*
  *database fetch method
  *@return true or false
  */
  public function fetch()
  {
    return mysqli_fetch_assoc($this->dboutcomes);
  }

  function preparedSqlStatement($sql, $paramTypes, $params){
    $conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DBNAME);
    $stm = $conn->prepare($sql);
    $refIndex = array();
    foreach($params as $key => $value) {
      $refIndex[$key] = &$params[$key];
    }
    $val = array_merge(array($paramTypes), $refIndex);
    call_user_func_array(array($stm, 'bind_param'), $val);

    if($stm == false){
      return false;
    }
    $exec = $stm->execute();
    if ($exec == false) {
      return false;
    } else {
      $this->dboutcomes = $stm->fetch();
      return true;
    }
  }

/**
*
*Prepare Sql statement
**/
  function preparedSqlStatementFetch($sql, $paramTypes, $params){
    $conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DBNAME);
    $stm = $conn->prepare($sql);
    $refIndex = array();
    foreach($params as $key => $value) {
      $refIndex[$key] = &$params[$key];
    }
    $val = array_merge(array($paramTypes), $refIndex);
    call_user_func_array(array($stm, 'bind_param'), $val);

    if($stm == false){
      return false;
    }
    $exec = $stm->execute();
    if ($exec == false) {
      return false;
    } else {
      $res = $stm->get_result();
      $data = $res->fetch_all();
      return $data;
    }
  }
}

?>
