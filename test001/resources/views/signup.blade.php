<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Signup</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ url('frontend/images/RENT4Wheels3.png') }}" rel="icon">
    <link href="{{ url('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet"> -->

    <!-- Font Awesome -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" /> -->
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" /> -->
    <!-- MDB -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" /> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            background-color: rgba(0, 0, 0, 0.87);
        }

    </style>

</head>

<body>
    <div class="container">
        <form method="post" action="{{ url('signup') }}" onsubmit="submitForm(event)">
            @csrf
            <div class="d-flex justify-content-center">
                <a href="/home">
                    <img src="{{ url('frontend/images/RENT4Wheels (1).png') }}" alt="">
                </a>
            </div>
            <div class="container bg-light border border-2 rounded mt-3 p-5">
                <h1 class="mt-3">Sign up</h1>
                <hr style="width:80%;text-align:left;margin-left:0">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="name" name="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="Enter name">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput2"
                        placeholder="Enter email">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone No.</label>
                    <input type="text" name="phone_no" class="form-control" id="exampleFormControlInput3"
                        placeholder="Enter phone no.">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="Password001"
                        placeholder="Enter password">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                        onclick="myFunction()">
                    <label class="form-check-label" for="flexCheckDefault">
                        Show Password
                    </label>
                </div>

                <script>
                    function myFunction() {
                        var x = document.getElementById("Password001");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>

                <!-- <label for="exampleFormControlInput1" class="form-label">Gender</label> -->
                <h5 class="mt-4">Gender</h5>
                <div class="form-check">
                    <input name="gender" class="form-check-input" type="radio" name="flexRadioDefault"
                        id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input name="gender" class="form-check-input" type="radio" name="flexRadioDefault"
                        id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>

                <button type="submit" class="btn btn-dark mt-5">Sign up</button>
                <div style="height: 28px;"></div>
            </div>
            <div style="height: 40px;"></div>

            <script>
                name = document.getElementById('exampleFormControlInput1');
                email = document.getElementById('exampleFormControlInput2');
                phone = document.getElementById('exampleFormControlInput3');
                password = document.getElementById('Password001');

                function submitForm(event) {
                    if (name.value == '' || email.value == '' || phone.value == '' || password.value == '') {
                        alert('please fill all entries first!!');
                        event.preventDefault();
                    }
                }
            </script>
        </form>
    </div>
</body>

</html>
