<main class="container-fluid d-flex p-3 mt-5 row">
    @foreach ($movies as $movie)
        <div class="card col-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">{{ $movie->nationality }}</p>
                <p class="card-title">{{ $movie->date }}</p>
                <p class="card-title">{{ $movie->vote }}</p>
            </div>
        </div>
      @endforeach
</main>