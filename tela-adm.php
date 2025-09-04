<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ZENNO - Introdução</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="zenno-bg">

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="logo d-flex align-items-center">
      <img src="placeholder.png" alt="Logo ZENNO" class="logo-img">
      <h3 class="ms-2">ZENNO</h3>
    </div>
    <nav class="menu mt-4">
      <ul class="list-unstyled">
        <li><a href="cadastro.html">Cadastro</a></li>
        <li><a href="contas.html">Contas</a></li>
        <li><a href="acessos.html">Acessos</a></li>
        <li><a href="faq.html">FAQ</a></li>
      </ul>
    </nav>
  </div>

  <!-- Conteúdo principal -->
  <div class="main-content">
    <!-- Topbar -->
    <div class="topbar d-flex justify-content-between align-items-center">
      <h4>Introdução</h4>
      <div class="d-flex align-items-center gap-3">
        <input type="text" class="form-control search-box" placeholder="Pesquisar...">
        <img src="placeholder.png" alt="Configurações" class="icon">
        <img src="placeholder.png" alt="Notificações" class="icon">
        <img src="placeholder.png" alt="Usuário" class="avatar">
      </div>
    </div>

    <!-- Atividade semanal -->
    <div class="card-block">
      <h5>Atividade Semanal</h5>
      <canvas id="barChart"></canvas>
    </div>

    <!-- Seção inferior (tempo de acesso + funcionalidades + pizza) -->
    <div class="row mt-4">
      <!-- Maiores tempo de acesso -->
      <div class="col-md-4">
        <div class="card-block">
          <h6>Maiores tempo de acesso</h6>
          <div class="avatars-grid">
            <img src="placeholder.png" alt="Usuário" class="avatar-lg">
            <img src="placeholder.png" alt="Usuário" class="avatar-lg">
            <img src="placeholder.png" alt="Usuário" class="avatar-lg">
            <img src="placeholder.png" alt="Usuário" class="avatar-lg">
            <img src="placeholder.png" alt="Usuário" class="avatar-lg">
            <img src="placeholder.png" alt="Usuário" class="avatar-lg">
            <img src="placeholder.png" alt="Usuário" class="avatar-lg">
            <img src="placeholder.png" alt="Usuário" class="avatar-lg">
          </div>
        </div>
      </div>

      <!-- Funcionalidades -->
      <div class="col-md-4">
        <div class="card-block">
          <h6>Funcionalidades mais acessadas</h6>
          <ul class="features-list">
            <li>Entradas e saídas</li>
            <li>A pagar</li>
            <li>Investimentos</li>
          </ul>
        </div>
      </div>

      <!-- Pizza -->
      <div class="col-md-4">
        <div class="card-block">
          <canvas id="pieChart"></canvas>
        </div>
      </div>
    </div>

    <!-- Acessos recentes -->
    <div class="card-block mt-4">
      <h6>Acessos recentes</h6>
      <ul class="list-unstyled">
        <li><img src="placeholder.png" class="avatar-sm"> Jorge - Online a 10 minutos atrás</li>
        <li><img src="placeholder.png" class="avatar-sm"> João - Online a 30 minutos atrás</li>
        <li><img src="placeholder.png" class="avatar-sm"> Ricardo - Online a 1 hora atrás</li>
        <li><img src="placeholder.png" class="avatar-sm"> André - Online a 1 hora atrás</li>
        <li><img src="placeholder.png" class="avatar-sm"> Fernando - Online a 1 hora atrás</li>
      </ul>
    </div>

  </div>

  <!-- Bootstrap + Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="js/charts.js"></script>
</body>
</html>
