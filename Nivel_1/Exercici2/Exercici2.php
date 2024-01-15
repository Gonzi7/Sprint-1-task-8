<?php

function verificarGrado($nota) {
    
    if (!is_numeric($nota)|| $nota < 0) {
        return "Entrada invalida";
    }

    if ($nota >= 60) {
        return "Primera División";
    } elseif ($nota >= 45 && $nota < 60) {
        return "Segunda División";
    } elseif ($nota >= 33 && $nota < 45) {
        return "Tercera División";
    } else {
        return "Reprobado";
    }
}

echo verificarGrado(65) ."\n";
echo verificarGrado(50) ."\n";
echo verificarGrado(40) ."\n";
echo verificarGrado(30) ."\n";
?>