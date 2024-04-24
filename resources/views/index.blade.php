<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    @vite('resources/js/app.js')
</head>
<body>
<main class="d-flex flex-nowrap">
  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Menu</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          Escolas
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          Turma
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          Professor
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          Dashboard
        </a>
      </li>
    </ul>
</main>
</body>
</html>