<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rota AirLines</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="View/styles/style.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php include 'view/navbarDinamico.php'; ?>
  <br><br>

  <div class="container">
    <h2>Confirmação Checkin</h2><br>
    <h5>Codigo da Reserva:
      <?php echo $voo->getCodigoReserva() ?>
    </h5><br>
    <h6 style="font-weight: bold;">Detalhes do Voo</h6><br>


    <div class="row" style="border-radius: 20px; background-color: #E3E7FB;">
      <div class="col">
        <h5 style="margin-top: 20px;">Origem</h5>
        <h6>
          <?php echo $voo->getOrigemVoo() ?><br>
          <?php echo $voo->getDataHoraPartida() ?>
        </h6>
        <img src="view/src/aviaoIcone.png" style="width: 60px; float: right; margin-top: -35%; margin-right: 10%;">
      </div>
      <div class="col">
        <h5 style="margin-top: 20px;">Destino</h5>
        <h6>
          <?php echo $voo->getDestinoVoo() ?><br>
          <?php echo $voo->getDataHoraChegada() ?>
        </h6>
        <img src="view/src/aviaoIcone.png" style="width: 60px; float: right; margin-top: -35%; margin-right: 10%;">
      </div>
      <div class="col">
        <h5 style="margin-top: 20px;">Duração</h5><br>
        <h6>
          <?php echo $voo->getDuracao() ?>
        </h6><br>
        <img src="view/src/aviaoIcone.png" style="width: 60px; float: right; margin-top: -35%; margin-right: 10%;">
      </div>
      <div class="col">
        <h5 style="margin-top: 20px;">Voo</h5><br>
        <h6>
          <?php echo $voo->getNumVoo() ?>
        </h6><br>
      </div>
    </div>
  </div><br><br>

  <div class="container" style="border-radius: 20px; height: 70px; background-color:lavender;">
    <br>
    <div class="row">
      <div class="col">
        <?php if ($validaCheckin->getValidaCheckin() == 1) { ?>
          <input type="checkbox" name="marcaCheckin" class="checkCheckin" style="margin-left: 30px;" checked>
        <?php } else { ?>
          <input type="checkbox" name="marcaCheckin" class="checkCheckin" style="margin-left: 30px;">
        <?php } ?>
      </div>
      <div class="col">
        <h5>
          <?php echo $usuario->getNomeUsuario() ?>
        </h5>
      </div>
      <?php if ($validaCheckin->getValidaCheckin() == 1) { ?>
        <div class="col">
          <h6>Checkin Realizado</h6>
        </div>
      <?php } else { ?>
        <div class="col">
          <h6>Checkin Não realizado</h6>
        </div>
      <?php } ?>
    </div>
  </div><br><br>

  <div class="container">
    <h4>Restrições na Bagagem</h4>
    <p>Para garantir uma viagem segura e confortável para todos os passageiros, a ROTA segue as regras da ANAC para
      transporte de bagagens.</p>
    <div class="row">
      <div class="col-auto" style="margin-left: 20px;">
        <?php if ($validaCheckin->getValidaCheckin() == 1) { ?>
          <input type="checkbox" name="marcaCheckin" class="form-check-input" checked>
        <?php } else { ?>
          <input type="checkbox" name="marcaCheckin" class="form-check-input">
        <?php } ?>

      </div>
      <div class="col">
        <label class="form-check-label" style="font-weight: bold;">Declaro que li e concordo com as restrições de
          bagagem</label>
      </div>
    </div>
  </div>

  <br><br>
  <hr>
  <div class="container">
    <h2>Confirmação Checkin</h2><br>
    <br><br>
    <div class="row">
      <div class="col-sm-6">
        <h5 style="font-weight: bold;">Marcação de Assento</h5><br>
        <img src="view/src/assentos.png" style="width: 400px; border-radius: 20px;"><br><br>
        <h5><a>Seu Assento foi escolhido <br>automaticamente:</a>
          <?php echo $validaCheckin->getAssentoReservado() ?>
          <h5>
      </div>
      <div class="col-sm-6">
        <h5 style="font-weight: bold;">Despachar Bagagem</h5><br>
        <img src="view/src/bagagem.png" style="width: 400px; border-radius: 100px;">
        <button class="btn btn-primary btn-custom" style="height: 50px; margin-top: 20px; margin-left: 10%;"
          onclick="alert('Ainda estamos trabalhando para disponibilizar o sistema de bagagens!')">Adquirir
          Bagagem</button>
      </div>
    </div>
  </div>

  <div class="container-fluid d-flex align-items-center justify-content-center" style="margin-top: 100px;">
    <?php if ($validaCheckin->getValidaCheckin() == 0) { ?>
      <button class="btn btn-primary btn-custom" style="height: 80px;" onclick="exibirDiv()" id="meuBotao">Continuar para
        confirmar viagem</button>
    <?php } else { ?>
      <button class="btn btn-primary btn-custom" style="height: 80px;" onclick="exibirDiv()" id="meuBotao">Seu Checkin Foi Concluido, Clique aqui para Exibir Cartão de Embarque</button>
      <?php } ?>

  </div><br><br><Br><br>

  <div id="minhaDiv" style="display: none;">
    <div class="container">
      <h2>Confirmação Checkin</h2><br>
      <h5>Checkin Realizado com Sucesso!</h5><br>
      <h6 style="font-weight: bold;">Cartão de Embarque:</h6><br>
    </div>
    <div class="container cartaoEmbarque">
      <div class="row">
        <div class="col-sm-3">
          <h4>
            <?php echo $usuario->getNomeUsuario() ?>
          </h4>
          <div style="margin-top: 100px;">
            <img src="view/src/qrCode.png" style="width: 200px;">
          </div>
        </div>
        <div class="col-sm-3">
          <h5>Origem</h5>
          <h5 style="font-weight: bold;">
            <?php echo $voo->getOrigemVoo() ?>
          </h5>
          <h5 style="margin-top: 30px;">Data</h5>
          <h5 style="font-weight: bold;">
            <?php echo $voo->getDataHoraPartida() ?>
          </h5>
          <h5 style="margin-top: 30px;">Numero do Voo</h5>
          <h5 style="font-weight: bold;">
            <?php echo $voo->getNumVoo() ?>
          </h5>
          <p style="font-weight: bold;margin-top: 30px;">Parada</p>
          <p>Sem parada</p>
        </div>
        <div class="col-sm-3">
          <img src="view/src/aviaoIcone.png" style="width: 50px; margin-left: 35px;">
          <h5 style="margin-top: 70px;">Embarque</h5>
          <h5 style="font-weight: bold;">21:05</h5>
          <h5 style="margin-top: 30px;">Portão</h5>
          <h5 style="font-weight: bold;">A20</h5>
          <p style="font-weight: bold;margin-top: 30px;">Numero do Bilhete</p>
          <p>12355894885364</p>
        </div>
        <div class="col-sm-3">
          <h5>Destino</h5>
          <h5 style="font-weight: bold;">
            <?php echo $voo->getDestinoVoo() ?><br>
            <?php echo $voo->getDataHoraChegada() ?>
          </h5>
          <h5 style="margin-top: 30px;">Operado Por</h5>
          <h5 style="font-weight: bold;">ROTA AIRLINES</h5>
          <h5 style="margin-top: 30px;">Assento</h5>
          <h5 style="font-weight: bold;">
            <?php echo $validaCheckin->getAssentoReservado() ?>
          </h5>
          <h5 style="margin-top: 30px;">Aeronave</h5>
          <h5 style="font-weight: bold;">
            <?php echo $voo->getModeloAeronave() ?>
          </h5>
        </div>
      </div>
      <form type="submit" method="post" action="FINALIZACHECKIN">
        <input type="hidden" name="cdReserva" id="cdReserva" value=<?php echo $voo->getCodigoReserva() ?>>
        <?php if ($validaCheckin->getValidaCheckin() == 0) { ?>
        <button type="submit" class="btn btn-success active btn-custom">Finalizar Checkin</button>
        <?php } ?>
      </form>
    </div>
  </div>

  <?php include 'view/fooster.php'; ?>
</body>
<script>
  function exibirDiv() {
    var div = document.getElementById("minhaDiv");
    div.style.display = "block";
  }
</script>

</html>