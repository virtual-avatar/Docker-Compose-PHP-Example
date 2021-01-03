<?php declare(strict_types=1);

$dbh = new PDO('pgsql:host=postgres;dbname=example;port=5433', 'example', 'example');
echo "PostgreSQL is running, current time: " . $dbh->query('SELECT NOW()')->fetchColumn() . "<br>";

$redis = new Redis();
$redis->connect('redis');
$response = $redis->ping();
echo "Redis is running: " . (1 === (int)$response ? 'PONG' : $response) . "<br>";
