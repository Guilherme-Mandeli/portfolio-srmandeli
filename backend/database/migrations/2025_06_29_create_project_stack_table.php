<?php
return function (PDO $pdo) {
    $sql = "
        CREATE TABLE IF NOT EXISTS project_stack (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            description TEXT,
            version VARCHAR(50),
            project_section VARCHAR(50)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";
    $pdo->exec($sql);
};
