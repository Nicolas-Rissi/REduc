<?php
  if(!isset($_SESSION)) session_start();

  
?>

<!doctype html>
<html lang="pt-br">

<head>
  <title>REduc - Início</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script defer src="assets/js/func.js"></script>
  <script defer src="assets/js/card.js"></script>
  <script defer type="module" src="assets/js/componentes.js"></script>
</head>

<body>
  <header id='reduc-header'></header>
  <main>
    <!-- Seção de pesquisa -->
    <section id='pesquisa'>

      <form action="#" method="post" class="container d-flex">
        <input type="text" placeholder="Digite o que procura..." class="form-control">
        <button type="submit" class="btn btn-search"><i class="bi bi-search"></i></button>
      </form>

    </section>
    <!-- Destaques -->
    <section id='destaques' class='container bg-light rounded shadow mb-5 p-5 d-flex flex-column'>      
      <h2 class='txt-roxo mb-4'>Destaque?<?php echo $_SESSION['username']; ?></h2>
      <div class='row g-2 card-container'>

        <div class="col-md-3">
          <!-- Começo do card -->

          <div class="p-1">

            <a href='#' class="card link-reset shadow">
              <img class="card-img-top" src="img/img-padrao.jpg" alt="Title">
              <div class="card-body">
                <h4 class="card-title">Titulo do recurso</h4>
                <span class="card-star">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                <button class='btn p-0 card-flag'>&#9873;</button>
              </div>
            </a>

          </div>

        </div> <!-- Fim do card -->

      </div>
      <a href='explorar.html' class='btn btn-primary mt-4 align-self-center shadow'>Ir para explorar &#10095;</a>
    </section>

    <!-- Sobre a REduc -->
    <section id='sobre' class='container bg-light p-5 rounded shadow d-flex justify-content-between my-5'>
      <div class='row'>
        <article class='col-lg-6'>
          <h2 class='txt-roxo'>Sobre a REduc</h2>
          <p class='mt-5'>
            A REduc é uma platadorma WEB inovadora que oferece um repositório de recursos educacionais digitais e
            práticas avaliativas eficazes no processo de ensino-aprendizagem com abordagem voltada às metodologias
            ativas. Por meio de acesso gratuito, a REduc permite a elaboração e compartilhamento de conteúdos de alta
            qualidade entre educadores e alunos. Além disso, todos os conteúdos são validados pela platadorma antes de
            estarem disponíveis para acesso, garantindo a confiabilidade das informações.
          <p>
            E o melhor de tudo: para busca ou consulta de conteúdos, não é necessário cadastro na plataforma. No entanto
            para baixar(fazer download) ou imprimir, o usuário precisará se cadastrar e acessar com nome de usuário de
            senha.
          </p>
          <p>
            A REduc permite a busca por conteúdos de acordo com categorias, tais como: área do conhecimento,
            discipolina, curso, tipo do recurso (vídeo, pdf, etc), palavras-chave (do título), tipo de avaliação
            (rúbrica, auto-avaliação, etc).
          </p>
          <p>
            Junte-se à comunidade REduc e tenha acesso a uma ampla variedade de recursos educacionais de qualidade em um
            só lugar. Cadastre-se agora e comece a explorar!
          </p>
        </article>
        <figure class='col-lg-6 d-flex justify-content-center align-items-center'>
          <img src="img/sobre.svg" alt="Sobre" class='w-100'>
        </figure>
      </div>
    </section>

  </main>

  <footer id="reduc-footer"></footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>