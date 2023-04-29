<?php

function login() {
  $input = json_decode(file_get_contents('php://input'), true);

  $email = $input['email'] ?? '';
  $password = $input['password'] ?? '';

  if (empty($email) || empty($password)) {
    http_response_code(400);
    echo "Email e senha são obrigatórios.";
    return;
  }
  require_once '../models/login-model.php';
  $user = get_user_by_email($email);

  if (!$user) {
    http_response_code(401);
    echo "Email ou senha incorretos.";
    return;
  }

  if ($user['password'] !== $password) {
    http_response_code(401);
    echo "Email ou senha incorretos.";
    return;
  }

  http_response_code(200);
  echo "Login bem-sucedido.";
}
