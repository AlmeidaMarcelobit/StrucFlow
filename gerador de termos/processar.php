<?php
require('fpdf.php');
require('zip.php');

// Receber os dados do formulário
$dados = $_POST['dados'];

// Processar os dados (exemplo simplificado)
$linhas = explode("\n", $dados);
foreach ($linhas as $linha) {
    $dadosColaborador = explode(":", $linha);
    // ... (extrair os dados do colaborador)
    gerarPDF($dadosColaborador);
}

// Criar o arquivo ZIP
$zip = new ZipArchive;
$zip->open('todos_colaboradores.zip', ZipArchive::CREATE);
// ... (adicionar os PDFs ao arquivo ZIP)
$zip->close();

// Gerar a saída HTML com o link para o download do ZIP
echo '<a href="todos_colaboradores.zip">Download de todos os arquivos</a>';

function gerarPDF($dadosColaborador) {
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(40, 10, 'Informações do Colaborador');
    $pdf->Ln();
    // ... (adicionar as linhas com os dados do colaborador)
    $pdf->Output('D', 'colaborador_' . time() . '.pdf');
}