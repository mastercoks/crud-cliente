<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
  <?php include("menu.php") ?>
  <?php require_once("../controller/ClienteEditar.php");?>
  <div class="container">
    <h3>Cadastrar Cliente</h3>
    <form method="post" action="../controller/ClienteEditar.php" id="form" name="form" class="was-validated">
      <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Nome do Cliente" value="<?php echo $editar->getNome(); ?>" required autofocus>
        <div class="invalid-feedback">
          Por favor insira o nome.
        </div>
      </div> 
      <div class="form-group">
        <label>Idade</label>
        <input type="number" class="form-control" name="idade" placeholder="Idade do Cliente" value="<?php echo $editar->getIdade(); ?>" required>
        <div class="invalid-feedback">
          Por favor insira a idade.
        </div>
      </div>   
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $editar->getId();?>">
        <button type="submit" class="btn btn-primary" name="submit" >Cadastrar</button>
      </div>
    </form>
  </div>
  <script src="../assets/js/index.js"></script>
</body>

</html>