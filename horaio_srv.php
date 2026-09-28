<?php
// Define o fuso horário para o horário de Brasília/São Paulo
date_default_timezone_set('America/Sao_Paulo');

// Exibe a hora atual no formato Hora:Minuto:Segundo
$horaAtual = date('H:i:s');
$dataAtual = date('d/m/Y');

echo "Data do servidor: " . $dataAtual . "<br>";
echo "Hora do servidor: " . $horaAtual;
?>