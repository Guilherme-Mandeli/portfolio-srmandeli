<?php
require_once __DIR__ . '/bootstrap.php';

echo "🔹 Running Migrations...\n";

$migrations = glob( __DIR__ . '/database/migrations/*.php' );

foreach ( $migrations as $migrationFile ) {
    $migration = require $migrationFile;
    $migration( $pdo );

    echo "✅ Migration " . basename( $migrationFile ) . " executed.\n";
}

echo "🔹 Running Seeders...\n";

$seeders = glob( __DIR__ . '/database/seeders/*.php' );

foreach ( $seeders as $seederFile ) {
    $seeder = require $seederFile;
    $seeder( $pdo );

    echo "✅ Seeder " . basename( $seederFile ) . " executed.\n";
}

echo "[ Migrations and Seeders finished. ] \n";