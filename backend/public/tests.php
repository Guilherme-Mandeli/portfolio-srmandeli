<?php

/**
 * Loads the database connection.
 */
require_once __DIR__ . '/../database.php';

/**
 * Retrieves all rows from the project_stack table.
 *
 * @global PDO $pdo Database connection.
 *
 * @return array $table_data Array with all table rows.
 */
$table_data = $pdo->query(
    'SELECT * FROM project_stack'
)->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Test Panel - project_stack</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
        }

        th,
        td {
            border: 1px solid #aaa;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background: #f4f4f4;
        }

        caption {
            font-size: 1.4em;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table>
        <caption>Content of table <code>project_stack</code></caption>
        <thead>
            <tr>
                <?php if ( ! empty( $table_data ) ) : ?>
                    <?php foreach ( array_keys( $table_data[0] ) as $column_name ) : ?>
                        <th>
                            <?php echo htmlspecialchars( $column_name ); ?>
                        </th>
                    <?php endforeach; ?>
                <?php else : ?>
                    <th>No data found</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $table_data as $table_row ) : ?>
                <tr>
                    <?php foreach ( $table_row as $cell_value ) : ?>
                        <td>
                            <?php echo htmlspecialchars( $cell_value ); ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
