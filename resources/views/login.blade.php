<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">
    <title>Login</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!--------------------------- Left Box ----------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: white;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('assets/logosmkpgripku.png') }}" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-black fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">
                    L.M.S</p>
                <small class="text-black text-wrap text-center"
                    style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Learning Management
                    System</small>
            </div>

            <!-------------------- ------ Right Box ---------------------------->

            <div class="col-md-6 right-box">

                <div class="row align-items-center">

                    
                    <div class="header-text mb-4">
                        <h2>Selamat Datang!</h2>
                        <p>Silahkan Login Terlebih dahulu</p>
                    </div>
                    <div class="flex-column">

                        @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                    </div>

                    <form action="" method="POST">
                        @csrf
                    <div class="input-group mb-3">
                        
                        <input type="email" id="email" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Email address" required>
                            <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="input-group mb-4 ">
                        <input type="password" id="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Password" required>
                            <i class="fa-solid fa-lock"></i>
                    </div>
                    </div>
                    <div class="input-group mb-3 ">
                        <button class="btn btn-lg btn-primary w-100 fs-6" >Login</button>
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
