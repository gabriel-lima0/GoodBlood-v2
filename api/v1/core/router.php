<?php

function route($method, $path) {
  switch ("$method $path") {
    case 'POST /login':
      require_once '../controllers/login-controller.php';
      login();
      break;
    default:
      http_response_code(404);
      echo "Rota não encontrada.";
      break;
  }
}
