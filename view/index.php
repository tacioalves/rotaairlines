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
            <select class="form-select" id="tipoViagem" name="tipoViagem" disabled>
              <option selected value="1">Ida e Volta</option>
              <option value="2">Somente Ida</option>
              <option value="3">Somente Volta</option>
            </select>
            <select class="form-select" id="tipoClasse" name="tipoClasse" disabled>
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
                <input type="text" class="form-control" id="email" placeholder="Digite a Origem" name="OrigemVoo">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Digite o Destino" name="DestinoVoo">
              </div>
            </div>
            <div class="row" style="margin-top: 20px;">
              <div class="col">
                <label for="dataIda" class="form-label">Data Ida</label>
                <input type="date" class="form-control" name="dataIda">
              </div>
              <div class="col">
                <label for="dataVolta" class="form-label">Data Volta</label>
                <input type="date" class="form-control" name="dataVolta">
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

  <div class="container" style="margin-top: 200px;">
    <h2>Ofertas de voo partindo de Salvador, Bahia</h2>
    <div class="row" style="margin-bottom: 5vh;">
      <div class="col-md-4">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="view/src/brasilia.jpeg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">Brasilia</h4>
            <p class="card-text">Preço final a partir de: </p>
            <p class="card-text card-text-price">BRL 546,76</p>
            <a href="purchase.html" class="btn btn-primary btn-custom">Comprar!</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="view/src/sp.jpg" alt="Card image" style="width:100%">
          <div class="card-body">
            <h4 class="card-title">São Paulo</h4>
            <p class="card-text">Preço final a partir de: </p>
            <p class="card-text card-text-price">BRL 336,36</p>
            <a href="purchase.html" class="btn btn-primary btn-custom">Comprar!</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="view/src/rioPhoto.jpg" alt="Card image" style="width:100%;">
          <div class="card-body">
            <h4 class="card-title">Rio de Janeiro</h4>
            <p class="card-text">Preço final a partir de: </p>
            <p class="card-text card-text-price">BRL 736,26</p>
            <a href="purchase.html" class="btn btn-primary btn-custom">Comprar!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Banner adicionais -->

  <div class="container" style="margin-top: 100px;">
    <div class="row" style="margin-bottom: 5vh;">
      <div class="col-md-6">
        <a href="ofertasVoos.html">
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
  <footer>
    <p>ROTA AIRLINES</p>
    <p>© 2023 ROTA Airlines Brasil Rua Ática nº 673, 6º andar sala 62, CEP 12345-022 Salvador/BA CNPJ:
      07.020.202/0001-50</p>
  </footer>
</body>

</html>