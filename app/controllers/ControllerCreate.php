<?php

namespace controllers;

use core\Controller;


class ControllerCreate extends Controller {
    
    public function action_index() {
        $this->view->render('create_index_view');
    }

}
