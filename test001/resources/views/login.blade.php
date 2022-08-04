<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ url('frontend/images/RENT4Wheels3.png') }}" rel="icon">
    <link href="{{ url('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

        #div1 {
            /* background-image: url("assets/css/pic1.jpg"); */
            /* background: url("https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80") center center; */
            /* background: url("assets/css/pic1.jpg") center center; */
            background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("{{ url('frontend/assets/css/pic1.jpg') }}") center center;
            width: 100%;
            box-sizing: border-box;
            /* height: calc(100vh - 50px); */
            /* background-attachment: fixed;
            background-clip: border-box; */
            background-size: cover;
        }

        /* body section div img{
            margin: 0;
            padding: 0;
            width: 100%;
            position: relative;
        } */

        /* #div2 {
            /* background-color: black;
            border-radius: 240px;
            display: flex;
            justify-content: center;
            align-content: center; */
        /* width: 500px;
        } */

        @media screen and (max-width: 520px) {
            #div3 {
                margin-bottom: 50px;
                ;
            }

            #footer1 {
                margin-top: 130px;
                ;
            }
        }

        @media screen and (max-width: 1000px) and (min-width: 520px) {
            #div3 {
                margin-bottom: 50px;
                ;
                position: relative;
                bottom: 69px;
            }

            /* #footer1{
                margin-top: 130px;;
            } */

            #div2 {
                display: flex;
                justify-content: center;
            }
        }

    </style>
</head>

<body>
    @if (session('alert'))
        <div class="alert alert-warning" style="margin-bottom: 0px;">
            {{ session('alert') }}
        </div>
    @endif
    <section class="vh-100">
        <div class="container-fluid h-custom" id="div1">
            <!-- <img src="assets/css/pic1.jpg" alt=""> -->
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div id="div2" class="col-md-9 col-lg-6 col-xl-5">
                    <!-- <div id="div2">
                    </div> -->
                    <a href="home">
                        <img src="{{ url('frontend/images/yes.png') }}" class="img-fluid" alt="Sample image"
                            style="width: 500px;">
                    </a>
                </div>
                <div id="div3" class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 p-5"
                    style="background-color: white; border-radius: 15px;">
                    <div style="height:10px;"></div>
                    <form action="login" method="post">
                        @csrf
                        <div
                            class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start pt-4 pb-4">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-facebook-f" style="background-color: black; border-radius: 50px;"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-google" style="background-color: black; border-radius: 50px;"></i>
                            </button>

                            <button type="button" class="btn btn-primary btn-floating mx-1">
                                <i class="fab fa-linkedin-in" style="background-color: black; border-radius: 50px;"></i>
                            </button>
                        </div>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" name="password"
                                class="form-control form-control-lg" placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="forgetpass.php" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg bg-dark"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup"
                                    class="link-danger">Register</a></p>
                        </div>
                    </form>
                    <div style="height:20px;"></div>
                </div>
            </div>
        </div>
        <!-- --------------------------------- -->
        <!-- <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">Sign up</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
    Modal Register Form</a>
</div> -->
        <!-- --------------------------------------- -->
        <div id="footer1"
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-dark">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2020. All rights reserved.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#!" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#!" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
</body>

</html>
