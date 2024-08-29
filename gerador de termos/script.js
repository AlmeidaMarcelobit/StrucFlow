function processarDados() {
    const dados = document.getElementById('dados').value;

    fetch('processar.php', {
        method: 'POST',
        body: dados
    })
    .then(response => response.text())
    .then(html => {
        document.getElementById('resultado').innerHTML = html;
    });
}