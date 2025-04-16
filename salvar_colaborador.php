<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$letra_inicial = strtoupper(substr($nome, 0, 1));  // Obtém a primeira letra do nome (A, B, C, etc.)

// Verifica se a letra inicial está entre A e Z
if (preg_match("/^[A-Z]$/", $letra_inicial)) {
    $arquivo = "data/colaboradores_{$letra_inicial}.json";
} else {
    echo "Nome inválido ou fora do padrão. Apenas letras A-Z são permitidas.";
    exit;
}

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

$dados = json_decode(file_get_contents($arquivo), true);

function campo($nome) {
    return isset($_POST[$nome]) ? trim($_POST[$nome]) : '';
}

$novo = [
    'nome' => campo('nome'),
    'cargo' => campo('cargo'),
    'departamento' => campo('departamento'),
    'email' => campo('email'),
    'cpf' => campo('cpf'),
    'centro_custo' => campo('centro_custo'),
    'status' => campo('status'),
    'notebook' => [
        'patrimonio' => campo('notebook_patrimonio'),
        'serie' => campo('notebook_serie'),
        'modelo' => campo('notebook_modelo')
    ],
    'teclado_mouse' => [
        'patrimonio' => campo('teclado_mouse_patrimonio'),
        'serie' => campo('teclado_mouse_serie'),
        'modelo' => campo('teclado_mouse_modelo')
    ],
    'fone' => [
        'patrimonio' => campo('fone_patrimonio'),
        'serie' => campo('fone_serie'),
        'modelo' => campo('fone_modelo')
    ],
    'suporte' => [
        'patrimonio' => campo('suporte_patrimonio'),
        'serie' => campo('suporte_serie'),
        'modelo' => campo('suporte_modelo')
    ],
    'monitor' => [
        'patrimonio' => campo('monitor_patrimonio'),
        'serie' => campo('monitor_serie'),
        'modelo' => campo('monitor_modelo')
    ],
    'adaptador' => [
        'patrimonio' => campo('adaptador_patrimonio'),
        'serie' => campo('adaptador_serie'),
        'modelo' => campo('adaptador_modelo')
    ],
    'equipamento' => [
        'patrimonio' => campo('equipamento_patrimonio'),
        'serie' => campo('equipamento_serie'),
        'modelo' => campo('equipamento_modelo')
    ],
    'celular' => [
        'patrimonio' => campo('celular_patrimonio'),
        'serie' => campo('celular_serie'),
        'modelo' => campo('celular_modelo'),
        'imei1' => campo('celular_imei1'),
        'imei2' => campo('celular_imei2')
    ],
    'alerta' => campo('alerta'),
    'termo' => campo('termo')
];

$dados[] = $novo;
file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "✅ Colaborador salvo com sucesso! <a href='secao-a.php?letra={$letra_inicial}'>Ver lista de colaboradores</a>";
?>
