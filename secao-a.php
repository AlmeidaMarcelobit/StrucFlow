<?php
$colaboradores = json_decode(file_get_contents('colaboradores.json'), true);

foreach ($colaboradores as $c) {
    echo "<div class='card'>";
    echo "<h3>👤 {$c['nome']}</h3>";
    echo "<p><strong>Cargo: </strong>{$c['cargo']}</p>";
    echo "<p><strong>Departamento: </strong>{$c['departamento']}</p>";
    echo "<p><strong>E-mail: </strong>{$c['email']}</p>";
    echo "<p><strong>CPF: </strong>{$c['cpf']}</p>";
    echo "<p><strong>Centro de Custo: </strong>{$c['centro_custo']}</p>";
    echo "<p><span class='".strtolower($c['status'])."'>Status: {$c['status']}</span></p>";

    echo "<div class='devices'>";
    echo "<div class='device'>";
    echo "<h4>💻 Notebook</h4>";
    echo "<p><strong>Patrimônio: </strong>{$c['notebook']['patrimonio']}</p>";
    echo "<p><strong>Série: </strong>{$c['notebook']['serie']}</p>";
    echo "<p><strong>Modelo: </strong>{$c['notebook']['modelo']}</p>";
    echo "</div>";

    echo "<div class='device'>";
    echo "<h4>🎧 Fone</h4>";
    echo "<p><strong>Patrimônio: </strong>{$c['fone']['patrimonio']}</p>";
    echo "<p><strong>Série: </strong>{$c['fone']['serie']}</p>";
    echo "<p><strong>Modelo: </strong>{$c['fone']['modelo']}</p>";
    echo "</div>";
    echo "</div>";

    echo "<div class='devices'><div class='responsibility-link'>";
    echo "<h4><a href='{$c['termo']}' target='_blank'>📑 Termo de Responsabilidade</a></h4>";
    echo "</div></div>";

    echo "</div>";
}
?>
