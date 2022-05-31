@extends ('template')

@section ('content')

<div class="row">
    <div class="col-md-12">
        <h1>Search your movies here.</h1>
        <form action="/movies" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">
                    What movie are you looking for?
                </label>
                <input type="text" class="form-control" name="movie">
            </div>

            <button type="submit" class="btn btn-primary mt-3">
                Search
            </button>
        </form>
    </div>
</div>

@isset('movies')

<div class="row">
    <div class="col-md-12">
        <h3>Results</h3>
        @foreach($movies->Search as $row)
            <div class="card" style="width: 16rem">
            
            </div>
        @endforeach
    </div>
</div>

@endisset


@endsection