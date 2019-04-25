<?php

namespace models;

use models\ModelTasks;
use mysqli;

class ModelAdd extends ModelTasks {
     /**
      *
      * @var mysqli
      */
    protected $db;
    
    public $task;

    public function __construct($task) {
        parent::__construct();
        $this->task = filter_input(INPUT_POST, 'task');
    }

 

    public function validate($task) {
        if (empty($task)) {
            return true;
        }
        return false;
    }

    public function save($task) {
        if (!validate($task)) {
            $sql = "INSERT INTO tasks (name) VALUES ('".$task."')";
        }
    }

}
