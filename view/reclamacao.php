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

  <form type="submit" method="post" action="CADASTRA">
        <div class="form-group">

          <!-- PAIS -->
          <label for="selectPais">Selecione a reserva referente a sua Reclamação:</label>
          <select class="form-control" id="selectPais" name="paisUsuario">
            <option value="Brasil">Brasil</option>
            <option value="Argentina">Argentina</option>
            <option value="EUA">EUA</option>
            <option value="Japão">Japão</option>
            <option value="Outros">Outros</option>
          </select>
        </div>
</form>




</body>
</html>