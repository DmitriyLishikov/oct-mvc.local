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

    public function action_create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->action_add();
        }
        $this->view->render('tasks_create_view');
    }

    public function action_add() {
        $task = filter_input(INPUT_POST, 'task');
        if ($this->validate($task)) {
            $this->model->save($task);
            $url = 'http://' . $_SERVER['HTTP_HOST'] . '/tasks';
            header("Location: " . $url);
            exit();
        } 
    }

    private function validate($task) {
        if (empty($task)) {
            return false;
        }
        return true;
    }

}
