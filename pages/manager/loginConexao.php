<?php
  session_start();
  if(isset($_SESSION['logou'])){
    $logou = $_SESSION['logou'];

    if($logou == 'NAO'){
       $logou = '';
       $_SESSION['logou'] = $logou;

      echo "<script> window.onload = function() {
        swal('Atenção!', 'Usuário ou senha inválidos.', 'error');    
      }; </script>";
    }

    if($logou == 'tentouDireto'){
      $logou = '';
      $_SESSION['logou'] = $logou;

      echo "<script> window.onload = function() {
        swal('Atenção!', 'Para acessar a tela de gerenciamento é preciso antes realizar login.', 'info');    
      }; </script>";
    }
  }
?>