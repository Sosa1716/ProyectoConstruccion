<!--NavBar de bootstrap-->
<nav class="navbar navbar-expand-lg" style="background-color: rgb(243, 156, 18);" >
  <div class="container-fluid justify-content-center">
    <a class="navbar-brand" href="#">Sosa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="{{route('index')}}">Inicio</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('employees.index')}}">Empleados</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('materials.index')}}">Materiales</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('workers.index')}}">Trabajador</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('projects.index')}}">Proyectos</a>
            </li>
      </ul>
    </div>
  </div>
</nav>
