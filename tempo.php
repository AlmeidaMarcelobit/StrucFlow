<?php

// Array com as informações dos colaboradores
$colaboradores = [
    [
        'nome' => 'Arnaldo Rocha Junior',
        'data_admissao' => '05.08.2024',
        'data_desligamento' => null,
    ],
    [
        'nome' => 'Felipe Cando Oliveira',
        'data_admissao' => '05.08.2024',
        'data_desligamento' => null,
    ],
    [
        'nome' => 'Lucas Pedro Pereira',
        'data_admissao' => '20.05.2024',
        'data_desligamento' => null,
    ],
    // Adicione os demais colaboradores aqui...
];

// Função para calcular o tempo de serviço
function calcularTempoDeServico($data_admissao, $data_desligamento) {
    $data_admissao = DateTime::createFromFormat('d.m.Y', $data_admissao);
    if ($data_desligamento) {
        $data_desligamento = DateTime::createFromFormat('d.m.Y', $data_desligamento);
        $intervalo = $data_admissao->diff($data_desligamento);
    } else {
        $intervalo = $data_admissao->diff(new DateTime());
    }
    return $intervalo->format('%y anos, %m meses e %d dias');
}

// Loop para calcular o tempo de serviço de cada colaborador
foreach ($colaboradores as $colaborador) {
    $tempo_de_servico = calcularTempoDeServico($colaborador['data_admissao'], $colaborador['data_desligamento']);
    echo "Colaborador: " . $colaborador['nome'] . "<br>";
    echo "Tempo de serviço: " . $tempo_de_servico . "<br><br>";
}

?><?php
/**
 * Created by PhpStorm.
 * User: Krypt0n
 * Date: 25/09/2024
 * Time: 12:45
 */