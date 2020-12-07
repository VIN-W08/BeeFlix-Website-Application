<style>
    .movie_detail_container{
        display: flex;
        background-color: white;
    }

    .movie_photo{
        margin-left: 60px;
        width: 280px;
        height: 400px; 
        margin-top: 25px;
        margin-bottom: 10px;
    }

    .movie_intro_container{
        width: 300px;
        margin-left: 60px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: justify;
    }
    
    .category_movie{
        display: flex;
    }

    .category_txt{
        color:black;
        font-family: Arial, Helvetica, sans-serif;
    }

    .category_title{
        color: blue;
        font-family: Arial, Helvetica, sans-serif;
    }

    .category_link{
        text-decoration: none;
    }

    .movie_rating{
        color: black;
        font-family: Arial, Helvetica, sans-serif;
        margin-top: -15px;
    }

    .movie_desc{
        margin-top: -15px;
    }
    
    .episode_container{
        margin-left: 60px;
        font-family: Arial, Helvetica, sans-serif;
    }

    table{
        border: 1px solid white;
    }
    
    th{
        padding-top: 20px;
        padding-bottom: 20px;
        border-top: 2px solid rgb(224, 224, 224);
        border-bottom: 2px solid rgb(224, 224, 224);
    }

    td{
        padding-top: 20px;
        padding-bottom: 20px;
        border-bottom: 2px solid rgb(224, 224, 224);
    }

    .column_episode{
        padding-right: 20px;
    }

    ul{
        display: flex;
        margin-left: -36px;
    }

    li{
        list-style-type: none;
        border: 1px solid rgb(224, 224, 224);
        padding: 6px;
    }

    li a{
        text-decoration: none;
        color: black;
    }

    li:hover{
        background-color: blue;
    }

    li:hover a{
        color: white;
    }

</style>

@extends("template")

@section("content")
    <div class="movie_detail_container">
        <img src="{{ asset('images/'.$movie -> photo)}}" alt="{{ $movie -> title }}" class="movie_photo">
        <div class="movie_intro_container">
            <h3>{{$movie -> title}}</h3>
            <div class="category_movie">
                <h4 class="category_txt">Category:&nbsp;</h4>
                @if($movie -> Genre -> name == "Drama")
                    <a href="/drama" class="category_link">
                        <h4 class="category_title">{{$movie -> Genre -> name}}</h4>
                    </a>
                @elseif($movie -> Genre -> name == "Kids")
                    <a href="/kids" class="category_link">
                        <h4 class="category_title">{{$movie -> Genre -> name}}</h4>
                    </a>
                @elseif($movie -> Genre -> name == "TV Show")
                    <a href="/tv_show" class="category_link">
                        <h4 class="category_title">{{$movie -> Genre -> name}}</h4>
                    </a>
                @endif
            </div>
            <h4 class="movie_rating">Rating: {{$movie -> rating}}</h4>
            <p class="movie_desc">{{ $movie -> description }}</p>
        </div>
        <div class="episode_container">
            <h3>EPISODE</h3>
            <table>
                <thead>
                    <tr>
                        <th class="column_episode">episode</th>
                        <th>judul</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($episodes as $episode)
                    <tr class="row">
                        <td>{{$episode -> episode}}</td>
                        <td class="judul_column">:{{$episode -> title}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$episodes -> withQueryString() -> links()}}
        </div>
    </div>

@endsection