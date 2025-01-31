// Importa o arquivo CSS
const link = document.createElement("link");
link.rel = "stylesheet";
link.type = "text/css";
link.href = "../css/styles.css";
document.head.appendChild(link);

function searchColaborador() {
  const searchTerm = document.getElementById("searchInput").value.toLowerCase();
  const articles = document.getElementsByTagName("article");
  let found = false;

  for (let article of articles) {
    const colaboradorName = article.querySelector(".colaborador-details p:first-child").textContent.toLowerCase();

    // Captura todos os elementos <p> que contêm informações do patrimônio
    const patrimonioElements = article.querySelectorAll(".equipamento p");
    let patrimonioFound = false;

    // Verifica se algum <p> com "Patrimonio:" contém o termo de busca
    for (let patrimonioElement of patrimonioElements) {
      if (patrimonioElement.textContent.toLowerCase().includes("patrimonio:")) {
        const patrimonioText = patrimonioElement.textContent.toLowerCase();
        if (patrimonioText.includes(searchTerm)) {
          patrimonioFound = true;
          break;
        }
      }
    }

    // Verifica se o termo de busca está no nome do colaborador ou no número de patrimônio
    if (colaboradorName.includes(searchTerm) || patrimonioFound) {
      article.style.display = "";
      if (!found) {
        article.scrollIntoView({
          behavior: "smooth",
          block: "center"
        });
        found = true;
      }
    } else {
      article.style.display = "none";
    }
  }

  if (!found && searchTerm !== "") {
    alert("Colaborador ou número de patrimônio não encontrado!");
  }
}
//Captura Enter
function checkEnter(event) {
  // Verifica se a tecla pressionada é Enter (código da tecla 13)
  if (event.key === "Enter") {
    searchColaborador(); // Chama a função de busca
  }
}
document.getElementById("searchInput").addEventListener("keypress", function (e) {
  if (e.key === "Enter") {
    searchColaborador();
  }
});

// Função para limpar a pesquisa e mostrar todos os colaboradores novamente
function resetSearch() {
  document.getElementById("searchInput").value = "";
  const articles = document.getElementsByTagName("article");
  for (let article of articles) {
    article.style.display = "";
  }
}

// Adicionando event listeners aos botões de busca e reset
document.getElementById("searchButton").addEventListener("click", searchColaborador);
document.getElementById("resetButton").addEventListener("click", resetSearch);
