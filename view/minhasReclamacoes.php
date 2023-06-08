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
                <li><a href="MEUSVOOS" style="color: #026773;">Acessar meus vôos</a></li>
                <li><a href="MINHASRECLAMACOES" style="color: #026773;">Acessar minhas reclamações</a></li>

              </div>
            </div>
          </div>

          <div class="col-sm-8">
            <div class="card">
              <div style="background-color: #026773; text-align: center;" class="card-header text-white">Registrar
                reclamação:</div><br>
              <div style="text-align: center;" class="card-body">
                <form type="submit" method="post" action="INSERERECLAMACAO">
                  <!-- codReserva -->
                  <div class="form-group">
                    <label for="codReserva">Selecione a Reserva:</label>
                    <select class="form-control edicao" id="codReserva" name="codReserva">
                      <?php for ($cont = 0; $cont < count($reclamacao->getListaReclamacao()); $cont++) { ?>
                        <option value="<?php echo $reclamacao->getListaReclamacao()[$cont]->getCodReserva(); ?>"><?php echo $reclamacao->getListaReclamacao()[$cont]->getReservaListada(); ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="registroReclamacao">Descreva a sua reclamação</label>
                    <textarea class="form-control" id="reclamacao" name="descricaoReclamacao" rows="3"></textarea>
                  </div>
              </div>
              <br>
              <div style="text-align: center;">
                <button type="submit" class="btn btn-success active btn-custom">Registrar reclamação</button>
              </div>
              </form>
              <br>
            </div>

            <br>
            <br>

            <div class="card">
              <div style="background-color: #026773; text-align: center;" class="card-header text-white">Consultar
                status da reclamação:</div><br>
              <div style="text-align: center;">
                <table class="table">
                  <thead>
                    <tr>
                      <th>nº do Protocolo</th>
                      <th>Codigo Reserva</th>
                      <th>Status reclacamação</th>
                      <th>Exibir Detalhes</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php for ($cont = 0; $cont < count($reclamacao->getListaReclamacao2()); $cont++) { ?>
                      <tr>
                        <form type="submit" method="post" action="DETALHARECLAMACAO">
                          <td>
                            <?php echo $reclamacao->getListaReclamacao2()[$cont]->getIdReclamacao(); ?>
                          </td>
                          <td>
                            <?php echo $reclamacao->getListaReclamacao2()[$cont]->getCodReserva(); ?>
                          </td>
                          <td>
                            <?php echo $reclamacao->getListaReclamacao2()[$cont]->getStatusReclamacao(); ?>
                          </td>
                          <td><button class="btn btn-primary btn-custom btn-sm" onclick="">Exibir Detalhes</button></td>
                          <td><input name="descReclamacao" type="hidden"
                              value="<?php echo $reclamacao->getListaReclamacao2()[$cont]->getDescricaoReclamacao(); ?>" />
                          </td>
                          <input name="idReclamacao" type="hidden"
                            value="<?php echo $reclamacao->getListaReclamacao2()[$cont]->getIdReclamacao(); ?>" />
                          <input name="codReserva" type="hidden"
                            value="<?php echo $reclamacao->getListaReclamacao2()[$cont]->getCodReserva(); ?>" />

                          <input name="statusReclamacao" type="hidden"
                            value="<?php echo $reclamacao->getListaReclamacao2()[$cont]->getStatusReclamacao(); ?>" />
                        </form>
                      </tr>
                    <?php } ?>

                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <br><br><br>
  </div>

  <?php include 'view/fooster.php'; ?>
</body>

</html>