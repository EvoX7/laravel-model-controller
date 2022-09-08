<div class="container">
    <div class="row ms-5 ps-4">
        @forelse ($movies as $movie)
            <div class="card col-4 p-3 m-2">
                <img src="{{ $movie->poster }}" class="card-img-top" alt="cover">
                <div class="card-body">
                    <h4 class="card-title text-center fw-bold">{{ $movie->title }}</h4>
                    <h6 class="card-title text-center"> <span class="fw-bold">Original Title:
                        </span>{{ $movie->original_title }}</h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <span class="fw-bold">Nationality:</span> {{ $movie->nationality }}
                    </li>
                    <li class="list-group-item"><span class="fw-bold">Relese date:</span> {{ $movie->date }}</li>
                    <li class="list-group-item"><span class="fw-bold">Rating:</span> {{ $movie->vote }}</li>
                </ul>
            </div>
        @empty
            <h3>No Movies available</h3>
        @endforelse
    </div>
</div>
