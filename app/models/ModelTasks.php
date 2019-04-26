<?php

namespace models;

use core\Model;
use mysqli;

class ModelTasks extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'tasks';
    }

    public function save($task) {
	$query = "INSERT INTO `tasks` (name) VALUES ($task);";
	$result = $this->db->query($query);
    }
    
}
