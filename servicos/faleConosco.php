<?php $page = 'saiba'; include '../include/nossosLinksTop.php'; ?>
<?php $page = 'saiba'; include '../include/header.php'; ?>
<!--A Pagina tem que estar dentro do container-fluid para nõa quebrar-->
<div class="container-fluid container-max mx-auto" id="inicio">
  <h1 class="text-center h1-arte py-3">Fale Conosco</h1>
  <div class="row no-margin mb-5">
    <article class="col-sm-12 col-md-6 col-lg-6 border-right">
      <h2 class="text-center h2-mobile pb-4">Deixe sua mensagem</h2>
      <form class="lead" action="../php/gravarMensagem.php" method="POST">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Nome:</label>
            <input type="text" class="form-control" name="nome" placeholder="Primeiro nome" required>
          </div>
          <div class="form-group col-md-6">
            <label>Sobrenome:</label>
            <input type="text" class="form-control" name="sobrenome" placeholder="Último nome" required>
          </div>
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="email" class="form-control" name="email" placeholder="email@exemplo.com" required>
        </div>
        <div class="form-group">
          <label>Mensagem:</label>
          <textarea class="form-control form-control-sm" name="mensagem" rows="3" placeholder="Escreva seu comentário" required></textarea>
        </div>
        <div class="form-group text-right">
          <input class="btn btn-outline-danger" type="reset" value="Limpar">
          <input class="btn btn-danger" type="submit" value="Enviar">
        </div>
      </form>
    </article>
    <aside class="col-sm-12 col-md-6 col-lg-6">
      <h2 class="text-center h2-mobile pb-4">Mensagens</h2>

      <?php include '../include/mensagens.php' ?>
    </aside>
  </div>
  <section>
    <?php
    include '../include/section.php' ?>
  </section>
</div>
<?php include '../include/footer.php' ?>
<?php include '../include/nossosLinksBotom.php' ?>