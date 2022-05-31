@extends ('template')

@section ('content')


<div class="row">
    <div class="col-md-12">
        <h1>Movie searcher</h1s>
        <form action="/movie" method="post">
            @csrf
            <div class="mb-3">
                <label for="movieSearcher" class="form-label">
                    Search movies
                </label>
                <input type="text" class="form-control" name="movie">
            </div>
            <button type="submit" class="btn btn-primary mt-3">
                Search
            </button>
        </form>
    </div>
</div>


<br>


@isset($movie)
    <div class="col-md-12">
        <h3>Results</h3>
        <div class="row">
            @foreach($movies->Search as $row)
            <div class="card" style="width: 17rem; margin:2px">
                <img src="{{$row->Poster}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$row->Title}}, {{$row->Year}}</h5>
                    <a href="#" class="btn btn-primary">Details</a>
                    @auth
                        <a href="#" class="btn btn-primary">Favorite</a>
                    @endauth
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endisset

@endsection


