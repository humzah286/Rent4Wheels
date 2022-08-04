{{-- <script>
    str = window.location.href
    console.log("str = ", str)
    if (str.endsWith("#categories")){
        str -= "#categories"
        str += "#anchor"
        window.location.href = str
    }

</script> --}}

@extends('layouts.main')

@section('main-section')
<main id="main">
    <style>
        @media screen and (max-width: 992px) {
        #hero { margin-top: 36px}}
    </style>
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
        {{-- <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --> --}}

        <section id="hero" class="d-flex flex-column justify-content-center align-items-center custom_css">
            <div class="container text-center text-md-left" data-aos="fade-up">
                <h1>Welcome to Rent4Wheels</h1>
                <h2>High quality cars at your doorstep</h2>
                {{-- <div class="">
          <div class="input-group justify-content-center">
            <div class="d-flex justify-content-center">
              <div class="">
                <!-- <input type="search" id="form1" class="form-control" style="background-color: white;"/>
                <label class="form-label" for="form1">Search</label> -->
                <input type="text" class="form-control bg-white rounded-0" placeholder="Search">
              </div>
              <button type="button" class="btn btn-primary bg-dark rounded-0">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div> --}}
            </div>
            </div>
        </section>


        <div class="d-flex justify-content-between flex-wrap"
            style="margin-top: 100px; width: 70%; margin-left: auto;margin-right: auto;">
            <div class="d-flex justify-content-center align-items-center">
                <h1>Popular Deals</h1>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <a href="/category/popular">View All</a>
            </div>
        </div>

        <div class="d-flex justify-content-around flex-wrap"
            style="width: 80%; margin-left:auto;margin-right:auto; margin-top: 50px;">
            @for ($i = 0; $i < 3; $i++)
                <div class="card mb-3 ml-3" style="width: 20rem;">
                    <div style="height: 240px; width: 100%; display: flex; align-items: center; object-fit:contain;">
                        <img src="{{ $car[$i]->picturelink }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $car[$i]->Name }}</h5>
                        <p class="card-text"><strong>Rs. {{ $car[$i]->price }}/- per day</strong><br>
                            @if ($car[$i]->available == 1)
                                Available
                            @else
                                Unavailable
                            @endif
                        </p>
                        <a href="viewcar/{{ $car[$i]->id }}" class="btn btn-primary">View</a>
                    </div>
                </div>
            @endfor
        </div>

        <h1 style="margin-top: 140px; width: 70%; margin-left: auto;margin-right: auto;">Categories</h1>

        <a id="anchor"></a>
        <div class="d-flex flex-wrap justify-content-around" style="width: 75%; margin-left: auto; margin-right: auto;">

          @for ($i = 0; $i < 6; $i++)
            
          <a href="categories/{{$category[$i]->category}}" class="text-decoration-none">
            <div class="ml-4 mb-2 bg-dark text-white mt-4 rounded"
            style="width: 290px; text-align:center; padding-top: 40px; padding-bottom: 40px;">
            <h5>{{$category[$i]->category}}</h5>
          </div>
        </a>
        @endfor
        </div>

        <div style="height: 50px;"></div>

    </main>
@endsection
