<?php

function connect_db() {
  $host = DB_HOST;
  $dbname = DB_NAME;
  $user = DB_USER;
  $password = DB_PASSWORD;

  try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
    ];
    $pdo = new PDO($dsn, $user, $password, $options);
    return $pdo;
  } catch (PDOException $e) {
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
  }
}
