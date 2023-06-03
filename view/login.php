
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
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">

          <div style="background-color: #026773;" class="card-header text-white">Login</div>
          <div class="card-body">
            <form type="submit" method="post" action="FAZLOGIN">
              <div class="form-group">
                <label for="email">CPF</label>
                <input type="TEXT" class="form-control" id="cpf" name="cpf">
              </div>
              <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha">
              </div>
              <div style="text-align: center;">
                <button type="submit" class="btn btn-success active btn-custom">Login</button>
              </div>
            </form>
          </div>
          <div class="card-footer">
            <div class="text-center">
              Não tem uma conta? <a href="CADASTROUSUARIO" style="color: #026773;">Cadastre-se</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <footer style="margin-top: 250px;">
    <p>ROTA AIRLINES</p>
    <p>© 2023 ROTA Airlines Brasil Rua Ática nº 673, 6º andar sala 62, CEP 12345-022 Salvador/BA CNPJ:
      07.020.202/0001-50</p>
  </footer>
</body>

</html>