<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
  <?php include("menu.php") ?>
    <div class="container p-4">
      <h3>Cadastrar Cliente</h3>
      <form method="post" action="../controller/ClienteCadastrar.php" id="form" name="form" class="was-validated">
        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" name="nome" placeholder="Nome do Cliente" required autofocus>
          <div class="invalid-feedback">
            Por favor insira o nome.
          </div>
        </div> 
        <div class="form-group">
          <label>Idade</label>
          <input type="number" class="form-control" name="idade" placeholder="Idade do Cliente" required>
          <div class="invalid-feedback">
            Por favor insira a idade.
          </div>
        </div>   
        <div class="form-group center">
          <button type="submit" class="btn">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
  <script src="../assets/js/index.js"></script>
</body>

</html>
