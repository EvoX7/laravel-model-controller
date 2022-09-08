<header>
    <nav class="navbar-dark container navbar navbar-expand-lg mb-5">
        <div class="container">
          <a  href="{{route ('movieHomepage')}}"><img id="logo" src="{{ asset('/assets/img/moviedb.png') }}" alt="logo"></a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ms-4" id="navbarNavAltMarkup">
            <div class="navbar-nav fw-bold">
              <a class="nav-link " aria-current="page" href="#">Best Movies</a>
              <a class="nav-link" href="#">Choose by genre</a>
              <a class="nav-link" href="#">Ratings</a>
            </div>
          </div>
        </div>
      </nav>
</header>