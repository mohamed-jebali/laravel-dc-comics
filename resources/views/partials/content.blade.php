<div class='content'>
    <div class='container mg-auto'>
            <button class='current-series'>
                   CURRENT SERIES
            </button>
            <div class='d-flex list-comic'>
                @foreach($listComics as $comic)
                     <div class="container-card">
                        <img src="{{ $comic['thumb'] }}" alt="images-comics">
                        <p>
                             <a class="text-decoration-none text-white" href="{{route('admin.show', $comic->id)}}">{{ strtoupper($comic['series'])}}</a>
                         </p>
                    </div>         
                @endforeach              
                <button>
                    <a class='text-white text-decoration-none' href="{{route('admin.create')}}">LOAD MORE</a>
                </button>
            </div>
            </div>
        </div>
    </div>