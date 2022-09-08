<header>
    <nav class="navbar-dark container navbar navbar-expand-lg">
        <div class="container">
          <img src="{{ asset('public/assets/moviedb.png') }}" alt="logo">
          <a class="navbar-brand" href="{{route ('movieHomepage')}}">Movie DB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav fw-bold">
              <a class="nav-link " aria-current="page" href="#">Best Movies</a>
              <a class="nav-link" href="#">Choose by genre</a>
              <a class="nav-link" href="#">Ratings</a>
            </div>
          </div>
        </div>
      </nav>
</header>