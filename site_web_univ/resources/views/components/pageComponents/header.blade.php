<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand " href="#"><img width="50px" height="50px" class="rounded-circle" src="https://upload.wikimedia.org/wikipedia/fr/2/22/Logo_de_l%27universit%C3%A9_de_Thi%C3%A8s.jpg" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{route('home')}}>Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
        <div class="dropdown">
            <button class="btn btn-dark-subtle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
               Administration
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href={{route('categories.create')}}>Ajouter</a></li>
              <li><a class="dropdown-item" href={{route('categories.index')}}>Gestion des categories</a></li>
              <li><a class="dropdown-item" href="#">tableau de bord</a></li>
            </ul>
          </div>
      </div>
    </div>
  </nav>
