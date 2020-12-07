@include("style.style_movie_list")

<div class="category_container">
    <h2 class="category_title">{{$drama_movies[0]->Genre->name}}</h2>
    <div class="movies_container">
        @foreach($drama_movies as $movie)
            <div class="movie_container">
                <img src="{{ asset('images/'.$movie -> photo)}}" alt="{{ $movie -> title }}" class="movie_photo">
                <h4 class="movie_title">{{ $movie -> title }}</h4>
                <form action="/detail" name="movie_id" method="get">
                    <input type="hidden" name="movie_id" value="{{ $movie -> id }}"/>
                    <button type="submit" class="btn_lihat_film">LIHAT FILM</button>
                </form>
            </div>
        @endforeach
    </div>
</div>