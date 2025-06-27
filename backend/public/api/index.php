<?php
header('Content-Type: application/json; charset=utf-8');

echo json_encode([
    'status' => 'ok',
    'message' => 'Backend PHP funcionando!',
    'timezones' => [
        'Europe/Lisbon' => (new DateTime('now', new DateTimeZone('Europe/Lisbon')))->format('d/m/Y H:i:s'),
        'Europe/Madrid' => (new DateTime('now', new DateTimeZone('Europe/Madrid')))->format('d/m/Y H:i:s'),
        'Europe/Rome' => (new DateTime('now', new DateTimeZone('Europe/Rome')))->format('d/m/Y H:i:s'),
        'America/Sao_Paulo' => (new DateTime('now', new DateTimeZone('America/Sao_Paulo')))->format('d/m/Y H:i:s'),
        'America/Argentina/Buenos_Aires' => (new DateTime('now', new DateTimeZone('America/Argentina/Buenos_Aires')))->format('d/m/Y H:i:s'),
    ],
]);
