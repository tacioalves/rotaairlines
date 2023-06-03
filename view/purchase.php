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

  <div style="background-color: #026773; text-align: center;" class="card-header text-white">Resumo do pedido e
    pagamento</div>
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4" style="text-align: center;">
        <div class="card">
          <div style="background-color: #026773;" class="card-header text-white">Pagamento:</div>
          <div class="card-body">
            <p style="font-size: 4;">Selecione a bandeira do seu cartão de crédito:</p>
            <div>
              <form style>
                <label class="radio-inline">
                  <input type="radio" name="card" value="visa" id="visa"><img src="view/src/visa_logo.png" width="30"
                    height="12">
                </label>
                <label class="radio-inline">
                  <input type="radio" name="card" value="master" id="master"><img src="view/src/master_logo.png"
                    width="30" height="15">
                </label>
                <label class="radio-inline">
                  <input type="radio" name="card" value="elo" id="elo"><img src="view/src/elo_logo.png" width="30"
                    height="15">
                </label>
                <label class="radio-inline">
                  <input type="radio" name="card" value="amex" id="amex"><img src="view/src/amex_logo.png" width="30"
                    height="15">
                </label>
                <label class="radio-inline">
                  <input type="radio" name="card" value="hiper" id="hiper"><img src="view/src/hiper_logo.png" width="30"
                    height="15">
                </label>
              </form>
            </div>
            <form>
              <div class="form-group">
                <label for="text">Número do cartão:</label>
                <input type="text" class="form-control" max id="numCartao" maxlength="16"
                  style="width:200px; margin-left: 100px;" placeholder="Digite apenas números">
              </div>
              <div class="form-group">
                <label for="text">Nome do titular:</label>
                <input type="text" class="form-control" id="nomeTitular" style="width:375px; margin-left: 20px;"
                  placeholder="Digite o nome conforme o cartão">
              </div>
              <div class="form-group">
                <label for="text">CPF:</label>
                <input type="text" class="form-control" max id="cpf" maxlength="11"
                  style="width:375px; margin-left: 20px;" style="text-align: center;"
                  placeholder="Digite apenas números">
              </div>
              <div class="form-group">
                <label for="text">Código de Segurança:</label>
                <input type="text" class="form-control" max id="cvv" maxlength="3"
                  style="width:70px; margin-left: 175px;" style="text-align: center;" placeholder="CVV">
              </div>
              <div class="form-group">
                <label for="text">Endereço da fatura:</label>
                <input type="text" class="form-control" max id="endereçoFatura" style="width:375px; margin-left: 20px;"
                  style="text-align: center;" placeholder="Digite o endereço completo">
              </div>
              <div class="form-group">
                <label for="text">CEP:</label>
                <input type="text" class="form-control" max id="cep" maxlength="8"
                  style="width:200px; margin-left: 100px;" style="text-align: center;" placeholder="Apenas números">
              </div>
              <p>Número de parcelas:</p>
              <?php 
                $resumo = $voo->getListaDadosVoo()[0]->getValorVoo();
                if($voo->getListaDadosVoo()[1]){
                  $resumo += $voo->getListaDadosVoo()[1]->getValorVoo();
                }
               ?>
              <select>
                <option value="1x">1x de R$: <?php echo $resumo; ?></option>
                <option value="2x">2x de R$: <?php echo $resumo/2;?></option>
                <option value="3x">3x de R$: <?php echo $resumo/3;?></option>
              </select>
          </div>

        </div>
      </div>
      </form>

      <div class="col-sm-4">
        <div class="card">
          <div style="background-color: #026773; text-align: center;" class="card-header text-white">Resumo do seu
            pedido:</div><br>
          <hr />
          <div style="text-align: center;">
            <label for="text"><strong>Dados do pedido:</strong></label><br>
            <img src="view/src/aviaoIcone.png" width="50" height="50">
            <label for="text"> Número do pedido: </label>
            <label for="text" id="labelPedido"></label><br>

            <?php for ($cont = 0; $cont < count($voo->getListaDadosVoo()); $cont++) { ?>
              <strong for="text">Origem:
                <?php echo $voo->getListaDadosVoo()[$cont]->getOrigemVoo(); ?>
              </strong><br>
              <label for="text">Data/Hora Partida:
                <?php echo $voo->getListaDadosVoo()[$cont]->getDataHoraPartida(); ?>
              </label>
              <br>
              <strong for="text">Destino:
                <?php echo $voo->getListaDadosVoo()[$cont]->getDestinoVoo(); ?>
              </strong> <br>
              <label for="text">Data/Hora Chegada:
                <?php echo $voo->getListaDadosVoo()[$cont]->getDataHoraChegada(); ?>
              </label><br>
              <label for="text">Classe:
                <?php echo $voo->getListaDadosVoo()[$cont]->getClasseVoo(); ?>
              </label><br>
              <label for="text">Valor: R$
                <?php echo $voo->getListaDadosVoo()[$cont]->getValorVoo(); ?>
              </label><br>
              <label for="text">Código da reserva: <strong>
                  <?php echo $voo->getListaDadosVoo()[$cont]->getCodigoReserva(); ?>
                </strong></label><br>
              <label for="text">Numero Voo: <strong>
                  <?php echo $voo->getListaDadosVoo()[$cont]->getNumVoo(); ?>
                </strong>
              </label><br>
              <!--<label for="text">Início do embarque: <strong>18:50</strong></label><br>
              <label for="text">Fim do embarque: <strong>19:25</strong></label><br><br> -->
              <hr />
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div style="background-color: #026773; text-align: center;" class="card-header text-white">Informações
            importantes:</div><br>
          <div style="text-align: center;">
            <img src="view/src/aviaoIcone.png" width="50" height="50"><label for="text">Nosso checkin pode ser feito
              através
              do nosso site 48h antes do vôo</label><br>
            <img src="view/src/bag.jpg" width="50" height="50"><label for="text">Bagagem incluída em sua
              tarifa:</label><br>
            <label for="text">- 1 Bolsa ou mochila pequena embaixo do assento da frente</label><br>
            <label for="text">- 1 Bagagem de mão de até 10KG</label><br>
            <label for="text">Caso precise de bagagem adicional, deverá ser pago a taxa de despacho no
              aeroporto</label><br>
            48h antes do vôo <a href="#" data-toggle="modal" data-target="#myModal" style="color: #026773;">Faça o
              checkin aqui</a>
          </div>


        </div>
        <br><br>
        <br>
        <div style="text-align: center;">
          <div class="col">
            <label class="form-check-label">Declaro que li e concordo com as restrições de bagagem</label>
          </div>
          <div class="col">
            <label class="form-check-label">Declaro que todas as informações são verdadeiras</label>
          </div>
          <label for="text">Pagamento seguro</label><br>
          <form type="submit" method="post" action="FINALIZACOMPRA">
            <input type="hidden" name="codReservaIda" value=" <?php echo $voo->getListaDadosVoo()[0]->getCodigoReserva(); ?>">
            <input type="hidden" name="idVooIda" value="<?php echo $voo->getListaDadosVoo()[0]->getIdVoo(); ?>">
            <input type="hidden" name="codReservaVolta" value=" <?php echo $voo->getListaDadosVoo()[1]->getCodigoReserva(); ?>">
            <input type="hidden" name="idVooVolta" value="<?php echo $voo->getListaDadosVoo()[1]->getIdVoo(); ?>">
            <input type="hidden" name="idUsuario" value=" <?php echo $_SESSION['usuario']['idUsuario']; ?>">
            <button type="submit" class="btn btn-primary btn-custom">Finalizar Pedido</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
  <script>
    function gerarValorAleatorio() {
      var valor = '';
      for (var i = 0; i < 10; i++) {
        valor += Math.floor(Math.random() * 10);
      }
      return valor;
    }

    // Obter a referência da etiqueta HTML (label)
    var labelElement = document.getElementById('labelPedido');
    var valorAleatorio = gerarValorAleatorio();
    labelElement.innerText = valorAleatorio;

  </script>

  <footer>
    <p>ROTA AIRLINES</p>
    <p>© 2023 ROTA Airlines Brasil Rua Ática nº 673, 6º andar sala 62, CEP 12345-022 Salvador/BA CNPJ:
      07.020.202/0001-50</p>
  </footer>
</body>

</html>