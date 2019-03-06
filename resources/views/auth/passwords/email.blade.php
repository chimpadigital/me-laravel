<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/ripple.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <!-- /theme JS files -->

</head>


<body class="bg-slate-800">

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
        <div class="navbar-brand">
            <a href="/" class="d-inline-block">
                <img src="{{ asset('/img/logo_pmz.png') }}" alt="">
            </a>
        </div>


        
    </div>
    <!-- /main navbar -->

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login form -->
                 <form class="login-form"  method="POST" action="{{ route('password.email') }}">

                      @if (session('status'))
                        <div class="alert alert-success alert-styled-left alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                            <span class="font-weight-semibold">{{ session('status') }}</span>
                        </div>
                    @endif
                    @if ($errors->any())

                                <div class="alert alert-warning alert-styled-left alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                                    <span class="font-weight-semibold">Atención!</span>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </div>


                        @endif

                    
                @csrf

                    <div class="card mb-0">
                        <div class="card-body" style="width:314px">
                            <div class="text-center mb-3">
                                <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Recupero de contraseña</h5>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input type="email" class="form-control" placeholder="Ingresa tu Email"  name="email" value="{{ old('email') }}" required>
                                <div class="form-control-feedback">
                                    <i class="icon-mail5 text-muted"></i>
                                </div>
                            </div>

                           

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block legitRipple">Iniciar <i class="icon-circle-right2 ml-2"></i></button>
                            </div>

                           
                        </div>
                    </div>
                </form>
                <!-- /login form -->

            </div>
            <!-- /content area -->


            
        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->



</body>
</html>




