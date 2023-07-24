<div class="blue-row">
        <div class="container d-flex text-white justify-content-end">
        <span class='me-4'>
                    DC POWER VISA ®
                </span>
                <span>
                   ADDITIONAL DC SITES
                   <i class="fa-solid fa-sort-down ms-2"></i>
                </span>
        </div> 
    </div>
<header>
<div class='container mg-auto'>    
        <header class="flex">
            <div class='brand'>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC-LOGO">
            </div>
            <ul class='d-flex align-items-center'>
            @foreach($headerList as $elementList)
                    <li class="{{ ($elementList['active']) ? 'active' : '' }}">
                        <a href="#">
                            {{$elementList['text']}}
                        </a>
                    </li>
                    @endforeach
                    <div class='search-bar ms-5'>
                        Search
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </ul>
        </header>
    </div>
</header>