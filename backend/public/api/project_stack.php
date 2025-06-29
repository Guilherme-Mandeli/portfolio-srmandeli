<?php
// Permitir CORS (durante o desenvolvimento)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once __DIR__ . "/../../bootstrap.php";

try {
    $stmt = $pdo->query("SELECT * FROM project_stack ORDER BY id ASC");
    $rows = $stmt->fetchAll();

    echo json_encode([
        'status' => 'success',
        'data' => $rows
    ]);

} catch ( Exception $e ) {
    http_response_code( 500 );
    echo json_encode([
        'status' => 'error',
        'message' => 'Erro ao buscar dados',
        'detail' => $e->getMessage()
    ]);
}
