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
              <div style="background-color: #026773; text-align: center;" class="card-header text-white">Informações da
                conta:</div><br>
              <div class="card-body">
                <label for="text">
                  <h4>Informações da conta:</h4>
                </label></br>

                <form type="submit" method="post" action="ALTERADADOS">
                  <strong>Nome:</strong>
                  <label class="exibicao" for="text">
                    <?php echo $usuario->getNomeUsuario() ?>
                  </label></br>
                  <input type="text" name="nomeUsuario" class="form-control edicao" id="nome"
                    value="<?php echo $usuario->getNomeUsuario() ?>">

                  <strong>E-mail:</strong>
                  <label class="exibicao" for="text">
                    <?php echo $usuario->getEmail() ?>
                  </label></br>
                  <input type="email" name="email" class="form-control edicao" id="email"
                    placeholder="Digite seu endereço de e-mail" value="<?php echo $usuario->getEmail() ?>">

                  <strong>Telefone:</strong>
                  <label class="exibicao" for="text">
                    <?php echo $usuario->getNumTel() ?>
                  </label></br>
                  <input type="tel" class="form-control edicao" id="numeroCelular" name="numeroCelular"
                    placeholder="Digite o número do celular" value="<?php echo $usuario->getNumTel() ?>">


                  <strong>Data Nascimento:</strong>
                  <label class="exibicao" for="text">
                    <?php echo $usuario->getDtaNasc() ?>
                  </label></br>
                  <input type="date" class="form-control edicao" id="dataNasc" name="dataNasc"
                    value="<?php echo $usuario->getDtaNasc() ?>">


                  <strong>Pais Nascimento:</strong>
                  <label class="exibicao" for="text">
                    <?php echo $usuario->getPaisNasc() ?>
                  </label></br>
                  <select class="form-control edicao" id="selectPais" name="paisUsuario"
                    value="<?php echo $usuario->getPaisNasc() ?>">
                    <option value="Brasil">Brasil</option>
                    <option value="Argentina">Argentina</option>
                    <option value="EUA">EUA</option>
                    <option value="Japão">Japão</option>
                    <option value="Outros">Outros</option>
                  </select>


                  <strong>CPF:</strong>
                  <label class="exibicao" for="text">
                    <?php echo $usuario->getCpf() ?>
                  </label></br>
                  <input type="text" name="cpf" class="form-control edicao" id="inputCPF" placeholder="Digite o CPF"
                    maxlength="11" pattern="\d{11}" value="<?php echo $usuario->getCpf() ?>">


                  <strong>Sexo:</strong>
                  <label class="exibicao" for="text">
                    <?php echo $usuario->getSexo() ?>
                  </label></br>
                  <select class="form-control edicao" id="sexo" name="sexo" value="<?php echo $usuario->getSexo() ?>">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outros</option>
                  </select>
                  <br>

                  <div class="edicao">
                    <strong>Senha:</strong>
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha" value="<?php echo $usuario->getSenha() ?>">
                    </select>
                    <br>
                  </div>



                  <div style="text-align: center;" class="edicao">
                    <button class="btn btn-primary btn-custom" onclick="exibirItens()">Concluir Ediçao</button><br><br>
                  </div>
                </form>

                <div style="text-align: center;" class="exibicao">
                  <button class="btn btn-primary btn-custom" onclick="alternarModoEdicao()">Editar
                    Dados</button><br><br>
                </div>

                <div style="text-align: center;" class="edicao">
                  <button class="btn btn-primary btn-custom" onclick="exibirItens()">Cancelar</button><br><br>
                </div>

              </div>

            </div>
            <br>
            <br>

          </div>
        </div>

      </div>
    </div>
  </div>

  </div>

  <?php include 'view/fooster.php'; ?>

</body>
<script>
  // Função para exibir os itens da classe "exibicao" e ocultar os itens da classe "edicao"
  function exibirItens() {
    var exibicaoItens = document.getElementsByClassName("exibicao");
    var edicaoItens = document.getElementsByClassName("edicao");

    for (var i = 0; i < exibicaoItens.length; i++) {
      exibicaoItens[i].style.display = "block";
    }

    for (var j = 0; j < edicaoItens.length; j++) {
      edicaoItens[j].style.display = "none";
    }
  }

  // Função para alternar entre exibição e edição ao clicar em "Editar dados"
  function alternarModoEdicao() {
    var exibicaoItens = document.getElementsByClassName("exibicao");
    var edicaoItens = document.getElementsByClassName("edicao");

    for (var i = 0; i < exibicaoItens.length; i++) {
      exibicaoItens[i].style.display = "none";
    }

    for (var j = 0; j < edicaoItens.length; j++) {
      edicaoItens[j].style.display = "block";
    }
  }

  // Chamada da função para exibir os itens na inicialização
  exibirItens();
</script>


</html>