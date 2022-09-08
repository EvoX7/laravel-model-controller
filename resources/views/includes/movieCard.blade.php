
@forelse ($movies as $movie)

<div class="card" >
    <img src="https://edit.org/photos/images/cat/book-covers-big-2019101610.jpg-1300.jpg" class="card-img-top" alt="cover">
    <div class="card-body">
      <h4 class="card-title">{{ $movie -> title }}</h4>
      <h6 class="card-title">{{ $movie->original_title }}</h6>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"> Nationality: {{ $movie->nationality }}</li>
      <li class="list-group-item">Relese date: {{ $movie->date }}</li>
      <li class="list-group-item">Rating: {{ $movie->vote }}</li>
    </ul>
  </div>
  @empty
  <h3>No Movies available</h3>
  @endforelse