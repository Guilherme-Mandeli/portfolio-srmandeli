<?php
use App\Controllers\SiteController;

$pdo = require __DIR__ . '/../../bootstrap.php';

require_once '../../app/Models/Site.php';
require_once '../../app/Controllers/SiteController.php';

// Autoload namespaces

$controller = new SiteController($pdo);

$method = $_SERVER['REQUEST_METHOD'];
$uri = explode('/', $_SERVER['REQUEST_URI']);
$id = isset($uri[4]) ? (int)$uri[4] : null;

$data = json_decode(file_get_contents('php://input'), true);

switch ($method) {
    case 'GET':
        $id ? $controller->show($id) : $controller->index();
        break;
    case 'POST':
        $controller->store($data);
        break;
    case 'PUT':
        $controller->update($id, $data);
        break;
    case 'DELETE':
        $controller->destroy($id);
        break;
    default:
        http_response_code(405);
        echo json_encode(["error" => "Method Not Allowed"]);
}
