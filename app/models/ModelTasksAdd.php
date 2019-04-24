<?php

namespace models;

use models\ModelTasks;
use mysqli;

class ModelTasksAdd extends ModelTasks{

    public $task;

    public function __construct($task) {
        parent::__construct();
        $this->task = $task;
    }

    public function getTask() {
        $task = filter_input(INPUT_POST, 'task');
        return $task;
    }

    public function validate($task) {
        if (empty($task)) {
            return true;
        }
        return false;
    }
    
    public function save(){
        if(!validate($task)){
            $sql = "INSERT INTO tasks (name) VALUES ('. $task .')";
        }
    }

}
