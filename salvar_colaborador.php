<?php
$arquivo = 'colaboradores.json';

// Se o arquivo ainda não existe, cria um array vazio
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, json_encode([]));
}

// Lê os dados já existentes
$dados = json_decode(file_get_contents($arquivo), true);

// Novo colaborador vindo do formulário
$novo = [
    'nome' => $_POST['nome'],
    'cargo' => $_POST['cargo'],
    'departamento' => $_POST['departamento'],
    'email' => $_POST['email'],
    'cpf' => $_POST['cpf'],
    'centro_custo' => $_POST['centro_custo'],
    'status' => $_POST['status'],
    'notebook' => [
        'patrimonio' => $_POST['notebook_patrimonio'],
        'serie' => $_POST['notebook_serie'],
        'modelo' => $_POST['notebook_modelo']
    ],
    'fone' => [
        'patrimonio' => $_POST['fone_patrimonio'],
        'serie' => $_POST['fone_serie'],
        'modelo' => $_POST['fone_modelo']
    ],
    'termo' => $_POST['termo_responsabilidade']
];

// Adiciona ao array e salva de novo no arquivo
$dados[] = $novo;
file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "✅ Colaborador salvo! <a href='secao-a.php'>Voltar à lista</a>";
?>
