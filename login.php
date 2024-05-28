<!DOCTYPE html>
<html lang="en">


<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .h-100vh {
      min-height: 90vh;
    }
  </style>
</head>


<body class="container-fluid mt-5 bg-secondary text-white">
  <div class="h-100vh d-flex justify-content-center align-items-center ">
    <div class=" card bg-light text-dark" style=" height:500px; width:400px; border-radius:1rem; padding: 2rem ">
      <div class="container mt-2">
        <h1 class="text-center">Login</h1>
        <form action="logar.php" method="POST" class="mt-5" data-parsley-validate>
          <?php
          if (isset($_GET["sucesso"]) && $_GET["sucesso"] == 'ok'):
            ?>
            <p class="text-success text-center">Usuario cadastrado com sucesso</p>
            <?php
          endif;
          ?>
          <?php
          if (isset($_GET["erro"]) && $_GET["erro"] == 'ok'):
            ?>
            <p class="text-danger text-center">usuario ou senha incorreto</p>
            <?php
          endif;
          ?>
          <div class="mb-3 mt-3">
            <label for="email" class="form-label">Usuário:</label>
            <label for="" class="text-danger">*</label>
            <input type="text" class="form-control" id="usuario" placeholder="insira usuario" name="usuario" required>
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Senha:</label>
            <label for="" class="text-danger">*</label>
            <input type="password" class="form-control" id="senha" placeholder="insiria sua senha" name="senha"
              required>
          </div>
          <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-info m-2">Entrar</button>
          </div>
          <div class=" text-center form-check mt-3">
            <p>não tem conta? <a class="text-info" href="cadastro.php">cadastre-se</a></p>
          </div>


        </form>


      </div>
    </div>
  </div>
  <script src="./node_modules/jquery/dist/jquery.js"></script>
  <script src="./node_modules/parsleyjs/dist/parsley.min.js"></script>
  <link rel="stylesheet" href="./node_modules/parsleyjs/src/parsley.css">
  <script src="./node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>


</html>