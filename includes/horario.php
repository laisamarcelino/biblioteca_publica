<?php
    $abertura = "07:30";
    $fechamento = "18:00";
    $horarioAtual = date("H:i");

    print "$horarioAtual - ";
    if ($horarioAtual >= $abertura and $horarioAtual <= $fechamento){
      echo "Está aberto";
    }
    elseif ($horarioAtual >= $fechamento){
      echo "Está fechado";
    }
   ?>
