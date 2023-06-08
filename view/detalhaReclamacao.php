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
                <li><a href="DASHBOARD" style="color: #026773;">Minha conta</a></li>
                <li><a href="meusVoos.html" style="color: #026773;">Acessar meus vôos</a></li>
                <li><a href="MINHASRECLAMACOES" style="color: #026773;">Acessar minhas reclamações</a></li>
                <li><a href="logout.html" style="color: #026773;">Sair</a></li>

              </div>
            </div>
          </div>

          <div class="col-sm-8">
            <div class="card">
              <div style="background-color: #026773; text-align: center;" class="card-header text-white">Registrar
                reclamação:</div><br>
              <div style="text-align: center;" class="card-body">
                <form type="submit" method="post" action="DELETARECLAMACAO">
                  <!-- codReserva -->
                  <div class="form-group">
                    <label>Protocolo:
                      <?php echo $reclamacao->getIdReclamacao(); ?>
                    </label><br>
                    <label>Codigo da Reserva:
                      <?php echo $reclamacao->getCodReserva(); ?>
                    </label><br>
                    <label>Status Reclamacao:
                      <?php echo $reclamacao->getStatusReclamacao(); ?>
                    </label><br>
                    <input type="hidden" value="<?php echo $reclamacao->getIdReclamacao(); ?>" name="idReclamacao"/>
                  </div>
                  <div class="form-group">
                    <label for="registroReclamacao">Descricao Reclamacao</label>
                    <textarea class="form-control" id="reclamacao" name="descricaoReclamacao" rows="10"
                      readonly> <?php echo $reclamacao->getDescricaoReclamacao(); ?></textarea>
                  </div>
              </div>
              <br>
              <div style="text-align: center;">
                <button type="submit" class="btn btn-success active btn-custom">Cancelar reclamação</button><br>
              </div>
              </form>
              <br>
              <div style="text-align: center;">
                <form type="submit" method="post" action="MINHASRECLAMACOES">
                  <button type="submit" class="btn btn-success active btn-custom">Voltar</button><br><br>
                </form>
              </div>
            </div>
            <br>
            <br>
          </div>

        </div>
      </div>
    </div>
  </div>
  <?php include 'view/fooster.php'; ?>
</body>

</html>