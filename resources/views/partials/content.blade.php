<div class='content'>
    <div class='container mx-auto'>
        <button class='current-series'>
            CURRENT SERIES
        </button>

        <div class="row">
            @if(session('delete'))
                <div class="col-12 mx-auto">
                    <div class="alert alert-warning mt-3" role="alert">
                        {{session('delete')}} has been deleted
                    </div>
                </div>
            @elseif(session('created'))
                <div class="col-12 mx-auto">
                    <div class="alert alert-success mt-3" role="alert">
                        {{session('created')}} has been created
                    </div>
                </div>
            @endif
        </div>

        <div class='d-flex list-comic'>
            @foreach($listComics as $comic)
                <div class="container-card">
                    <img src="{{ $comic['thumb'] }}" alt="images-comics">
                    <p>
                        <a class="text-decoration-none text-white" href="{{route('admin.show', $comic->id)}}">{{ strtoupper($comic['title'])}}</a>
                    </p>
                </div>         
            @endforeach              
        </div>

        <div class="row">
            <button class='col-2 mx-auto'>
                <a class='text-white text-decoration-none' href="{{route('admin.create')}}">LOAD MORE</a>
            </button>
        </div>
    </div>
</div>
