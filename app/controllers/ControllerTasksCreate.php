<?php

namespace controllers;

use core\Controller;
use models\ModelTasksAdd;

class ControllerTasksCreate extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new ModelTasksAdd();
    }

    public function action_index() {
        $this->view->render('create_index_view');
    }

}
