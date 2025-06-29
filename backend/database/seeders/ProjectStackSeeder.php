<?php
return function (PDO $pdo) {
    $sql = "INSERT INTO project_stack (name, description, version, project_section) VALUES
        ('PHP', 'Backend programming language', '8.2', 'Backend'),
        ('Vue.js', 'Frontend framework', '3.4', 'Frontend'),
        ('MySQL', 'Relational database system', '5.7', 'Database'),
        ('TypeScript', 'Typed superset of JavaScript', '5.0', 'Frontend'),
        ('Vite', 'Frontend build tool and dev server', '4.3', 'Frontend'),
        ('Pinia', 'State management for Vue.js', '2.0', 'Frontend'),
        ('Axios', 'HTTP client for browsers and Node.js', '1.4', 'Frontend'),
        ('Composer', 'PHP dependency manager', '2.5', 'Backend'),
        ('Apache', 'Web server software', '2.4', 'Backend'),
        ('Docker', 'Container platform', '24.0', 'DevOps'),
        ('EsLint', 'JavaScript/TypeScript linter', '8.0', 'Frontend'),
        ('Prettier', 'Code formatter', '3.0', 'Frontend'),
        ('PHPUnit', 'Testing framework for PHP', '10.0', 'Backend'),
        ('Redis', 'In-memory data structure store', '7.0', 'Backend'),
        ('Nginx', 'Web server and reverse proxy', '1.24', 'Backend')
    ";
    $pdo->exec($sql);
};
