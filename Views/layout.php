<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>redSafe | Segurança Contra Incêndio</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>




<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70" tabindex="0">

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top shadow">
  <div class="container">
    <a class="navbar-brand" href="#inicio">
      <img src="<?= base_url('assets/img/logo.png') ?>" alt="redSafe" style="height:40px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="#quem-somos">Quem Somos</a></li>
        <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfólio</a></li>
        <li class="nav-item"><a class="nav-link" href="#certificacoes">Certificações</a></li>
        <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Conteúdo -->
<?= $this->renderSection('conteudo') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/js/scripts.js') ?>"></script>

<footer class="bg-dark text-white py-4 mt-5">
  <div class="container text-center">
    <p class="mb-1">&copy; <?= date('Y') ?> redSafe - Todos os direitos reservados.</p>
    <p class="mb-1">Email: contato@loremipsum.com</p>
    <p class="mb-0">Telefone: (99) 99999-9999</p>
  </div>
</footer>

</body>
</html>
