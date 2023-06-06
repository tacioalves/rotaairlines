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
  <br><br>

  <div class="container-fluid" id="container-account">
    <div class="container">
      <div style="background-color: #026773; text-align: center;" class="card-header text-white">Minha conta</div>
      <br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <div style="background-color: #026773;" class="card-header text-white">Painel de acesso:</div>
              <div class="card-body">
                <li><a href="account.html" style="color: #026773;">Minha conta</a></li>
                <li><a href="meusVoos.html" style="color: #026773;">Acessar meus vôos</a></li>
                <li><a href="minhasReclamacoes.html" style="color: #026773;">Acessar minhas reclamações</a></li>
                <li><a href="logout.html" style="color: #026773;">Sair</a></li>

              </div>
            </div>
          </div>

          <div class="col-sm-8">
            <div class="card">
              <div style="background-color: #026773; text-align: center;" class="card-header text-white">Informações da
                conta:</div><br>
              <div class="card-body">
                <label for="text"><strong>Informações da conta:</strong></label></br>
                <label for="text">Nome: Tacio Alves</label></br>
                <label for="text">E-mail: tacio@gmail.com</label></br>
                <label for="text">Telefone: 719999999</label></br>
                <div style="text-align: center;">
                  <a href="dados.html" style="color: #026773;">Editar dados</a>
                  <a href="changePassword.html" style="color: #026773;">Editar senha</a>
                </div>
              </div>

            </div>
            <br>
            <br>

          </div>
        </div>

      </div>
    </div>
  </div>

  </div>

  <br><br><br><br>
  <<br>
    <br><br><br><br>
    <<br>
      <footer>
        <p>ROTA AIRLINES</p>
        <p>© 2023 ROTA Airlines Brasil Rua Ática nº 673, 6º andar sala 62, CEP 12345-022 Salvador/BA CNPJ:
          07.020.202/0001-50</p>
      </footer>
</body>

</html>