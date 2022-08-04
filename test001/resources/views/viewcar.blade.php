@extends('layouts.main')

@section('bread-crumbs')
    <style>
        .bc0 {
            margin-top: 36px;
        }

        @media screen and (min-width: 992px) {
            .bc0 {
                margin-top: 47px
            }
        }
    </style>
    <section class="breadcrumbs bc0" style="">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{$car[0]->Name}}</h2>
                <ol>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/categories/{{ $car[0]->Category }}">{{ $car[0]->Category }}</a></li>
                    <li>{{ $car[0]->Name }}</li>
                </ol>
            </div>
        </div>
    </section>
@endsection

@section('main-section')
    <!-- ======= Breadcrumbs Section ======= -->
    <!-- End Breadcrumbs Section -->

    <!-- <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
            <div class="container text-center text-md-left" data-aos="fade-up">
              <h1>Welcome to Rent4Wheels</h1>
              <h2>High quality cars at your doorstep</h2>
              <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
          </section> -->
    <style>
        .img-resize2 { 
            width: 600px;
        }

        @media screen and (max-width: 600px) { 
            .img-resize2{ 
                width: 300px;
            }
        }

        @media screen and (max-width: 992px) and (min-width: 600px) { 
            .img-resize2{ 
                width: 500px;
            }
        }
    </style>

    <div class="container justify-content-center" style="margin-top: 50px;">
        <div class="d-flex justify-content-center">
            <img src="{{ $car[0]->picturelink }}" class="img-resize2" style="" alt="">
        </div>
        <div style="height: 40px;"></div>
        <h1>{{ $car[0]->Name }}</h1>
        <h3 class="card-text mt-4" style="color: dark-grey;"><strong>Rs. {{ $car[0]->price }}/- per day</strong></h3>
        <div><img src="4-star-icon-11.png" alt="" height="80"></div>
        <h3>
            @if ($car[0]->available == 1)
                Available
            @else
                Unavailable
            @endif
        </h3>
        <p>{{ $car[0]->description }}</p>
        <div style="height: 40px;"></div>
        <div class="d-flex justify-content-center mt-4">
            <a href="/checkout/{{ $car[0]->id }}">
                <button type="button" class="btn btn-dark btn-lg">Book Now</button>
            </a>
        </div>
        <div style="height: 140px;"></div>

        {{-- <div class="d-flex justify-content-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/CCf1dLYjoOw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> --}}

        {{-- <div style="height: 140px;"></div> --}}

    </div>
@endsection
