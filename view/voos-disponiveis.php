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
              <p style="font-weight: bold"><?php echo $voo->getListaVoosIda()[$cont]->getDataHoraPartida(); ?></p>
          </div>
          <div class="col" style="text-align: center;">
            <br><br>
            <input type="radio" id="ida<?php echo $cont; ?>" name="voo_ida" value="<?php echo $voo->getListaVoosIda()[$cont]->getIdVoo(); ?>"> Selecionar</input>
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
              <p style="font-weight: bold"><?php echo $voo->getListaVoosVolta()[$cont]->getDataHoraPartida(); ?></p>
          </div>
          <div class="col" style="text-align: center;">
            <br><br>
            <input type="radio" id="volta<?php echo $cont; ?>" name="voo_volta" value="<?php echo $voo->getListaVoosVolta()[$cont]->getIdVoo(); ?>"> Selecionar</input>
          </div>
        </div>
      </div>
    </div>
    <br>
    <?php } ?>
    <div class="text-center">
    <form type="submit" method="post" action="RESUMOCOMPRA">
      <input type="hidden" name="vooIdaSelecionado" value="">
      <input type="hidden" name="vooVoltaSelecionado" value="">
      <button type="submit" class="btn btn-primary btn-custom">Comprar</a>
    </form>
    </div>
    </div>


  <script>
  // Adicionar evento de clique aos botões de rádio
  var radios_volta = document.getElementsByName('voo_volta');
  for (var i = 0; i < radios_volta.length; i++) {
    radios_volta[i].addEventListener('click', function() {
      var idVooVolta = this.value; // obter o ID do voo selecionado
      console.log(idVooVolta); // fazer algo com o ID do voo selecionado
      var inputElement = document.querySelector('input[name="vooVoltaSelecionado"]'); // Seleciona o elemento input pelo nome do atributo
      inputElement.value = idVooVolta; // Define o valor do input igual à variável JavaScript
    });

  }

  var radios_ida = document.getElementsByName('voo_ida');
  for (var i = 0; i < radios_ida.length; i++) {
    radios_ida[i].addEventListener('click', function() {
      var idVooIda = this.value; // obter o ID do voo selecionado
      console.log(idVooIda); // fazer algo com o ID do voo selecionado
      var inputElement2 = document.querySelector('input[name="vooIdaSelecionado"]'); // Seleciona o elemento input pelo nome do atributo
      inputElement2.value = idVooIda; // Define o valor do input igual à variável JavaScript
    });
  }
</script>

  <br><br><br>
  <footer style="margin-top: 200px;">
    <p>ROTA AIRLINES</p>
    <p>© 2023 ROTA Airlines Brasil Rua Ática nº 673, 6º andar sala 62, CEP 12345-022 Salvador/BA CNPJ:
      07.020.202/0001-50</p>
  </footer>
</body>

</html>