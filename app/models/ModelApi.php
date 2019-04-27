<?php

namespace models;

use core\Model;

class ModelApi extends Model {

    public function __construct() {
        parent::__construct();
        $this->table = 'questions';
    }

    public function add($question) {
        $query = "INSERT INTO " . $this->table . " VALUES (null, '{$question['author']}', '{$question['text']}');";
        $this->db->query($query);
    }

    public function delete($delete) {
        $query = "DELETE FROM " . $this->table . " WHERE id=".$delete.";";
        $this->db->query($query);
    }

}
