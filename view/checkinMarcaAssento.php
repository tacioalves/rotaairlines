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

  <div class="container">
    <h2>Confirmação Checkin</h2><br>
    <h5>Codigo da Reserva: HPRFIF </h5><br>
    <h6 style="font-weight: bold;">Detalhes do Voo</h6><br>
    <br><br><br>
    <div class="row">
      <div class="col-sm-6">
        <h5 style="font-weight: bold;">Marcação de Assento</h5><br>
        <img src="view/src/assentos.png" style="width: 400px; border-radius: 20px;">
        <button class="btn btn-primary btn-custom" style="height: 50px; margin-top: 20px; margin-left: 10%;"
          onclick="window.location.href='checkinMarcaAssento.html'">Selecione seu Assento</button>
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


  <?php include 'view/fooster.php'; ?>
</body>

</html>