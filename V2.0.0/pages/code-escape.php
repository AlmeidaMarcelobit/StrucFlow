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

    <pre>
    &lt;div class=&quot;card&quot;&gt;
        &lt;img src=&quot;&quot; alt=&quot;Foto do Colaborador&quot; class=&quot;profile-pic&quot;&gt;
        &lt;h3&gt;👤 Nome do Colaborador&lt;&#x2F;h3&gt;
        &lt;p&gt;&lt;strong&gt;Cargo:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
        &lt;p&gt;&lt;strong&gt;Departamento:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
        &lt;p&gt;&lt;strong&gt;E-mail:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
        &lt;p&gt;&lt;strong&gt;CPF:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
        &lt;p&gt;&lt;strong&gt;Centro de Custo:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
        &lt;p&gt;&lt;strong&gt;Data de Admissão:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
        &lt;p&gt;&lt;strong&gt;Data de Demissão:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
        &lt;p&gt;&lt;span class=&quot;status ativo&quot;&gt;Status:&lt;&#x2F;span&gt;&lt;&#x2F;p&gt;
        &lt;div class=&quot;devices&quot;&gt;
            &lt;div class=&quot;device&quot;&gt;
                &lt;h4&gt;💻 Notebook&lt;&#x2F;h4&gt;
                &lt;p&gt;&lt;strong&gt;Patrimônio:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Série:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Modelo:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
            &lt;&#x2F;div&gt;
            &lt;div class=&quot;device&quot;&gt;
                &lt;h4&gt;⌨️🖱️Teclado e Mouse&lt;&#x2F;h4&gt;
                &lt;p&gt;&lt;strong&gt;Patrimônio:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Série:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Modelo:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
            &lt;&#x2F;div&gt;
            &lt;div class=&quot;device&quot;&gt;
                &lt;h4&gt;🎧 Fone&lt;&#x2F;h4&gt;
                &lt;p&gt;&lt;strong&gt;Patrimônio:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Série:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Modelo:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
            &lt;&#x2F;div&gt;
            &lt;div class=&quot;device&quot;&gt;
                &lt;h4&gt;🔩 Suporte&lt;&#x2F;h4&gt;
                &lt;p&gt;&lt;strong&gt;Patrimônio:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Série:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Modelo:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
            &lt;&#x2F;div&gt;
            &lt;div class=&quot;device&quot;&gt;
                &lt;h4&gt;🖥️ Monitor&lt;&#x2F;h4&gt;
                &lt;p&gt;&lt;strong&gt;Patrimônio:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Série:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Modelo:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
            &lt;&#x2F;div&gt;
            &lt;div class=&quot;device&quot;&gt;
                &lt;h4&gt;📱 Celular&lt;&#x2F;h4&gt;;
                &lt;p&gt;&lt;strong&gt;Patrimônio:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Série:&lt;&#x2F;strong&gt; &lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;Modelo:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;IMEI 1:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
                &lt;p&gt;&lt;strong&gt;IMEI 2:&lt;&#x2F;strong&gt;&lt;&#x2F;p&gt;
            &lt;&#x2F;div&gt;
        &lt;&#x2F;div&gt;
        &lt;h2&gt;Equipamentos Comprometidos&lt;&#x2F;h2&gt;
        &lt;div class=&quot;device&quot;&gt;
            &lt;h4&gt;🎧 Equipamento&lt;&#x2F;h4&gt;
            &lt;p&gt;&lt;strong&gt;Patrimônio:&lt;&#x2F;strong&gt; Código&lt;&#x2F;p&gt;
            &lt;p&gt;&lt;strong&gt;Série:&lt;&#x2F;strong&gt; Série&lt;&#x2F;p&gt;
            &lt;p&gt;&lt;strong&gt;Modelo:&lt;&#x2F;strong&gt; Modelo&lt;&#x2F;p&gt;
        &lt;&#x2F;div&gt;
        &lt;div class=&quot;attention-info&quot;&gt;
            &lt;h2&gt;⚠️ Informações Importantes&lt;&#x2F;h2&gt;
            &lt;p&gt;&lt;strong&gt;Alerta:&lt;&#x2F;strong&gt; Informação relevante aqui&lt;&#x2F;p&gt;
        &lt;&#x2F;div&gt;
        &lt;div class=&quot;devices&quot;&gt;
            &lt;div class=&quot;responsibility-link&quot;&gt;
                &lt;h4&gt;&lt;a href=&quot;&quot;&gt;📑 Termo de Responsabilidade&lt;&#x2F;a&gt;&lt;&#x2F;h4&gt;
            &lt;&#x2F;div&gt;
        &lt;&#x2F;div&gt;
    &lt;&#x2F;div&gt;
    </pre>




    <pre>
    &lt;h4&gt;⌨️🖱️Teclado e Mouse&lt;/h4&gt;
    &lt;h4&gt;💻 Notebook&lt;/h4&gt;
    &lt;h4&gt;📑 Termo Respoponsabildiade&lt;/h4&gt;
    &lt;h4&gt;🎧 Fone&lt;/h4&gt;
    &lt;h4&gt;⚠️ Atenção&lt;/h4&gt;
    &lt;h4&gt;📱 Celular&lt;/h4&gt;
    &lt;h4&gt;🔌 Fone&lt;/h4&gt;
    &lt;h4&gt;🔩 Suporte&lt;/h4&gt;
    &lt;h4&gt;🖥️ Monitor&lt;/h4&gt;
    </pre>

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




</body>

</html>
