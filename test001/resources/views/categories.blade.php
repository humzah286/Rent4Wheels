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
                <h2>Categories</h2>
                <ol>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/home#anchor">Categories</a></li>
                </ol>
            </div>
        </div>
    </section>
@endsection

@section('main-section')
    <style>
        .img-resize{ 
            width: 380px;
        }

        @media screen and (max-width: 992px){
            .img-resize{
                width: 300px;
                margin-bottom: 20px;
            }
        }
    </style>
    <div class="container bcontent">
        <h2 class="mt-4">
            @if (count($car) == 0)
                No cars found
            @else
                {{ $car[0]->Category }}
            @endif
        </h2>

        <hr />

        <div class="d-flex flex-column m-1 m-lg-3">
            @for ($i = 0; $i < count($car); $i++)
                {{-- <div class="card mt-5" style="width: 1200px; height: 300px;">
        <div class="row no-gutters">
        <div class="">
            <div class="col-sm-4 align-middle" style="height: 300px;">
                <img class="card-img" src="{{ $car[$i]->picturelink }}" alt="Suresh Dasari Card" style="height: 200px; width: auto;">
            </div>
            <div class="col-sm-8">
                <div class="card-body">
                    <h5 class="card-title">{{$car[$i]->Name}}</h5>
                    <p class="card-text"><strong>Rs. {{$car[$i]->price}}/- per day</strong><br>
                        @if ($car[$i]->available == 1)
                            Available
                        @else
                            Unavailable
                        @endif
                    </p>
                    <p class="card-text">{{\Illuminate\Support\Str::limit($car[$i]->description, 206, $end='....')}}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago (static)</small></p>
                    <a href="/viewcar/{{$car[$i]->id}}" class="btn btn-primary">View car</a>
                </div>
            </div>
        </div>
    </div> --}}


                <div class="d-flex flex-column flex-lg-row border rounded p-2 m-2 p-lg-4 m-lg-4">
                    <div class="d-flex justify-content-center align-items-center" style="object-fit:contain;">
                        <img class="img-resize" src="{{ $car[$i]->picturelink }}" alt="">
                    </div>
                    <div class="px-1 px-lg-4">
                        <h5 class="card-title">{{ $car[$i]->Name }}</h5>
                        <p class="card-text"><strong>Rs. {{ $car[$i]->price }}/- per day</strong><br>
                            @if ($car[$i]->available == 1)
                                Available
                            @else
                                Unavailable
                            @endif
                        </p>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($car[$i]->description, 206, $end = '....') }}
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago (static)</small></p>
                        <a href="/viewcar/{{ $car[$i]->id }}" class="btn btn-primary">View car</a>
                    </div>
                </div>
            @endfor
        </div>



        <div class="container d-flex justify-content-center mt-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div style="height: 80px;"></div>
        </div>
    @endsection
