<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Escape Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .card-box,
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .equipamento-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .equipamento-card {
            background: #e3e3e3;
            padding: 15px;
            border-radius: 8px;
            flex: 1 1 200px;
        }

        .attention-info {
            background: #ffcccb;
            padding: 15px;
            border-radius: 8px;
        }

        .devices {
            margin-top: 20px;
        }

        .device {
            background: #e3e3e3;
            padding: 15px;
            border-radius: 8px;
        }

    </style>
</head>

<body>
    <?php include '../includes/header.php'?>
    <h2>
        Icone
    </h2>
    💻 Notebook<br>
    📑 Termo Respoponsabildiade<br>
    🎧 Fone<br>
    ⚠️ Atenção<br>
    📱 Celular<br>
    🔌 Fone<br>
    ⌨️🖱️ Teclado e Mouse<br>
    🔩 Suporte<br>
    🖥️ Monitor<br>

    <h2>Codigo Estoque</h2>
    <pre>
     &lt;div class=&quot;card-box&quot;&gt;
            &lt;h2&gt;📦ID Caixa:&lt;/h2&gt;
            &lt;p&gt;&lt;strong&gt;Substitui&ccedil;&atilde;o:&lt;/strong&gt;&lt;/p&gt;
            &lt;p&gt;&lt;strong&gt;Departamento:&lt;/strong&gt;&lt;/p&gt;
            &lt;p&gt;&lt;strong&gt;Centro de Custo:&lt;/strong&gt;&lt;/p&gt;

            &lt;div class=&quot;equipamento-container&quot;&gt;
               &lt;div class=&quot;equipamento-card&quot;&gt;
                    &lt;h3&gt;💻Notebook&lt;/h3&gt;
                    &lt;p&gt;&lt;strong&gt;Modelo:&lt;/strong&gt;&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;S/N:&lt;/strong&gt;&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Patrim&ocirc;nio:&lt;/strong&gt;&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class=&quot;equipamento-card&quot;&gt;
                    &lt;h3&gt;⌨️🖱️Teclado e Mouse&lt;/h3&gt;
                    &lt;p&gt;&lt;strong&gt;Modelo:&lt;/strong&gt;&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;S/N:&lt;/strong&gt;&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Patrim&ocirc;nio:&lt;/strong&gt;&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class=&quot;equipamento-card&quot;&gt;
                    &lt;h3&gt;🎧Fone&lt;/h3&gt;
                    &lt;p&gt;&lt;strong&gt;Modelo:&lt;/strong&gt;&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;S/N:&lt;/strong&gt;&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Patrim&ocirc;nio:&lt;/strong&gt;&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class=&quot;equipamento-card&quot;&gt;
                    &lt;h3&gt;🔩Suporte&lt;/h3&gt;
                    &lt;p&gt;&lt;strong&gt;Modelo:&lt;/strong&gt;&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;S/N:&lt;/strong&gt;&lt;/p&gt;
                    &lt;p&gt;&lt;strong&gt;Patrim&ocirc;nio:&lt;/strong&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class=&quot;attention-info&quot;&gt;
            &lt;h2&gt;⚠️ Informa&ccedil;&otilde;es Importantes&lt;/h2&gt;
            &lt;p&gt;&lt;strong&gt;Alerta:&lt;/strong&gt;&lt;/p&gt;
        &lt;/div&gt;
        </pre>
    <h2>Codigo Colaboradores</h2>

    <pre>
    &lt;div class=&quot;card&quot;&gt;
    &lt;img src=&quot;&quot; alt=&quot;Foto do Colaborador&quot; class=&quot;profile-pic&quot;&gt;
    &lt;h3&gt;👤 Nome do Colaborador&lt;/h3&gt;
    &lt;p&gt;&lt;strong&gt;Cargo:&lt;/strong&gt;&lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;Departamento:&lt;/strong&gt; &lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;E-mail:&lt;/strong&gt; &lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;CPF:&lt;/strong&gt;&lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;Centro de Custo:&lt;/strong&gt; &lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;Data de Admiss&atilde;o:&lt;/strong&gt; &lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;Data de Demiss&atilde;o:&lt;/strong&gt;&lt;/p&gt;
    &lt;p&gt;&lt;span class=&quot;status ativo&quot;&gt;Status:&lt;/span&gt;&lt;/p&gt;
    &lt;div class=&quot;devices&quot;&gt;
    &lt;div class=&quot;device&quot;&gt;
    &lt;h4&gt;💻 Equipamento&lt;/h4&gt;
    &lt;p&gt;&lt;strong&gt;Patrim&ocirc;nio:&lt;/strong&gt; C&oacute;digo&lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;S&eacute;rie:&lt;/strong&gt; &lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;Modelo:&lt;/strong&gt; Modelo&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;h2&gt;Equipamentos Comprometidos&lt;/h2&gt;
    &lt;div class=&quot;device&quot;&gt;
    &lt;h4&gt;🎧 Equipamento&lt;/h4&gt;
    &lt;p&gt;&lt;strong&gt;Patrim&ocirc;nio:&lt;/strong&gt; C&oacute;digo&lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;S&eacute;rie:&lt;/strong&gt; S&eacute;rie&lt;/p&gt;
    &lt;p&gt;&lt;strong&gt;Modelo:&lt;/strong&gt; Modelo&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;attention-info&quot;&gt;
    &lt;h2&gt;⚠️ Informa&ccedil;&otilde;es Importantes&lt;/h2&gt;
    &lt;p&gt;&lt;strong&gt;Alerta:&lt;/strong&gt; Informa&ccedil;&atilde;o relevante aqui&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class=&quot;devices&quot;&gt;
    &lt;div class=&quot;responsibility-link&quot;&gt;
    &lt;h4&gt;&lt;a href=&quot;&quot;&gt;📑 Termo de Responsabilidade&lt;/a&gt;&lt;/h4&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    </pre>


</body>

</html>
