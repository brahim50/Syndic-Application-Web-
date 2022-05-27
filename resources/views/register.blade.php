<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png')}}">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary" style="position: relative;bottom: 130px;">
                <div>
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="{{ asset('images/logo.png')}}" alt="logo" /></span>
                    </div>
                    
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" action="{{route ('auth.save') }}" method="POST">
                        @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                        @csrf
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="nom" placeholder="Nom" aria-label="Username" aria-describedby="basic-addon1" required>
                                    <span class="text-danger">@error('nom'){{$message}} @enderror</span> 
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="prenom" placeholder="Prenom" aria-label="Username" aria-describedby="basic-addon1" required>
                                    <span class="text-danger">@error('prenom'){{$message}} @enderror</span>
                                </div>
                                <!-- email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="email" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" required>
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="ville" placeholder="Ville" aria-label="Username" aria-describedby="basic-addon1" required>
                                    <span class="text-danger">@error('ville'){{$message}} @enderror</span>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="tele" placeholder="Telephone" aria-label="Username" aria-describedby="basic-addon1" required>
                                    <span class="text-danger">@error('tele'){{$message}} @enderror</span>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="file" name="photo" class="custom-file-input"id="customFile"> <label class="custom-file-label" for="customFile">Photo</label>
                                    <span class="text-danger">@error('photo'){{$message}} @enderror</span>
                                </div>
                                <div class="input-group mb-3" style="position: relative;bottom: 25px;">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                </div>
                                <span style="position: relative;bottom: 28px;color: aliceblue;"> Already have an Account.</span>
                                <a href="{{route ('login')}}" style="position: relative;bottom: 28px;">
                                    Login
                                </a>
                            </div>
                        </div>
                        
                        <div class="" style="position: relative;bottom: 70px;">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-block btn-lg btn-info" type="submit">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('libs/popper.js/dist/umd/popper.min.js')}} "></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    </script>
</body>

</html>