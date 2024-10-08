<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{url('project/')}}">Gestion de proyecto</a>
            </li>
            
          </ul>
        </div>

        <div class="col-5">
          <br/>
          <p class="fs-1">Modificacion de Proyectos</p>
          <br/>
          <form action="{{ route('project.update', $proyecto->id ) }}" method="post">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">Id</span>
              <input type="text" name="id" id="id" class="form-control" value="{{$proyecto->id}}" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
              <input type="text" name="titulo" id="titulo" value="{{$proyecto->titulo}}" class="form-control" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group">
              <span class="input-group-text">Descripción</span>
              <textarea name="descripcion" id="descripcion" class="form-control" aria-label="With textarea">{{$proyecto->descripcion}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
        </div>

        <div class="col">
          3 of 3
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>