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


  <div class="container">
    <br>
    <h2>Vôos de ida disponíveis para data selecionada:</h2>
    <br>

    <?php for ($cont=0;$cont<count($voo->getListaVoosIda());$cont++)
      { ?>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <p style="font-weight: bold"><?php echo $voo->getListaVoosIda()[$cont]->getOrigemVoo(); ?> - <?php echo $voo->getListaVoosIda()[$cont]->getDestinoVoo(); ?></p>
            <p>Vôo <?php echo $voo->getListaVoosIda()[$cont]->getClasseVoo(); ?> </p>
            <p style="font-weight: bold">Valor: R$ <?php echo $voo->getListaVoosIda()[$cont]->getValorVoo(); ?></p>
          </div>
          <div class="col">
            <h5 stylAF e="margin-top: 0; margin-bottom: 0.5em;">Data/Hora</h5>
              <p style="font-weight: bold"><?php echo $voo->getListaVoosIda()[$cont]->getDataHora(); ?></p>
          </div>
          <div class="col" style="text-align: center;">
            <br><br>
            <input type="radio" id="ida_1" name="voo_ida" value="ida_1"> Selecionar</input>
            <input type="hidden" name="idVooIda" value="<?php echo $voo->getListaVoosIda()[$cont]->getIdVoo(); ?>">
          </div>
        </div>
      </div>
    </div>
    <br>
    <?php } ?>
  </div>


  <div class="container">
    <br>
    <h2>Vôos de volta disponíveis para data selecionada:</h2>
    <br>
    <?php for ($cont=0;$cont<count($voo->getListaVoosIda());$cont++)
      { ?>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <p style="font-weight: bold"><?php echo $voo->getListaVoosVolta()[$cont]->getOrigemVoo(); ?> - <?php echo $voo->getListaVoosVolta()[$cont]->getDestinoVoo(); ?></p>
            <p>Vôo <?php echo $voo->getListaVoosVolta()[$cont]->getClasseVoo(); ?> </p>
            <p style="font-weight: bold">Valor: R$ <?php echo $voo->getListaVoosVolta()[$cont]->getValorVoo(); ?></p>
          </div>
          <div class="col">
            <h5 stylAF e="margin-top: 0; margin-bottom: 0.5em;">Data/Hora</h5>
              <p style="font-weight: bold"><?php echo $voo->getListaVoosVolta()[$cont]->getDataHora(); ?></p>
          </div>
          <div class="col" style="text-align: center;">
            <br><br>
            <input type="radio" id="volta" name="voo_volta" value="volta"> Selecionar</input>
            <input type="hidden" name="idVooVolta" value="<?php echo $voo->getListaVoosVolta()[$cont]->getIdVoo(); ?>">
          </div>
        </div>
      </div>
    </div>
    <br>
    <?php } ?>
    <div class="text-center">
    <a class="btn btn-primary btn-custom"  href="COMPRA">Comprar</a>
    </div>
    </div>
  

  <br><br><br>
  <footer style="margin-top: 200px;">
    <p>ROTA AIRLINES</p>
    <p>© 2023 ROTA Airlines Brasil Rua Ática nº 673, 6º andar sala 62, CEP 12345-022 Salvador/BA CNPJ:
      07.020.202/0001-50</p>
  </footer>
</body>

</html>