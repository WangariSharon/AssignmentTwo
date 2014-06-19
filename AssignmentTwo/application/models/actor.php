<?php

/**
* Actors Class
*/
class Actor
{
  public function __construct($db)
  {
    $this->db = $db;
  }
  // Retrieving all actors
  public function all_actors()
  {
    return $this->db->query('SELECT * FROM actors');
  }
}
