<?php

namespace App\Controllers;

use App\Models\Site;
use PDO;

class SiteController {
    private $model;

    public function __construct(PDO $db) {
        $this->model = new Site($db);
    }

    public function index() {
        echo json_encode($this->model->getAll());
    }

    public function show($id) {
        $site = $this->model->getById($id);
        echo json_encode($site ?: ["error" => "Not found"]);
    }

    public function store($data) {
        $success = $this->model->create($data);
        http_response_code($success ? 201 : 400);
        echo json_encode($success ? ["success" => true] : ["error" => "Create failed"]);
    }

    public function update($id, $data) {
        $success = $this->model->update($id, $data);
        http_response_code($success ? 200 : 400);
        echo json_encode($success ? ["success" => true] : ["error" => "Update failed"]);
    }

    public function destroy($id) {
        $success = $this->model->delete($id);
        http_response_code($success ? 200 : 400);
        echo json_encode($success ? ["success" => true] : ["error" => "Delete failed"]);
    }
}
