<?php

namespace controllers;

use core\Controller;
use models\ModelTasks;

class ControllerTasks extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new ModelTasks();
    }

    public function action_index() {
        $this->view->tasks = $this->model->all();
        $this->view->render('tasks_index_view');     
    }
    
    private function validate($create){
        if(empty($create)){
            return false;
        }
        return true;
    }

     public function action_create() {
        $task = filter_input(INPUT_POST, 'task');
        if ($this->validate($task)) {
            $this->model->save($task);
            $url = $_SERVER['HTTP_ORIGIN'] . '/tasks';
            header("Location: " . $url);
        } else {
            die('Добавьте вопрос!');
        }
    }
    
    public function action_creates() {
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $this->saveEdition();
        }
        $this->view->render('tasks_create_view');
    }
    
}
