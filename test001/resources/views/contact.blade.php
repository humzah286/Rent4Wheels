@extends('layouts.main')

@section('main-section')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <!-- <h2>Inner Page</h2> -->
                <ol>
                    <li><a href="home">Home</a></li>
                    <li>Contact us</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->


    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact us through our email or phone no. Or visit our office on given address</p>
            </div>

            <div class="row no-gutters justify-content-center" data-aos="fade-up">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>street 96-A, E-11, Islamabad</p>
                        </div>

                        <div class="email mt-4">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>Rent4wheels@gmail.com</p>
                        </div>

                        <div class="phone mt-4">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+92 335 2305230</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-5 d-flex align-items-stretch">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d829.8521153441716!2d72.97354282920206!3d33.69837811455278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e3dcb2003271cd1!2zMzPCsDQxJzU0LjIiTiA3MsKwNTgnMjYuNyJF!5e0!3m2!1sen!2s!4v1649866924673!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    
                    <form action="{{ url('signup') }}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->


@endsection