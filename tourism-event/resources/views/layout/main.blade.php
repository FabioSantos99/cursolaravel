<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

      <link rel="stylesheet" href="/css/styles.css">
      <script src="/js/scripts.js"></script>

      
</head>
<body>
      <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="collapse navbar-collapse" id="navbar">
                   <a href="/" class="navbar-brand p-3">
                        <img src="/img/logoTourism.png" alt="TourismEvents">
                   </a>
                   <ul class="navbar-nav">
                        <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                        </li>

                        <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                        </li>

                        <li class="nav-item">
                        <a href="/" class="nav-link">Entrar</a>
                        </li>

                        <li class="nav-item">
                        <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                     
                   </ul>
                  </div>
            </nav>
      </header>
      @yield('content')
     <footer>
      <p>TOURISM &copy; 2023</p>
     </footer> 
</body>
</html>
