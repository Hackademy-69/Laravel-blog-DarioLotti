<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img  src="/img/logo.png" class="img-fluid w-25" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link "  href="{{route('homepage')}}">homepage</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('personaggi')}}">Personaggi</a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="route('Grifondoro')">Grifondoro</a>
                  </li> --}}
                
              
          </div>
        </div>
      </nav>
      
      
          
     <div class="container">
      <div class="row justify-content-center ">

        @foreach ( $characters as  $character)
      <div class="div col-12 col-md-6 justify-content-center mt-4 d-flex">
        <div class="card" style="width: 18rem;">
        <img src=  {{$character['img']}} class="card-img-top" alt="foto casuale">
        <div class="card-body">
          <h5 class="card-title"> {{$character['name']}} </h5>
          <p class="card-text">{{$character['teams']}}</p>
          <a href="{{route('HarryPotter.dettaglio', ['name' =>$character['name']])}}" class="btn btn-primary">Dettaglio</a>
        </div>
      </div>
    </div>
    @endforeach
    
  </div>
</div>
     



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>