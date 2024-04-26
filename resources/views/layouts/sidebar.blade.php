<!-- <div class="container-fluid">
<div class="row">
    <div class="d-flex flex-column justfy-content-between col-auto bg-dark min-vh-100">
        <div>
            <a class="text-white text-decoration-none d-flex align-items-center ms-4" role="button" href="">
                <span class="fs-5">Sidemenu</span>
            </a>
            <ul
                class="nav nav-pills flex-column mt-2 mt-sm-0" id="menu">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <i class=" fa fa-guage"></i>
                        <span class="ms-2">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                        <i class=" fa fa-house"></i>
                        <span class="ms-2">Home</span>
                    </a>
                </li>
                <li class="nav-item disabled">
                <a href="#" class="nav-link active" aria-current="page">
                        <i class=" fa fa-guage"></i>
                        <span class="ms-2">Dashboard</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</div>
</div> -->

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Teste IG7-Sistema</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('escola') ? 'active' : '' }}" href="{{route('escola.show')}}">Escola</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('turma') ? 'active' : '' }}" href="#">Turma</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('professor') ? 'active' : '' }}" href="{{route('professor.show')}}">Professor</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
