<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Relatório em PDF</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 2px 2px 10px #aaa;
        }

        label {
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #218838;
        }

    </style>
</head>

<body>

    <h2 style="text-align: center;">Gerar Relatório em PDF</h2>

    <form id="formulario">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" required>

        <label for="cargo">Cargo:</label>
        <input type="text" id="cargo" required>

        <label for="admissao">Data de Admissão:</label>
        <input type="date" id="admissao" required>

        <label for="desligamento">Data de Desligamento:</label>
        <input type="date" id="desligamento">

        <label for="observacoes">Observações:</label>
        <textarea id="observacoes" rows="4"></textarea>

        <button type="button" onclick="gerarPDF()">Gerar Relatório</button>
    </form>

    <script>
        function gerarPDF() {
            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF();

            // Pegando os valores do formulário
            const nome = document.getElementById("nome").value;
            const cargo = document.getElementById("cargo").value;
            const admissao = document.getElementById("admissao").value;
            const desligamento = document.getElementById("desligamento").value || "Ainda na empresa";
            const observacoes = document.getElementById("observacoes").value;

            // Criando o conteúdo do PDF
            doc.setFont("helvetica", "bold");
            doc.text("Relatório de Funcionário", 20, 20);
            doc.setFont("helvetica", "normal");
            doc.text(`Nome: ${nome}`, 20, 40);
            doc.text(`Cargo: ${cargo}`, 20, 50);
            doc.text(`Data de Admissão: ${admissao}`, 20, 60);
            doc.text(`Data de Desligamento: ${desligamento}`, 20, 70);
            doc.text("Observações:", 20, 80);
            doc.text(observacoes, 20, 90, {
                maxWidth: 170
            });

            // Baixando o PDF
            doc.save(`Relatorio_${nome}.pdf`);
        }

    </script>

</body>

</html>
