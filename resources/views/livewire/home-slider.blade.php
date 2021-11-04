<div class="row mb-3">
    @php
        $init = 0;
    @endphp
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($sliders as $s)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $init }}"
                    class="{{ $init === 0 ? 'active' : '' }}" aria-current="true"
                    aria-label="{{ $s->name }}"></button>
                @php
                    $init ++;
                @endphp
            @endforeach
            @php
                $init = 0;
            @endphp
            {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button> --}}
        </div>
        <div class="carousel-inner">
            @foreach ($sliders as $s)
                <div class="carousel-item {{ $init === 0 ? 'active' : '' }}">
                    <img src="{{ asset("/assets/$s->image") }}" class="d-block w-100">
                </div>
                @php
                    $init ++;
                @endphp
            @endforeach
            {{-- <div class="carousel-item active">
                <img src="{{asset('/assets/images/small/img-1.jpg')}}" height="600" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="{{asset('/assets/images/small/img-2.jpg')}}" height="600" class="d-block w-100" >
            </div>
            <div class="carousel-item">
                <img src="{{asset('/assets/images/small/img-7.jpg')}}" height="600" class="d-block w-100" >
            </div> --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
