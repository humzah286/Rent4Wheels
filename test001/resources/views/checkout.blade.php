@extends('layouts.main')

@section('main-section')
    @if (session('alert'))
        <div class="alert alert-success" style="margin-top: 46px;">
            {{ session('alert') }}
        </div>
    @endif

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />

    <link href="{{ url('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../../css/assets/vendor/aos/aos.css"> --}}

    <link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- Credit card form -->
    <div style="width: 80%; margin-left: auto; margin-right: auto;">
        <section>
            <div class="row">
                <div class="col-md-8 mb-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Biling details</h5>
                        </div>
                        <div class="card-body">
                            <form action="/checkout" method="post" onsubmit="submitForm(event)">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form6Example1" class="form-control"
                                                name="firstname" />
                                            <label id="fname" class="form-label" for="form6Example1">First name</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="form6Example2" class="form-control" name="lastname" />
                                            <label class="form-label" for="form6Example2">Last name</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form6Example3" class="form-control" name="company_name" />
                                    <label class="form-label" for="form6Example3">Company name</label>
                                </div>

                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                    <input type="text" id="form6Example4" class="form-control" name="address" />
                                    <label class="form-label" for="form6Example4">Address</label>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form6Example5" class="form-control" name="email" />
                                    <label class="form-label" for="form6Example5">Email</label>
                                </div>

                                <!-- Number input -->
                                <div class="form-outline mb-4">
                                    <input type="number" id="form6Example6" class="form-control" name="phone_no" />
                                    <label class="form-label" for="form6Example6">Phone</label>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="date" id="date1" class="form-control"
                                                name="start_date" />
                                            <label class="form-label" for="date1">Start date</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="date" id="date2" class="form-control" name="end_date" />
                                            <label class="form-label" for="date2">End date</label>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4" />

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="checkoutForm1" />
                                    <label class="form-check-label" for="checkoutForm1">
                                        Shipping address is the same as my billing address
                                    </label>
                                </div>

                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="checkoutForm2"
                                        checked />
                                    <label class="form-check-label" for="checkoutForm2">
                                        Save this information for next time
                                    </label>
                                </div>

                                <hr class="my-4" />

                                <h5 class="mb-4">Payment</h5>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="checkoutForm3" checked />
                                    <label class="form-check-label" for="checkoutForm3">
                                        Credit card
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="checkoutForm4" />
                                    <label class="form-check-label" for="checkoutForm4">
                                        Debit card
                                    </label>
                                </div>

                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="checkoutForm5" />
                                    <label class="form-check-label" for="checkoutForm5">
                                        Paypal
                                    </label>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="formNameOnCard" class="form-control"
                                                name="name_on_card" />
                                            <label class="form-label" for="formNameOnCard">Name on card</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <input type="text" id="formCardNumber" class="form-control"
                                                name="credit_card_no" />
                                            <label class="form-label" for="formCardNumber">Credit card number</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-3">
                                        <div class="form-outline">
                                            <input type="text" id="formExpiration" class="form-control"
                                                name="Expiration" />
                                            <label class="form-label" for="formExpiration">Expiration</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-outline">
                                            <input type="text" id="formCVV" class="form-control" name="CVV" />
                                            <label class="form-label" for="formCVV">CVV</label>
                                        </div>
                                    </div>
                                </div>

                                <input style="display: none" type="number" name="car_id" id=""
                                    value="{{ $car[0]->id }}">
                                <input style="display: none" type="number" name="total" id=""
                                    value="{{ $car[0]->price * 1.17 }}">

                                <button id="button" class="btn btn-primary btn-lg btn-block bg-dark" type="submit">
                                    Continue to checkout
                                </button>
                                <script>
                                    fname = document.getElementById('fname');
                                    cname = document.getElementById('form6Example3');
                                    address = document.getElementById('form6Example4');
                                    email = document.getElementById('form6Example5');
                                    pno = document.getElementById('form6Example6');
                                    date1 = document.getElementById('date1');
                                    date2 = document.getElementById('date2');
                                    formNameOnCard = document.getElementById('formNameOnCard');
                                    formCardNumber = document.getElementById('formCardNumber');
                                    formExpiration = document.getElementById('formExpiration');
                                    formCVV = document.getElementById('formCVV');

                                    function submitForm(event) {
                                        if (fname.value == '' || cname.value == '' || address.value == '' || email.value == '' || pno.value == '' ||
                                            date1.value == '' || date2.value == '' || formNameOnCard.value == '' || formCardNumber.value == '' ||
                                            formExpiration.value == '' || formCVV.value == '') {
                                            alert('please fill all entries first!!');
                                            event.preventDefault();
                                        }
                                    }
                                </script>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Car
                                    <span>{{ $car[0]->Name }}</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span>Rs {{ $car[0]->price }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Delivery
                                    <span>{{ $user[0]->name }}</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>Rs {{ $car[0]->price * 1.17 }}</strong></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Credit card form -->
    {{-- <script>
        nav = document.getElementById('navbar')
        btn = document.getElementById("navbarMobileBtn")
        console.log(btn)
        nav.addEventListener('click', function(e) {
            console.log('clicked nav!')
            nav.classList.toggle('navbar-mobile')
            btn.classList.toggle('bi-list')
            btn.classList.toggle('bi-x')
        })
    </script> --}}
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
@endsection

@section('bread-crumbs')
    <section class="breadcrumbs bc0" style="">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $car[0]->Name }}</h2>
                <ol>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/categories/{{ $car[0]->Category }}">{{ $car[0]->Category }}</a></li>
                    <li>{{ $car[0]->Name }}</li>
                </ol>
            </div>
        </div>
    </section>
@endsection

