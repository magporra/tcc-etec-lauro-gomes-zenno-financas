<?php include 'header.php'; ?>

<!-- Formulario -->
<div class="vh-100">
    <p class="text-muted">Preencha as informações abaixo para entrar em contato conosco!</p>

    <form class="mx-auto mt-3" style="max-width: 560px;">
      <div class="mb-3">
        <label class="form-label">Nome:</label>
        <input type="text" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">E-mail:</label>
        <input type="email" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Assunto:</label>
        <input type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Escreva sua mensagem abaixo:</label>
        <textarea class="form-control" rows="5"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar dados</button>
    </form>
  </div>
</section>
</div>

<?php include 'footer.php'; ?>