
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

          <div style="background-color: #026773; border-top-right-radius: 20px; border-top-left-radius: 20px;" class="card-header text-white">Login</div>
          <div class="card-body">
            <form type="submit" method="post" action="FAZLOGIN">
              <div class="form-group">
                <label for="email">CPF</label>
                <input type="TEXT" class="form-control" id="cpf" name="cpf" required>
              </div>
              <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
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

</br>
<?php include 'view/fooster.php'; ?>

</body>
</html>