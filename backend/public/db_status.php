<?php
header("Content-Type: application/json");

require_once __DIR__ . "../../bootstrap.php";

echo json_encode(['status' => 'ok', 'message' => 'Successful database connection!']);
