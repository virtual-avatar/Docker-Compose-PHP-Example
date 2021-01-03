<?php declare(strict_types=1);

$dbh = new PDO('pgsql:host=postgres;dbname=example;port=5433', 'example', 'example');
echo $dbh->query('SELECT NOW()')->fetchColumn();
