<h1>Novo Usuario</h1>
<form action="?page=salvar" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
      <div class="mb-3">
          <label for="">
            Nome
            <input type="text" name="nome" class="form-control">
          </label>
      </div>
      <div class="mb-3">
          <label for="">
            Email
            <input type="text" name="email" class="form-control">
          </label>
      </div>
      <div class="mb-3">
          <label for="">
            Senha
            <input type="text" name="senha" class="form-control">
          </label>
      </div>
      <div class="mb-3">
          <label for="">
            Nome
            <input type="date" name="data_nasc" class="form-control">
          </label>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
</form>