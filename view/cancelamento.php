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
              <div style="background-color: #026773; text-align: center;" class="card-header text-white">Dados da
                reserva que deseja cancelar:</div><br>
              <div style="text-align: center;">
                <table class="table">
                  <thead>
                    <tr>
                      <th>nº do Vôo</th>
                      <th>Origem</th>
                      <th>Destino</th>
                      <th>Codigo Reserva</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <?php echo $reserva->getListaVooUsuario()[0]->getNumVoo(); ?>
                      </td>
                      <td>
                        <?php echo $reserva->getListaVooUsuario()[0]->getOrigemVoo(); ?>
                      </td>
                      <td>
                        <?php echo $reserva->getListaVooUsuario()[0]->getDestinoVoo(); ?>
                      </td>
                      <td>
                        <?php echo $reserva->getListaVooUsuario()[0]->getCodigoReserva(); ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br><br>
    <div class="container">
      <div>
        <div class="card">
          <div style="background-color: #026773; text-align: center;" class="card-header text-white">Informações
            Importantes:</div><br>
          <div class="col-sm-12">
            <p>Por favor, esteja ciente de que, ao cancelar o voo, você receberá um reembolso de 80% do valor total da
              passagem. Os 20% restantes serão retidos como taxa de cancelamento.

              Se você concorda com essas condições e deseja prosseguir com o cancelamento, por favor, confirme sua
              solicitação.</p>
          </div>
          <div class="col-sm-12">
            <p>Valor pago na passagem foi: R$
              <?php
              $resultado = $reserva->getListaVooUsuario()[0]->getValorVoo();
              echo number_format($resultado, 2);
              ?>
            </p>
            <p>Valor a ser estornado será: R$
              <?php

              echo number_format($resultado * 0.8, 2);
              ?>
            </p>
          </div>
          <div class="col-sm-12" style="align-items: center; text-align:center">
            <form type="submit" method="post" action="PASSAGEMCANCELADA">
              <input type="hidden" name="idReserva"
                value="<?php echo $reserva->getListaReservaUsuario()[0]->getIdReserva(); ?>" />
              <button class="btn btn-primary btn-custom" onclick="">Cancelar Passagem</button>
            </form><br>
          </div>
        </div>
      </div>
    </div>

  </div>
  </br></br></br></br></br>
  <?php include 'view/fooster.php'; ?>
</body>

</html>