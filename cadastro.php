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

    #h2 {
      text-align: center;
    }
  </style>
</head>

<body class="container-fluid mt-5 bg-secondary text-white">
  <div class="h-100vh d-flex justify-content-center align-items-center" class="bg-primary p-3">
    <div class="card" style="width:400px; padding: 2rem">
      <div class="container mt-3">
        <h2 id="h2">Cadastro</h2>
        <form action="login.php" method="POST" data-parsley-validate>
          <div class="mb-3 mt-3">
            <label for="email">Usuário:</label>
            <input type="text" class="form-control" id="usuario" placeholder="insira seu usuario" name="usuario"
              required>
          </div>
          <div class="mb-3">
            <label for="pswd">Senha:</label>
            <input type="password" id="senha" class="form-control" id="senha" placeholder="insira sua senha"
              name="senha" required>
          </div>
          <div class="mb-3">
            <label for="pswd">Confirme sua senha:</label>
            <input type="password" id="confirmar_senha" class="form-control" id="senha" placeholder="confirme sua senha"
              name="senha" required>
          </div>
          <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
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
  <script>document.querySelector('form').addEventListener('submit', function (e) {
      var senha = document.getElementById('senha').value;
      var confirmarSenha = document.getElementById('confirmar_senha').value;

      if (senha !== confirmarSenha) {
        e.preventDefault();
        alert('As senhas não coincidem!');
      }
    });</script>
</body>

</html>