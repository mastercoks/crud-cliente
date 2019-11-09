<?php require_once("../controller/ClienteListar.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>

<body>
  <?php include("menu.php"); ?>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Idade</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($result as $value){
            echo "<tr>";
            echo "<th>".$value['id'] ."</th>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['idade'] ."</td>";
            echo "<td><a class='btn editar' href='editar.php?id=".$value['id']."'><i class='fa fa-edit'></i> Editar</a><a class='btn deletar' href='../controller/ClienteDeletar.php?id=".$value['id']."'><i class='fa fa-trash'></i> Excluir</a></td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
    <div class="center">
      <a href="cadastro.php" class="btn"><i class="fa fa-user-plus"></i> Cadastar</a>
    </div>
  </div>
</body>
</html>
