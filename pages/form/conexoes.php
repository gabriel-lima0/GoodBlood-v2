<?php
  session_start();
  if(!empty($_GET['apto'])){
    $apto = $_GET['apto'];

    if ($apto == "NAO"){
      echo "<script> window.onload = function() {
        swal('Atenção!', 'Infelizmente você não pode doar neste momento, tente novamente em outro dia.', 'info');    
      }; </script>";
    }
  };
?>