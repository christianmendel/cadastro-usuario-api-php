<h1>Editar Usuario</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
      <input type="hidden" name="acao" value="editar">
      <input type="hidden" name="id" value="<?php print $row->id; ?>">
      <div class="mb-3">
          <label for="">
            Nome
            <input type="text" name="nome" class="form-control" value="
                <?php print $row->nome; ?>">
          </label>
      </div>
      <div class="mb-3">
          <label for="">
            Email
            <input type="text" name="email" class="form-control" value="
                <?php print $row->email; ?>">
          </label>
      </div>
      <div class="mb-3">
          <label for="">
            Senha
            <input type="text" name="senha" class="form-control" required>
          </label>
      </div>
      <div class="mb-3">
          <label for="">
            Nome
            <input type="date" name="data_nasc" class="form-control" value="
                <?php print $row->data_nasc; ?>">
          </label>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
</form>