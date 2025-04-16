<?php
$letra = isset($_GET['letra']) ? strtoupper($_GET['letra']) : 'A';  // Se não passar, exibe a letra A
$arquivo = "colaboradores_{$letra}.json";

// Verifica se o arquivo existe, se não, exibe uma mensagem
if (!file_exists($arquivo)) {
    echo "Nenhum colaborador encontrado para a letra {$letra}.";
    exit;
}

$colaboradores = json_decode(file_get_contents($arquivo), true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Colaboradores - Letra <?= $letra ?></title>
    <style>
        .card { border: 1px solid #ccc; padding: 15px; margin: 15px; border-radius: 5px; }
        .device { margin-top: 10px; padding-left: 15px; }
        .attention-info { background: #ffeeba; padding: 10px; margin-top: 15px; border-radius: 5px; }
        .offline { color: red; }
        .online { color: green; }
    </style>
</head>
<body>
<h2>📋 Colaboradores - Letra <?= $letra ?></h2>

<?php if (empty($colaboradores)): ?>
    <p>Não há colaboradores cadastrados para a letra <?= $letra ?>.</p>
<?php else: ?>
    <?php foreach ($colaboradores as $c): ?>
        <div class="card">
            <h3>👤 <?= $c['nome'] ?></h3>
            <?php if (!empty($c['cargo'])) echo "<p><strong>Cargo: </strong>{$c['cargo']}</p>"; ?>
            <?php if (!empty($c['departamento'])) echo "<p><strong>Departamento: </strong>{$c['departamento']}</p>"; ?>
            <?php if (!empty($c['email'])) echo "<p><strong>E-mail: </strong>{$c['email']}</p>"; ?>
            <?php if (!empty($c['cpf'])) echo "<p><strong>CPF: </strong>{$c['cpf']}</p>"; ?>
            <?php if (!empty($c['centro_custo'])) echo "<p><strong>Centro de Custo: </strong>{$c['centro_custo']}</p>"; ?>
            <?php if (!empty($c['status'])) echo "<p><span class='".strtolower($c['status'])."'>Status: {$c['status']}</span></p>"; ?>

            <div class="devices">
                <?php
                $dispositivos = [
                    'notebook' => '💻 Notebook',
                    'teclado_mouse' => '⌨️🖱️ Teclado e Mouse',
                    'fone' => '🎧 Fone',
                    'suporte' => '🔩 Suporte',
                    'monitor' => '🖥️ Monitor',
                    'adaptador' => '📶 Adaptador de Rede',
                    'equipamento' => '🎧 Equipamento Comprometido',
                    'celular' => '📱 Celular'
                ];

                foreach ($dispositivos as $chave => $titulo) {
                    if (!empty($c[$chave])) {
                        $d = $c[$chave];
                        $temDados = !empty($d['patrimonio']) || !empty($d['serie']) || !empty($d['modelo']) || !empty($d['imei1']) || !empty($d['imei2']);
                        if ($temDados) {
                            echo "<div class='device'><h4>$titulo</h4>";
                            if (!empty($d['patrimonio'])) echo "<p><strong>Patrimônio:</strong> {$d['patrimonio']}</p>";
                            if (!empty($d['serie'])) echo "<p><strong>Série:</strong> {$d['serie']}</p>";
                            if (!empty($d['modelo'])) echo "<p><strong>Modelo:</strong> {$d['modelo']}</p>";
                            if ($chave === 'celular') {
                                if (!empty($d['imei1'])) echo "<p><strong>IMEI 1:</strong> {$d['imei1']}</p>";
                                if (!empty($d['imei2'])) echo "<p><strong>IMEI 2:</strong> {$d['imei2']}</p>";
                            }
                            echo "</div>";
                        }
                    }
                }
                ?>
            </div>

            <?php if (!empty($c['alerta'])): ?>
                <div class="attention-info">
                    <h4>⚠️ Informações Importantes</h4>
                    <p><?= $c['alerta'] ?></p>
                </div>
            <?php endif; ?>

            <?php if (!empty($c['termo'])): ?>
                <div class="devices">
                    <h4><a href="<?= $c['termo'] ?>" target="_blank">📑 Termo de Responsabilidade</a></h4>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>
