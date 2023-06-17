<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rota AirLines</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/styles/style.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php include 'view/navbarDinamico.php'; ?>
  <!-- BANNER PRINCIPAL -->
  <div class="container-fluid" id="container-Inicio">
    <div class="container">
      <div class="row" style="margin-left: 10%;">
        <div class="col-sm-4">
          <h2 style="margin-top:70px;">Voo + Hotel com até 30% off</h2>
          <h5>Aproveite ofertas!</h5>
          <p>Compre Agora Conosco</p>
          <hr class="d-sm-none">
        </div>
        <div class="col-sm-8">
          <img src="view/src/aviaoLogo.jpg" style="width: 100%; border-radius: 20px;">
          <br>
        </div>
      </div>
    </div>
  </div>


  <!-- Pesquisa Voo -->
  <div id="container-meio">
    <div class="container" id="container-pesquisa-voo">
      <div class="row" style="margin-left: 7%;">
        <div class="col-sm-11" style="margin-top: 30px ;">
          <form action="PESQUISAVOO" method="POST" type="submit" name="formDestino" id="formDestino">
            <select class="form-select" id="tipoViagem" name="tipoViagem">
              <option selected value="1">Ida e Volta</option>
              <option value="2">Somente Ida</option>
            </select>
            <select class="form-select" id="tipoClasse" name="tipoClasse">
              <option selected value="1">Economica</option>
            </select>
            <select class="form-select" id="quantidadePassageiros" name="quantidadePassageiros" disabled>
              <option selected value="1">1 passageiro</option>
              <option value="2">2 passageiros</option>
              <option value="3">3 passageiros</option>
              <option value="4">4 passageiros</option>
            </select>
            <div class="row" style="margin-top: 20px;">
              <div class="col">
                <input type="text" class="form-control" id="origemVoo" oninput="pesquisar()"
                  placeholder="Digite a Origem" name="OrigemVoo" required autocomplete="off">
                <ul id="resultado-pesquisa" class="resultado-pesquisa"></ul>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Digite o Destino" oninput="pesquisarDestino()"  name="DestinoVoo" id="DestinoVoo" required autocomplete="off">
                <ul id="resultado-pesquisaDestino" class="resultado-pesquisa"></ul>
              </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col">
                <label for="dataIda" class="form-label">Data Ida</label>
                <input type="date" class="form-control" name="dataIda" required>
              </div>
              <div class="col">
                <label for="dataVolta" class="form-label">Data Volta</label>
                <input type="date" class="form-control" name="dataVolta" id="dataVolta">
              </div>
              <div class="col" style="margin-top: 31px;">
                <button type="submit" class="btn btn-primary active btn-custom">Procurar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Ofertas de voos -->

  <br> <br><br><br><br>


  <!-- Banner adicionais -->

  <div class="container" style="margin-top: 100px;">
    <div class="row" style="margin-bottom: 5vh;">
      <div class="col-md-6">
        <a href="#">
          <div class="card" style="width: 100%;">
            <img class="card-img-top" src="view/src/turistaImag.gif" alt="Card image" style="width:100%">
        </a>
        <div class="card-body">
          <h3 class="card-title">Aproveite ofertas em voos pelo Brasil e o mundo!</h3>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <a href="#">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="view/src/turista2imag.gif" alt="Card image" style="width:100%">
      </a>
      <div class="card-body">
        <h4 class="card-title">Compre Passagens e Ganhe pontos em compras utilizando nosso app</h4>
      </div>
    </div>
  </div>
  </div>
  </div><br><br>

  <?php include 'view/fooster.php'; ?>
</body>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var formDestino = document.getElementById("formDestino");
    var tipoViagem = document.getElementById("tipoViagem");
    var dataVolta = document.getElementById("dataVolta");

    formDestino.addEventListener("submit", function (event) {
      if (tipoViagem.value === "1" && dataVolta.value === "") {
        event.preventDefault(); // Impede o envio do formulário
        alert("Por favor, selecione a data de volta.");
      }
    });
  });

  var listaResultados = document.getElementById("resultado-pesquisa");
  var campoOrigemVoo = document.getElementById("origemVoo");

  campoOrigemVoo.addEventListener("input", function () {
    if (campoOrigemVoo.value.trim() === "") {
      listaResultados.style.display = "none";
    } else {
      pesquisar();
    }
  });

  

  function pesquisar() {
    var texto = campoOrigemVoo.value;

    // Limpa a lista de resultados
    listaResultados.innerHTML = "";

    // Verifica se o campo de pesquisa não está vazio
    if (texto.trim() !== "") {
      // Realiza a lógica de busca de resultados
      var resultados = buscarResultados(texto);

      // Adiciona cada resultado à lista de resultados
      resultados.forEach(function (resultado) {
        var li = document.createElement("li");
        li.textContent = resultado;
        li.addEventListener("click", function () {
          campoOrigemVoo.value = resultado;
          listaResultados.style.display = "none"; // Oculta a lista de resultados
        });
        listaResultados.appendChild(li);
      });

      listaResultados.style.display = "block"; // Exibe a lista de resultados
    } else {
      listaResultados.style.display = "none"; // Oculta a lista de resultados quando o campo estiver vazio
    }
  }

  function buscarResultados(texto) {
    // Implemente a lógica de busca dos resultados aqui

    // Exemplo com uma lista de resultados pré-definida
    var listaResultados = [
      <?php
      for ($cont = 0; $cont < count($voo->getListaDadosVoo()); $cont++) {
        echo '"' . $voo->getListaDadosVoo()[$cont]->getOrigemVoo() . '"' . ',';
      }
      ?>
    ];

    // Filtra os resultados que correspondem ao texto digitado
    var resultadosFiltrados = listaResultados.filter(function (resultado) {
      return resultado.toLowerCase().includes(texto.toLowerCase());
    });

    return resultadosFiltrados;
  }

  //DESTINO


  var listaResultadosDestino = document.getElementById("resultado-pesquisaDestino");
  var campoOrigemVooDestino = document.getElementById("DestinoVoo");

  campoOrigemVooDestino.addEventListener("input", function () {
    if (campoOrigemVooDestino.value.trim() === "") {
      listaResultadosDestino.style.display = "none";
    } else {
      pesquisarDestino();
    }
  });

  function pesquisarDestino() {
    var textoDestino = campoOrigemVooDestino.value;

    // Limpa a lista de resultados
    listaResultadosDestino.innerHTML = "";

    // Verifica se o campo de pesquisa não está vazio
    if (textoDestino.trim() !== "") {
      // Realiza a lógica de busca de resultados
      var resultadosDestino = buscarResultadosDestino(textoDestino);

      // Adiciona cada resultado à lista de resultados
      resultadosDestino.forEach(function (resultadoDestino) {
        var lidest = document.createElement("li");
        lidest.textContent = resultadoDestino;
        lidest.addEventListener("click", function () {
          campoOrigemVooDestino.value = resultadoDestino;
          listaResultadosDestino.style.display = "none"; // Oculta a lista de resultados
        });
        listaResultadosDestino.appendChild(lidest);
      });

      listaResultadosDestino.style.display = "block"; // Exibe a lista de resultados
    } else {
      listaResultadosDestino.style.display = "none"; // Oculta a lista de resultados quando o campo estiver vazio
    }
  }

  function buscarResultadosDestino(texto) {
    // Implemente a lógica de busca dos resultados aqui

    // Exemplo com uma lista de resultados pré-definida
    var listaResultadosDestino = [
      <?php
      for ($cont = 0; $cont < count($voo->getListaDadosVoo()); $cont++) {
        echo '"' . $voo->getListaDadosVoo()[$cont]->getOrigemVoo() . '"' . ',';
      }
      ?>
    ];

    // Filtra os resultados que correspondem ao texto digitado
    var resultadosFiltradosDestino = listaResultadosDestino.filter(function (resultadoDestino) {
      return resultadoDestino.toLowerCase().includes(texto.toLowerCase());
    });

    return resultadosFiltradosDestino;
  }
</script>


</html>