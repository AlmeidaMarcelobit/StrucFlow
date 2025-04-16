<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Colaborador</title>
</head>
<body>
<h2>📋 Cadastro de Colaborador</h2>
<form action="salvar_colaborador.php" method="post">
    <label>Nome: <input type="text" name="nome" required></label><br>
    <label>Cargo: <input type="text" name="cargo"></label><br>
    <label>Departamento: <input type="text" name="departamento"></label><br>
    <label>Email: <input type="email" name="email"></label><br>
    <label>CPF: <input type="text" name="cpf"></label><br>
    <label>Centro de Custo: <input type="text" name="centro_custo"></label><br>
    <label>Status:
        <select name="status">
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
        </select>
    </label><br><br>

    <?php
    $equipamentos = [
        'notebook' => '💻 Notebook',
        'teclado_mouse' => '⌨️🖱️ Teclado e Mouse',
        'fone' => '🎧 Fone',
        'suporte' => '🔩 Suporte',
        'monitor' => '🖥️ Monitor',
        'adaptador' => '📶 Adaptador de Rede',
        'equipamento' => '🎧 Equipamento Comprometido'
    ];

    foreach ($equipamentos as $key => $label) {
        echo "<fieldset><legend><strong>$label</strong></legend>";
        echo "<label>Patrimônio: <input type='text' name='{$key}_patrimonio'></label><br>";
        echo "<label>Série: <input type='text' name='{$key}_serie'></label><br>";
        echo "<label>Modelo: <input type='text' name='{$key}_modelo'></label><br>";
        echo "</fieldset><br>";
    }
    ?>

    <fieldset>
        <legend><strong>📱 Celular</strong></legend>
        <label>Patrimônio: <input type="text" name="celular_patrimonio"></label><br>
        <label>Série: <input type="text" name="celular_serie"></label><br>
        <label>Modelo: <input type="text" name="celular_modelo"></label><br>
        <label>IMEI 1: <input type="text" name="celular_imei1"></label><br>
        <label>IMEI 2: <input type="text" name="celular_imei2"></label><br>
    </fieldset><br>

    <label>⚠️ Alerta: <input type="text" name="alerta"></label><br>
    <label>📑 Termo de Responsabilidade (URL): <input type="url" name="termo"></label><br><br>

    <input type="submit" value="Salvar Colaborador">
</form>
</body>
</html>
