<?php

require_once '../core/database.php';

function get_user_by_email($email) {
  $pdo = connect_db();
  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->execute([$email]);
  $user = $stmt->fetch();
  return $user;
}
