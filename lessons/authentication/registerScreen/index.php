<?php
require_once("cabecalho.html");
?>
<h1 class="text-center login-title">CADASTRAR NOVO USUÁRIO</h1>
<form class="form-signin" action="cad_usuario.php" method="post">
    <div class="form-group">
      <label for="usuario">Usuário:</label>
      <input type="text" class="form-control" id="usuario" name="usuario" required>
    </div>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="senha" name="senha" required>
    </div>
    <button type="submit" class="btn btn-primary active">Cadastrar</button>
	<button type="reset" class="btn btn-danger">Limpar</button>
</form>

<?php
require_once("rodape.html");
?>