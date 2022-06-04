<h1>Editar Cadastro</h1>
<form method="post">
  <div>
    <label for="nome">Nome</label>
    <input value="<?php echo $dados[0]; ?>" name="nome" id="nome" class="form-control mb-3" type="text" required>
  </div>
  <div>
    <label for="email">E-mail</label>
    <input value="<?php echo $dados[1]; ?>" name="email" id="email" class="form-control mb-3" type="email" required>
  </div>
  <div>
    <label for="telefone">Telefone</label>
    <input value="<?php echo $dados[2]; ?>" name="telefone" id="telefone" class="form-control mb-3" type="text" required>
  </div>
  <button class="btn btn-secondary">Salvar</button>
</form>
<?php
