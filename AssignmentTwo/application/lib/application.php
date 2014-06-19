<?php

/**
* Application
*/
class Application
{

  function __construct()
  {
    // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
    // "objects", which means all results will be objects, like this: $result->user_name !
    // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
    // @see http://www.php.net/manual/en/pdostatement.fetch.php
    $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

    // generate a database connection, using the PDO connector
    // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
    $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DATABASE, DB_USER, DB_PASSWORD, $options);
  }

  public function index()
  {
    // Database Call to actors table
    $obj = new Actor($this->db);
    $actors = $obj->all_actors();
    // Load View File
    require './application/views/actors.php';
  }
}
