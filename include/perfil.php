<nav>
<?php include 'menu.php'; ?>
</nav>

<?php session_start();?>

<?php 

    include "../conexao.php";

    $consulta = "SELECT nome FROM arquivo WHERE id = '2'";

    $res = mysqli_query($conexao, $consulta);

    $qtdreg = mysqli_num_rows($res);

    if ($qtdreg > 0)
        while ($row = mysqli_fetch_assoc($res))
        
        $imagem =  $row['nome'];
    
?>

<div id="edit">
<div class="line-foto">
<img id="foto" src="../upload/<?php echo $imagem; ?>" alt="Minha Figura">
</div>

<div class="line">
<h3><?php switch ($_SESSION['cargo']) {
  case "1":
    echo "Administrador";
    break;
  case "2":
    echo "usuario";
    break;
  default:
    echo "visitante";
};?></h3>
</div>

<div class="line">
<a><?php echo $_SESSION['nome']; ?></a> 
</div>

<div class="line">
<a href="upload.php">alterar foto</a>
</div>

<div class="line">
<form action="update.php" method="post" >

<div>
    <h3 class="line"></h3>
    <input required type="text" minlength="4" maxlength="25" name="nome" placeholder="nome" rows="1" id="digite"></input>
</div>

<div>
    <h3 class="line"></h3>
    <input required type="text" minlength="4" maxlength="16" name="login" placeholder="login" rows="1" id="digite"></input>
</div>

<div>
    <h3 class="line"></h3>
    <input required type="password" minlength="4" maxlength="9" name="senha" placeholder="senha" rows="1" id="digite"></input>
</div>

<div class="botao">
    <br>
    <input type="submit" value="Alterar">
</div>

</div>
</form>

<?php
if (isset($_GET['editado'])) {
    echo "<p style='text-align: center'>cadastro editado com sucesso!</p>";
    echo "<p style='text-align: center'>deslogue e logue novamente para surtir efeito.</p>";
}

if (isset($_GET['neditado'])) {
    echo "<p style='text-align: center'>Não foi possível editar cadastro</p>";
}
?>

<link href="./css/style.css" rel="stylesheet">